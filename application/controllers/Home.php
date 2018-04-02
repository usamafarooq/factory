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
		$img = $this->resize_imagejpg('C:\xampp\htdocs\itgs-new\uploads\profile_photo\lady.jpg', 565, 392);
		imagejpeg($img, 'C:\xampp\htdocs\itgs-new\uploads\profile_photo\new.jpg');
		// test
		// $vin    = 'abc.............';
		// $atoken = 'z9p3gqd3rruuz29d5fsys54s';
		// $request_headers   = array();
		// $request_headers[] ='Authorization: Bearer '.$atoken;
		// $request_headers[] ='Content-Type: application/x-www-form-urlencoded';
		// $handle  = curl_init();
		// $api_url = 'https://api.manheim.com/descriptions/capture/vin/'.$vin;    
		// $rawPostData = array( 'grant_type' => 'client_credentials', 'client_id' => 'z9p3gqd3rruuz29d5fsys54s', 'client_secret' => 'Qs55gwTb24'); 
		// // $data_string     = json_encode($rawPostData);
		// $data_string = '';
		// //create name value pairs seperated by &
		// foreach($rawPostData as $k => $v) 
		// { 
		//     $data_string .= $k . '='.$v.'&'; 
		// }
		// rtrim($data_string, '&');
		// curl_setopt_array(
		//     $handle,
		//     array(
		//         CURLOPT_URL             => $api_url,
		//         CURLOPT_POST            => true,
		//         CURLOPT_POSTFIELDS      => $data_string,
		//         CURLOPT_RETURNTRANSFER  => true,
		//         CURLOPT_HTTPHEADER      => $request_headers,
		//         CURLOPT_SSL_VERIFYPEER  => false,
		//         CURLOPT_HEADER          => true,
		//         CURLOPT_TIMEOUT         => -1
		//     )
		// );
		// $data = curl_exec($handle);
		// echo serialize($data);die;
		if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'Dashboard';
		$this->load->template('home',$this->data);
	}

}