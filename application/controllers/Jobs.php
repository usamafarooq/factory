<?php
class Jobs extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jobs_model');
		$this->module = 'jobs';
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
			$this->data['jobs'] = $this->jobs_model->get_item($start,$end);
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['jobs'] = $this->jobs_model->get_item($start,$end,$this->id);
		}
		$this->data['start'] = $start;
		$this->data['end'] = $end;
		$this->data['permission'] = $this->permission;
		$this->load->template('jobs/index',$this->data);
	}

	public function view($id)
	{
		if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'Job Detail';
		$this->data['plane'] = $this->jobs_model->get_plane($id);
		$this->data['flows'] = $this->jobs_model->get_qc_flow($id);
		$this->data['requisition'] = $this->jobs_model->get_requisition($id);
		$this->data['work_orders'] = $this->jobs_model->get_row_single('work_orders',array('id'=>$id));
		$this->data['clients'] = $this->jobs_model->all_rows('clients');
		$this->data['item'] = $this->jobs_model->get_rows('item',array('Client'=>$this->data['work_orders']['Client']));
		$this->data['production_plan'] = $this->jobs_model->get_row_single('production_plan',array('WO_no'=>$id));
		$this->data['order'] = $this->jobs_model->get_order($id);
		$this->data['plan_flows'] = $this->jobs_model->get_order_flows($id);
		$this->load->template('jobs/view',$this->data);
	}

}