<?php
		    class Flows extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Flows_model');
	        $this->module = 'flows';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Flows';
			if ( $this->permission['view_all'] == '1'){$this->data['flows'] = $this->Flows_model->all_rows('flows');}
			elseif ($this->permission['view'] == '1') {$this->data['flows'] = $this->Flows_model->get_rows('flows',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('flows/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Flows';$this->load->template('flows/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Flows_model->insert('flows',$data);
			if ($id) {
				redirect('flows');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Flows';
			$this->data['flows'] = $this->Flows_model->get_row_single('flows',array('id'=>$id));$this->load->template('flows/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Flows_model->update('flows',$data,array('id'=>$id));
			if ($id) {
				redirect('flows');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Flows_model->delete('flows',array('id'=>$id));
			redirect('flows');
		}}