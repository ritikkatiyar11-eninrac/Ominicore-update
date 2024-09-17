<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Default_Controler extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
    }
    public function is_login()
    {
        if (!$this->session->userdata('UID')) {
            redirect('/login');
        }
    }
    public function error404()
    {
        $this->output->set_status_header('404');
        $this->load->view('notfound');
    }
    public function authentication($credential)
    {
        $AuthCredential = $credential;
        $credentials = explode(":", base64_decode(str_replace("Basic ", "", $AuthCredential)));
        $username = $credentials[0];
        $password = $credentials[1];
        if ($username === 'chandan@eninrac.com' && $password === 'Chandan@123') {
            return 1;
        } else {
            return 0;
        }
    }
    public function jwt_encode($payload, $secret)
    {
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS384']);
        $header = base64_encode($header);
        $payload = base64_encode(json_encode($payload));
        $signature = hash_hmac('sha256', "$header.$payload", $secret, true);
        $signature = base64_encode($signature);
        return "$header.$payload.$signature";
    }
    // login login Important login
    public function is_email_exist($email)
    {
        $emailcheck = $this->db->select("*")->from('member')->where('email', $email)->get();

        if ($emailcheck->num_rows() > 0) {
            return $emailcheck->result();
        } else {
            return 0;
        }
    }
    public function time_elapsed_string($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
}
