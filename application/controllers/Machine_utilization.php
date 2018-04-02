<?php
class Machine_utilization extends MY_Controller{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('machine_utilization_model');
        $this->module = 'machine_utilization';
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
			$this->data['flows'] = $this->machine_utilization_model->all_rows('flows');
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['flows'] = $this->machine_utilization_model->get_rows('flows',array('user_id'=>$this->id));
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('machine_utilization/index',$this->data);
	}

	public function machines()
	{
		$this->data['title'] = 'Machines Utilization';
		$flow = $this->input->post('flow');
		$this->data['detail'] = $this->machine_utilization_model->get_machines($flow);
		for ($i=0; $i < sizeof($this->data['detail']); $i++) { 
			$this->data['detail'][$i]['works'] = $this->machine_utilization_model->get_detail($this->data['detail'][$i]['id']);
		}
		$this->load->template('machine_utilization/plane',$this->data);
	}
}