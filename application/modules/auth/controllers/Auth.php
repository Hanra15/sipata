<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('guzzle_request_helper');
		$this->load->helper('tanggal_helper');
		$this->load->model('m_login');
	}


	public function index()
	{
		if (isset($this->session->userdata['logged'])) {
			redirect('/dashboard');
		} else {
			$data["title"] = "LOGIN | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
			$data["captcha"] = $this->recaptcha->getWidget();
			$data["script_captcha"] = $this->recaptcha->getScriptTag();
			$this->load->view('login_view', $data);
		}
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$recaptcha = $this->input->post('g-recaptcha-response');
		$rescaptcha = $this->recaptcha->verifyResponse($recaptcha);
		if (!isset($rescaptcha['success']) || $rescaptcha['success'] <> true) {
			$this->index();
		} else {
			$response = $this->m_login->auth($username, $password);
		}

		$data_session['username'] = $username;
		$data_session['token'] = $response['result']['token'];
		$data_session['logged'] = 1;

		$dataUser = guzzle_request('GET', 'user/1?', [
			'query' => array(
				'token' => $response['result']['token']
			)
		]);

		$data_session['name'] = $dataUser['data'][0]['name'];
		$data_session['user'] = $dataUser['data'][0]['username'];

		// var_dump($data_session['name']);
		// die;


		$this->session->set_userdata($data_session);

		redirect('dashboard');
		// $get = $this->session->userdata['token'];
		// var_dump($get);
		// die;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
