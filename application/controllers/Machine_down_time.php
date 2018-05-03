<?php
class Machine_down_time extends MY_Controller{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('machine_down_time_model');
        $this->module = 'machine_down_time';
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
		$this->data['title'] = 'Machines Utilization';
		if ( $this->permission['view_all'] == '1'){
			$this->data['flows'] = $this->machine_down_time_model->all_rows('machines');
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['flows'] = $this->machine_down_time_model->get_rows('machines',array('user_id'=>$this->id));
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('machine_down_time/index',$this->data);
	}

	public function machines()
	{
		$machine = $this->input->post('machine');
		$date = $this->input->post('date');
		//$data = $this->machine_down_time_model
	}
}