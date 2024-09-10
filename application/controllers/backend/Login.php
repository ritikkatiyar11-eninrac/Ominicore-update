<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
	private $table = "usergroup";

	public function index()
	{
		if ($this->session->userdata('UID')) {
			redirect('backend-dashboard/dashboard', 'refresh');
		} else {
			$this->load->view("backend/login");
		}
	}
	private function is_email_exist($email)
	{
		$emailcheck = $this->db->select("*")->from($this->table)->where('email', $email)->get();
		if ($emailcheck->num_rows() > 0) {
			return $emailcheck->result();
		} else {
			return 0;
		}
	}
	private function jwt_encode($payload, $secret)
	{
		$header = json_encode(['typ' => 'JWT', 'alg' => 'HS384']);
		$header = base64_encode($header);
		$payload = base64_encode(json_encode($payload));
		$signature = hash_hmac('sha256', "$header.$payload", $secret, true);
		$signature = base64_encode($signature);
		return "$header.$payload.$signature";
	}
	public function authentication($id = '')
	{
		header('Content-Type: application/json');
		if ($id == "") {
			http_response_code(400);
			exit(json_encode([
				"responseCode" => 400,
				'responseStatus' => true,
				'responseMessage' =>  "Request not Acceptable",
				'responseData' =>  "Bad Request"
			]));
		}		
		if ($id == 'login') $this->login_process();
		if ($id == 'signout') $this->signout();
	}
	private function login_process()
	{
		$json = json_decode($this->security->xss_clean($this->input->raw_input_stream));
		if ($json == "") {
			http_response_code(400);
			exit(json_encode([
				"responseCode" => 400,
				'responseStatus' => true,
				'responseMessage' =>  "Request not Acceptable",
				'responseData' =>  "Bad Request"
			]));
		}
		if ($json->username == "" || $json->password == "") {
			http_response_code(422);
			exit(json_encode([
				"responseCode" => 422,
				'responseStatus' => true,
				'responseMessage' =>  "Unprocessable Entity",
				'responseData' =>  "Username or Password is invalid"
			]));
		}
		if (strlen($json->password) < 3 || strlen($json->password) > 32) {
			http_response_code(422);
			exit(json_encode([
				"responseCode" => 422,
				'responseStatus' => true,
				'responseMessage' =>  "Unprocessable Entity",
				'responseData' =>  "Username or Password is invalid"
			]));
		}
		$username = $json->username;
		$password = $json->password;

		$userData = $this->is_email_exist($username);
		if ($userData == false) {
			http_response_code(404);
			exit(json_encode([
				"responseCode" => 404,
				'responseStatus' => true,
				'responseMessage' =>  "Not Found",
				'responseData' =>  "Username or Password is invalid"
			]));
		}
		if (!password_verify($password, $userData[0]->password)) {
			http_response_code(403);
			exit(json_encode([
				"responseCode" => 403,
				'responseStatus' => true,
				'responseMessage' =>  "Username or Password is invalid",
				'responseData' =>  "Username or Password is invalid"
			]));
		}
		if ($userData[0]->role != "admin") {
			http_response_code(401);
			exit(json_encode([
				"responseCode" => 401,
				'responseStatus' => true,
				'responseMessage' =>  "Unauthorized",
				'responseData' =>  "Username or Password is invalid"
			]));
		}
		if ($userData[0]->status != 1) {
			http_response_code(403);
			exit(json_encode([
				"responseCode" => 403,
				'responseStatus' => true,
				'responseMessage' =>  "Forbidden",
				'responseData' =>  "Username or Password is invalid"
			]));
		}
		$this->session->set_userdata([
			"UID" => $userData[0]->mid,
			"keytoken" => $userData[0]->privateKey,
			"username" => $userData[0]->username,
			"email" => $userData[0]->email,
			"created" => $userData[0]->created,
			"updated" => $userData[0]->updated,
			"role" => $userData[0]->role,
			"status" => $userData[0]->status,
			"emailVerify" => $userData[0]->emailVerify,
			"phoneVerify" => $userData[0]->phoneVerify,
		]);
		$jwt = $this->jwt_encode(array(
			"data" => $this->session->userdata(),
			"exp" => time() + 3600 // Token expiration time (e.g., 1 hour)
		), 'Fl7IGGCdR1NERjF6N02lD2lgvrmvxFb6Yc1sCJgAwglcgYgk9MTtCvu4G2Cy');
		http_response_code(200);
		exit(json_encode([
			"responseCode" => 200,
			'responseStatus' => true,
			'responseMessage' =>  "OK",
			'responseData' =>  $jwt
		]));
	}
	public function signout()
	{
		if ($this->session->has_userdata('UID')) {
			$this->session->sess_destroy('UID');
			redirect('backend-dashboard/login', 'refresh');
		} else {
			redirect('backend-dashboard/login', 'refresh');
		}
	}
}
