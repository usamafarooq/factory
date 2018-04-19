<?php
class Over_inventory extends MY_Controller{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('over_inventory_model');
        $this->module = 'over_inventory';
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
		$this->data['title'] = 'Left Over Inventory';
		if ( $this->permission['view_all'] == '1'){
			$this->data['flows'] = $this->over_inventory_model->all_rows('flows');
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['flows'] = $this->over_inventory_model->get_rows('flows',array('user_id'=>$this->id));
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('over_inventory/index',$this->data);
	}

	public function stock()
	{
		$this->data['title'] = 'Left Over Inventory';
		$flow = $this->input->post('flow');
		$this->data['detail'] = $this->over_inventory_model->get_stock($flow);
		$this->load->template('over_inventory/plane',$this->data);
	}

}