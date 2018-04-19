<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->module = 'dashboard';
        $this->user_type = $this->session->userdata('user_type');
        $this->permission = $this->get_permission($this->module,$this->user_type);
    }

    function resize_imagejpg($file, $w, $h) {
	   list($width, $height) = getimagesize($file);
	   $src = imagecreatefromjpeg($file);
	   $dst = imagecreatetruecolor($w, $h);
	   imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);
	   return $dst;
	}

	public function index()
	{
		if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'Dashboard';
		$this->load->template('home',$this->data);
	}

}