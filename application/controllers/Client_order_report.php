<?php
class Client_order_report extends MY_Controller{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('client_order_report_model');
        $this->module = 'client_order_report';
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
		$this->data['title'] = 'Order Report';
		$start = date('Y-m-d 00:00:01', strtotime('-30 days'));
		$end = date('Y-m-d 23:59:59');
		if ($this->input->post()) {
			$start = date('Y-m-d 00:00:01', strtotime($this->input->post('start')));
			$end = date('Y-m-d 23:59:59', strtotime($this->input->post('end')));
		}
		if ( $this->permission['view_all'] == '1'){
			$this->data['orders'] = $this->client_order_report_model->get_report($start,$end);
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['orders'] = $this->client_order_report_model->get_report($start,$end,$this->id);
		}
		$this->data['start'] = $start;
		$this->data['end'] = $end;
		//echo '<pre>';print_r($this->data['orders']);die;
		$this->data['permission'] = $this->permission;
		$this->load->template('client_order_report/index',$this->data);
	}

	public function view_orders($id)
	{
		if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'Order Report';
		$this->data['order'] = $this->client_order_report_model->get_client_report($id);
		//echo '<pre>';print_r($this->data['order']);die;
		$this->data['permission'] = $this->permission;
		$this->load->template('client_order_report/view_orders',$this->data);
	}
}