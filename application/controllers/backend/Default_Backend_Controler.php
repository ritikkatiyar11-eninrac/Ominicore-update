<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Default_Backend_Controler extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->is_login();
    }

    public function is_login()
    {
        if (!$this->session->userdata('UID')) {
            redirect('backend-dashboard/login');
        }
    }

    function createSlug($title) {
        // Convert the string to lowercase
        $slug = strtolower($title);
        // Remove any characters that are not letters, numbers, or spaces
        $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
        // Replace any spaces or multiple hyphens with a single hyphen
        $slug = preg_replace('/[\s-]+/', '-', $slug);
        // Trim hyphens from the beginning and end of the slug
        $slug = trim($slug, '-');
        return $slug;
    }

    // public function error404()
    // {
    //     $this->output->set_status_header('404');
    //     $this->load->view('notfound');
    // }
    // public function authentication($credential)
    // {
    //     $AuthCredential = $credential;
    //     $credentials = explode(":", base64_decode(str_replace("Basic ", "", $AuthCredential)));
    //     $username = $credentials[0];
    //     $password = $credentials[1];
    //     if ($username === 'chandan@eninrac.com' && $password === 'Chandan@123') {
    //         return 1;
    //     } else {
    //         return 0;
    //     }
    // }
    // public function jwt_encode($payload, $secret)
    // {
    //     $header = json_encode(['typ' => 'JWT', 'alg' => 'HS384']);
    //     $header = base64_encode($header);
    //     $payload = base64_encode(json_encode($payload));
    //     $signature = hash_hmac('sha256', "$header.$payload", $secret, true);
    //     $signature = base64_encode($signature);
    //     return "$header.$payload.$signature";
    // }



    // // login login Important

    // public function is_email_exist($email)
    // {
    //     $emailcheck = $this->db->select("*")->from('member')->where('email', $email)->get();
    //     if ($emailcheck->num_rows() > 0) {
    //         return $emailcheck->result();
    //     } else {
    //         return 0;
    //     }
    // }

}
