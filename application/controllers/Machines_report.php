<?php
class Machines_report extends MY_Controller{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('machines_report_model');
        $this->module = 'machines_report';
        $this->user_type = $this->session->userdata('user_type');
        $this->id = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module,$this->user_type);
	}

	public function index()
	{
		$this->data['title'] = 'Machines Utilization';
		//$flow = $this->input->post('flow');
		$this->data['detail'] = $this->machines_report_model->get_machines();
		for ($i=0; $i < sizeof($this->data['detail']); $i++) { 
			$this->data['detail'][$i]['works'] = $this->machines_report_model->get_detail($this->data['detail'][$i]['id']);
		}
		$this->load->template('machines_report/index',$this->data);
	}
}