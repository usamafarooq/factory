<?php
		    class Vendor extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Vendor_model');
	        $this->module = 'vednor';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Vendor';
			if ( $this->permission['view_all'] == '1'){$this->data['vendor'] = $this->Vendor_model->all_rows('vednor');}
			elseif ($this->permission['view'] == '1') {$this->data['vendor'] = $this->Vendor_model->get_rows('vednor',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('vendor/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Vendor';$this->load->template('vendor/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Vendor_model->insert('vednor',$data);
			if ($id) {
				redirect('vendor');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Vendor';
			$this->data['vendor'] = $this->Vendor_model->get_row_single('vednor',array('id'=>$id));$this->load->template('vendor/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Vendor_model->update('vednor',$data,array('id'=>$id));
			if ($id) {
				redirect('vendor');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Vendor_model->delete('vednor',array('id'=>$id));
			redirect('vendor');
		}}