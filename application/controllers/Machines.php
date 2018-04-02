<?php
		    class Machines extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Machines_model');
	        $this->module = 'machines';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Machines';
			if ( $this->permission['view_all'] == '1'){$this->data['machines'] = $this->Machines_model->get_machines();}
			elseif ($this->permission['view'] == '1') {$this->data['machines'] = $this->Machines_model->get_machines($this->id);}
			//print_r($this->db->last_query());die;
			$this->data['permission'] = $this->permission;
			$this->load->template('machines/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Machines';
			$this->data['table_feature'] = $this->Machines_model->all_rows('feature');
			$this->data['table_flow'] = $this->Machines_model->all_rows('flows');
			$this->load->template('machines/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['feature'] = implode(',', $data['feature']);
			$data['flows'] = implode(',', $data['flows']);
			//print_r($data);die;
			$data['user_id'] = $this->session->userdata('user_id');
			$id = $this->Machines_model->insert('machines',$data);
			if ($id) {
				redirect('machines');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Machines';
			$this->data['machines'] = $this->Machines_model->get_row_single('machines',array('id'=>$id));
			$this->data['table_feature'] = $this->Machines_model->all_rows('feature');
			$this->data['table_flow'] = $this->Machines_model->all_rows('flows');
			$this->load->template('machines/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);
			$data['feature'] = implode(',', $data['feature']);
			$data['flows'] = implode(',', $data['flows']);
			$id = $this->Machines_model->update('machines',$data,array('id'=>$id));
			if ($id) {
				redirect('machines');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Machines_model->delete('machines',array('id'=>$id));
			redirect('machines');
		}}