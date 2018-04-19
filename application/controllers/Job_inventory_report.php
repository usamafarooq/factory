<?php
class Job_inventory_report extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('job_inventory_report_model');
		$this->module = 'job_inventory_report';
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
		$this->data['title'] = 'All Orders';
		$start = date('Y-m-01');
		$end = date('Y-m-t');
		if ($this->input->post()) {
			$start = $this->input->post('start');
			$end = $this->input->post('end');
		}
		if ( $this->permission['view_all'] == '1'){
			$this->data['jobs'] = $this->job_inventory_report_model->get_item($start,$end);
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['jobs'] = $this->job_inventory_report_model->get_item($start,$end,$this->id);
		}
		$this->data['start'] = $start;
		$this->data['end'] = $end;
		$this->data['permission'] = $this->permission;
		$this->load->template('job_inventory_report/index',$this->data);
	}

	public function view($id)
	{
		if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'Job Detail';
		$this->data['requisition'] = $this->job_inventory_report_model->get_requisition($id);
		$this->load->template('job_inventory_report/view',$this->data);
	}

}