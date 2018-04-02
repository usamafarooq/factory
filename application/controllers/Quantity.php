<?php
		    class Quantity extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Quantity_model');
	        $this->module = 'quantity';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Quantity';
			if ( $this->permission['view_all'] == '1'){$this->data['quantity'] = $this->Quantity_model->get_quantity();}
			elseif ($this->permission['view'] == '1') {$this->data['quantity'] = $this->Quantity_model->get_quantity($this->id);}
			$this->data['permission'] = $this->permission;
			$this->load->template('quantity/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Quantity';$this->data['table_product'] = $this->Quantity_model->all_rows('product');$this->load->template('quantity/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Quantity_model->insert('quantity',$data);
			if ($id) {
				redirect('quantity');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Quantity';
			$this->data['quantity'] = $this->Quantity_model->get_row_single('quantity',array('id'=>$id));$this->data['table_product'] = $this->Quantity_model->all_rows('product');$this->load->template('quantity/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Quantity_model->update('quantity',$data,array('id'=>$id));
			if ($id) {
				redirect('quantity');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Quantity_model->delete('quantity',array('id'=>$id));
			redirect('quantity');
		}}