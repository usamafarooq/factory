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
	    }public function index()
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
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Production_plan';$this->data['table_work_orders'] = $this->Production_plan_model->all_rows('work_orders');$this->load->template('production_plan/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Production_plan_model->insert('production_plan',$data);
			if ($id) {
				redirect('production_plan');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Production_plan';
			$this->data['production_plan'] = $this->Production_plan_model->get_row_single('production_plan',array('id'=>$id));$this->data['table_work_orders'] = $this->Production_plan_model->all_rows('work_orders');$this->load->template('production_plan/edit',$this->data);
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
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Production_plan_model->delete('production_plan',array('id'=>$id));
			redirect('production_plan');
		}}