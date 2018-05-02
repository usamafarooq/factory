<?php
class Production_plan extends MY_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Production_plan_model');
        $this->module = 'production_plan';
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
		$this->data['title'] = 'Production_plan';
		if ( $this->permission['view_all'] == '1'){$this->data['production_plan'] = $this->Production_plan_model->get_production_plan();}
		elseif ($this->permission['view'] == '1') {$this->data['production_plan'] = $this->Production_plan_model->get_production_plan($this->id);}
		$this->data['permission'] = $this->permission;
		$this->load->template('production_plan/index',$this->data);
	}

	public function create($id)
	{
		if ( $this->permission['created'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'Create Production_plan';
		//$this->data['table_work_orders'] = $this->Production_plan_model->all_rows('work_orders');
		$this->data['order'] = $this->Production_plan_model->get_order($id);
		$this->data['machines'] = $this->Production_plan_model->all_rows('machines');
		$this->data['sheet'] = $this->Production_plan_model->get_sheets($id);
		//echo '<pre>';print_r($this->data);die;
		$this->load->template('production_plan/create',$this->data);
	}

	public function insert()
	{
		if ( $this->permission['created'] == '0') 
		{
			redirect('home');
		}
		$data = $this->input->post();
		$data['user_id'] = $this->session->userdata('user_id');
		$id = $this->Production_plan_model->insert('production_plan',$data);
		if ($id) {
			redirect('production_plan/flow/'.$id);
		}
	}

	public function edit($id)
	{
		if ($this->permission['edit'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'Edit Production_plan';
		$this->data['production_plan'] = $this->Production_plan_model->get_row_single('production_plan',array('WO_no'=>$id));
		$this->data['order'] = $this->Production_plan_model->get_order($id);
		//$this->data['table_work_orders'] = $this->Production_plan_model->all_rows('work_orders');
		$this->load->template('production_plan/edit',$this->data);
	}

	public function update()
	{
		if ( $this->permission['edit'] == '0') 
		{
			redirect('home');
		}
		$data = $this->input->post();
		$id = $data['id'];
		unset($data['id']);$id = $this->Production_plan_model->update('production_plan',$data,array('id'=>$id));
		if ($id) {
			redirect('production_plan');
		}
	}

	public function delete($id)
	{
		if ( $this->permission['deleted'] == '0') 
		{
			redirect('home');
		}
		$this->Production_plan_model->delete('production_plan',array('id'=>$id));
		redirect('production_plan');
	}

	public function flow($id)
	{
		if ( $this->permission['created'] == '0') 
		{
			redirect('home');
		}
		if ($this->input->post()) {
			$data = $this->input->post();

			$type = $data['type'];
			$machine = $data['machine'];
			$priority = $data['priority'];
			$parent = $data['parent'];
			$start_date = $data['start_date'];
			$end_date = $data['end_date'];
			unset($data['type']);
			unset($data['machine']);
			unset($data['priority']);
			unset($data['parent']);
			unset($data['start_date']);
			unset($data['end_date']);
			for ($i=0; $i < sizeof($type); $i++) { 
				$data = array(
					'type'=>$type[$i],
					'machine'=>$machine[$i],
					'priority'=>$priority[$i],
					'parent_id'=>$parent[$i],
					'start_date'=>date('Y-m-d H:i:s', strtotime($start_date[$i])),
					'end_date'=>date('Y-m-d H:i:s', strtotime($end_date[$i])),
					'plane_id'=>$id
				);
				//print_r($data);die;
				$this->Production_plan_model->insert('production_flow',$data);
			}
			redirect('production_plan');
		}
		$this->data['title'] = 'Create Production Plan Flow';
		//$this->data['machines'] = $this->Production_plan_model->all_rows('machines');
		$this->data['flows'] = $this->Production_plan_model->all_rows('flows');
		$production_plan = $this->Production_plan_model->get_row_single('production_plan',array('id'=>$id));
		$p_id = $production_plan['WO_no'];
		$this->data['production_plan'] = $this->Production_plan_model->get_row_single('production_plan',array('WO_no'=>$p_id));
		$this->data['order'] = $this->Production_plan_model->get_order($p_id);
		$this->data['table_category'] = $this->Production_plan_model->all_rows('category');
		$this->data['table_store'] = $this->Production_plan_model->all_rows('sub_store');
		$this->load->template('production_plan/flow',$this->data);
	}

	public function edit_flow($id)
	{
		if ( $this->permission['created'] == '0') 
		{
			redirect('home');
		}
		if ($this->input->post()) {
			$data = $this->input->post();
			$type = $data['type'];
			$machine = $data['machine'];
			$priority = $data['priority'];
			$parent = $data['parent'];
			$start_date = $data['start_date'];
			$end_date = $data['end_date'];
			$ids = $data['ids'];
			unset($data['type']);
			unset($data['machine']);
			unset($data['priority']);
			unset($data['parent']);
			unset($data['start_date']);
			unset($data['end_date']);
			unset($data['ids']);
			for ($i=0; $i < sizeof($type); $i++) { 
				$data = array(
					'type'=>$type[$i],
					'machine'=>$machine[$i],
					'priority'=>$priority[$i],
					'parent_id'=>$parent[$i],
					'start_date'=>date('Y-m-d H:i:s', strtotime($start_date[$i])),
					'end_date'=>date('Y-m-d H:i:s', strtotime($end_date[$i])),
					'plane_id'=>$id
				);
				//$this->Production_plan_model->insert('production_flow',$data);
				$this->Production_plan_model->update('production_flow',$data,array('id'=>$ids[$i]));
			}
			redirect('production_plan');
		}
		$this->data['title'] = 'Edit Production Plan Flow';
		//$this->data['machines'] = $this->Production_plan_model->all_rows('machines');
		$this->data['flows'] = $this->Production_plan_model->all_rows('flows');
		$production_plan = $this->Production_plan_model->get_row_single('production_plan',array('id'=>$id));
		$p_id = $production_plan['WO_no'];
		$this->data['production_plan'] = $this->Production_plan_model->get_row_single('production_plan',array('WO_no'=>$p_id));
		$this->data['production_flow'] = $this->Production_plan_model->get_rows('production_flow',array('plane_id'=>$id));
		//print_r($this->db->last_query());
		//print_r($this->data['production_flow']);die;
		$this->data['order'] = $this->Production_plan_model->get_order($p_id);
		$this->data['table_category'] = $this->Production_plan_model->all_rows('category');
		$this->data['table_store'] = $this->Production_plan_model->all_rows('sub_store');
		$this->load->template('production_plan/edit_flow',$this->data);
	}


	public function inventory($id)
	{
		if ( $this->permission['created'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'Create Production Plan Flow';
		//$this->data['machines'] = $this->Production_plan_model->all_rows('machines');
		$this->data['flows'] = $this->Production_plan_model->all_rows('flows');
		$production_plan = $this->Production_plan_model->get_row_single('production_plan',array('id'=>$id));
		//$p_id = $production_plan['WO_no'];
		$p_id = $id;
		$this->data['production_plan'] = $this->Production_plan_model->get_row_single('production_plan',array('WO_no'=>$p_id));
		$this->data['order'] = $this->Production_plan_model->get_order($p_id);
		$this->data['table_category'] = $this->Production_plan_model->all_rows('category');
		$this->data['table_store'] = $this->Production_plan_model->all_rows('sub_store');
		$this->data['products'] = $this->Production_plan_model->get_products($id);
		//echo '<pre>';print_r($this->data['products']);die;
		$this->load->template('production_plan/inventory',$this->data);
	}

	public function plan_flow($id)
	{
		$this->data['title'] = 'Production Plan Flow';
		$this->data['flows'] = $this->Production_plan_model->get_flows($id);
		//print_r($this->data);die;
		$this->load->template('production_plan/plan_flow',$this->data);
	}

	public function get_machines($flow_id)
	{
		$machines = $this->Production_plan_model->get_machines($flow_id);
		echo json_encode($machines);
	}

	public function get_machine_detail($id)
	{
		$detail = $this->Production_plan_model->get_detail($id);
		echo json_encode($detail);
	}

	public function view_plan($id)
	{
		$this->data['title'] = 'Production Plan';
		$this->data['production_plan'] = $this->Production_plan_model->get_row_single('production_plan',array('WO_no'=>$id));
		$this->data['order'] = $this->Production_plan_model->get_order($id);
		$this->data['plan_flows'] = $this->Production_plan_model->get_order_flows($id);
		//echo '<pre>';print_r($this->data['plan_flows']);die;
		$this->load->template('production_plan/view_plan',$this->data);
	}
	
}