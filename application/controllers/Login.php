<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->is_login();
        $this->load->model('Login_model');
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function is_login()
	{
		if ($this->session->userdata('user_id')) {
			redirect("home");
		}
	}

	public function check_login()
	{
		$data = $this->input->post();
		$user = $this->Login_model->get_row_single('users',array('email'=>$data['email'],'password'=>md5($data['password'])));
		if (!empty($user)) {
			$this->session->set_userdata('user_id', $user['id']);
			$this->session->set_userdata('user_type', $user['role']);
			redirect("home");
		}
		else{
			$this->session->set_flashdata('error', 'Email and Password do not match');
			redirect("login");
		}
	}
}