<?php
class Daily_dispatch extends MY_Controller{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('daily_dispatch_model');
        $this->module = 'daily_dispatch';
        $this->user_type = $this->session->userdata('user_type');
        $this->id = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module,$this->user_type);
	}

	public function index()
	{
		if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'Daily Dispatch';
		$start = date('Y-m-01 00:00:01');
		$end = date('Y-m-t 23:59:59');
		$this->data['orders'] = $this->daily_dispatch_model->get_order($start,$end);
		$this->data['permission'] = $this->permission;
		//echo '<pre>';print_r($this->data['orders']);die;
		$this->load->template('daily_dispatch/index',$this->data);
	}
}