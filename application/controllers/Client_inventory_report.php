<?php
class Client_inventory_report extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('client_inventory_report_model');
		$this->module = 'client_inventory_report';
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
		$this->data['title'] = 'All Clients';
		if ( $this->permission['view_all'] == '1'){
			$this->data['clients'] = $this->client_inventory_report_model->all_rows('clients');
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['clients'] = $this->client_inventory_report_model->get_rows('clients',array('user_id'=>$this->id));
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('client_inventory_report/index',$this->data);
	}

	public function view($id)
	{
		if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'Client Detail';
		$this->data['requisition'] = $this->client_inventory_report_model->get_requisition($id);
		$this->load->template('client_inventory_report/view',$this->data);
	}

}