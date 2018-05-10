<?php
class All_orders extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('all_orders_model');
		$this->load->model('machine_flow_model');
		$this->module = 'all_orders';
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
		if ( $this->permission['view_all'] == '1'){
			$this->data['work_orders'] = $this->all_orders_model->get_item();
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['work_orders'] = $this->all_orders_model->get_item($this->id);
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('all_orders/index',$this->data);
	}
	public function view_plane($id)
	{
		if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'View Orders Progress';
		// work order
		$this->data['work_orders'] = $this->all_orders_model->get_row_single('work_orders',array('id'=>$id));
		$this->data['clients'] = $this->all_orders_model->all_rows('clients');
		$this->data['item'] = $this->all_orders_model->get_rows('item',array('Client'=>$this->data['work_orders']['Client']));
		// production plane
		$this->data['production_plan'] = $this->all_orders_model->get_row_single('production_plan',array('WO_no'=>$id));
		$this->data['order'] = $this->all_orders_model->get_order($id);
		$this->data['plan_flows'] = $this->all_orders_model->get_order_flows($id);
		$plane_id = $this->data['production_plan']['id'];
		// cutting
		$flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'4'));
		if ($flow_data) {
			$flow = $flow_data['id'];
			$this->data['cutting_data'] = $this->all_orders_model->get_row_single('cutting',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['cutting_job'] = $this->machine_flow_model->get_job($plane_id,$flow);
		}
		// die cutting
		$flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'13'));
		if ($flow_data) {
			$flow = $flow_data['id'];
			$this->data['die_cutting'] = $this->all_orders_model->get_row_single('die_cutting',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['die_cutting_complete'] = $this->all_orders_model->get_row_single('die_cutting_complete',array('die_cutting_id'=>$this->data['die_cutting']['id']));
	        $this->data['die_cutting_hourse'] = $this->all_orders_model->get_rows('die_cutting_hourse',array('die_cutting_id'=>$this->data['die_cutting_complete']['id']));
	        $this->data['die_cutting_job'] = $this->machine_flow_model->get_job($plane_id,$flow);
	    }
	    // leaflet cutting 
	    $flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'11'));
		if ($flow_data) {
			$flow = $flow_data['id'];
		    $this->data['leaflet_cutting'] = $this->all_orders_model->get_row_single('leaflet_cutting',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['leaflet_cutting_job'] = $this->machine_flow_model->get_job($plane_id,$flow);
	    }
	    // pasting
	    $flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'15'));
		if ($flow_data) {
			$flow = $flow_data['id'];
		    $this->data['pasting'] = $this->all_orders_model->get_row_single('pasting',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['pasting_complete'] = $this->all_orders_model->get_row_single('pasting_complete',array('pasting_id'=>$this->data['pasting']['id']));
	        $this->data['pasting_hourse'] = $this->all_orders_model->get_rows('pasting_hourse',array('pasting_id'=>$this->data['pasting_complete']['id']));
	        $this->data['pasting_job'] = $this->machine_flow_model->get_job($plane_id,$flow);
	    }
	    // printing
	    $flow_data = $this->all_orders_model->get_row_single('production_flow',array('plane_id'=>$plane_id,'type'=>'7'));
		if ($flow_data) {
			$flow = $flow_data['id'];
			$this->data['printing'] = $this->all_orders_model->get_row_single('printing',array('plane_id'=>$plane_id,'flow_id'=>$flow));
	        $this->data['printing_complete'] = $this->all_orders_model->get_row_single('printing_complete',array('print_id'=>$this->data['printing']['id']));
	        $this->data['printing_hourse'] = $this->all_orders_model->get_rows('printing_hourse',array('printing_id'=>$this->data['printing_complete']['id']));
	        $this->data['printing_job'] = $this->machine_flow_model->get_job($plane_id,$flow);
		}
		$this->data['line_clearance'] = $this->all_orders_model->line_clearance($plane_id);
		$this->data['development'] = $this->all_orders_model->get_row_single('development_report',array('order_id'=>$id));
		$this->data['design'] = $this->all_orders_model->get_row_single('design_report',array('order_id'=>$id));
		$this->data['profing'] = $this->all_orders_model->get_row_single('printing_report',array('order_id'=>$id));
		$this->data['batch_release'] = $this->all_orders_model->get_batch_release($id);
		$this->data['wo_no'] = $id;
		$this->load->template('all_orders/view_plane',$this->data);
	}

	public function view_timeline($id)
	{
		if ($this->permission['edit'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'View Orders Timeline';
		$work_order = $this->all_orders_model->get_work_order($id);
		$production_plan = $this->all_orders_model->get_production_plan($id);
		if ($production_plan) {
			$this->data['production_plan'] = $this->all_orders_model->get_row_single('production_plan',array('WO_no'=>$id));
			$plane_id = $this->data['production_plan']['id'];
			$this->data['timeline'] = array_merge($production_plan,$work_order);
			$line_clearance = $this->all_orders_model->get_line_clearance($plane_id);
			$this->data['timeline'] = array_merge($line_clearance,$this->data['timeline']);
			$production_flow = $this->all_orders_model->get_production_flow($plane_id);
			$this->data['timeline'] = array_merge($production_flow,$this->data['timeline']);
		}
		else{
			$this->data['timeline'] = $work_order;
		}
		function compareOrder($a, $b)
	    {
	        return strtotime($a['start_date']) - strtotime($b['start_date']);
	    }
	    usort($this->data['timeline'], 'compareOrder');
	    $this->data['product'] = $this->all_orders_model->get_product($id);
	    $this->load->template('all_orders/view_timeline',$this->data);
		//echo '<pre>';print_r($this->data['timeline']);die;
	}

	public function batch_release($id,$flow_id)
	{
		if ($this->permission['edit'] == '0') 
		{
			redirect('home');
		}
		if ($this->input->post()) {
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');
			$data['wo_id'] = $id;
			$data['flow_id'] = $flow_id;
			$id = $this->all_orders_model->insert('batch_release',$data);
			if ($id) {
				echo '<script>window.open("","_self").close()</script>';
				//redirect('all_orders');
			}
			//print_r($data);die;
		}
		$this->data['title'] = 'Batch Release Form';
		$this->data['order'] = $this->all_orders_model->get_batch_detail($id,$flow_id);
		//echo '<pre>';print_r($this->data['order']);die;
		$this->load->template('all_orders/batch_release',$this->data);
	}
}
		   
