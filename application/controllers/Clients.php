<?php
		    class Clients extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Clients_model');
	        $this->module = 'clients';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Clients';
			if ( $this->permission['view_all'] == '1'){$this->data['clients'] = $this->Clients_model->all_rows('clients');}
			elseif ($this->permission['view'] == '1') {$this->data['clients'] = $this->Clients_model->get_rows('clients',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('clients/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Clients';$this->load->template('clients/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Clients_model->insert('clients',$data);
			if ($id) {
				redirect('clients');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Clients';
			$this->data['clients'] = $this->Clients_model->get_row_single('clients',array('id'=>$id));$this->load->template('clients/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Clients_model->update('clients',$data,array('id'=>$id));
			if ($id) {
				redirect('clients');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Clients_model->delete('clients',array('id'=>$id));
			redirect('clients');
		}}