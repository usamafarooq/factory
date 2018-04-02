<?php
		    class Quantity_adjustments extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Quantity_adjustments_model');
	        $this->module = 'quantity_adjustments';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Quantity_adjustments';
			if ( $this->permission['view_all'] == '1'){$this->data['quantity_adjustments'] = $this->Quantity_adjustments_model->get_quantity_adjustments();}
			elseif ($this->permission['view'] == '1') {$this->data['quantity_adjustments'] = $this->Quantity_adjustments_model->get_quantity_adjustments($this->id);}
			$this->data['permission'] = $this->permission;
			$this->load->template('quantity_adjustments/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Quantity_adjustments';$this->data['table_category'] = $this->Quantity_adjustments_model->all_rows('category');$this->load->template('quantity_adjustments/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Quantity_adjustments_model->insert('quantity_adjustments',$data);
			if ($id) {
				redirect('quantity_adjustments');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Quantity_adjustments';
			$this->data['quantity_adjustments'] = $this->Quantity_adjustments_model->get_row_single('quantity_adjustments',array('id'=>$id));$this->data['table_product'] = $this->Quantity_adjustments_model->all_rows('product');$this->load->template('quantity_adjustments/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Quantity_adjustments_model->update('quantity_adjustments',$data,array('id'=>$id));
			if ($id) {
				redirect('quantity_adjustments');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Quantity_adjustments_model->delete('quantity_adjustments',array('id'=>$id));
			redirect('quantity_adjustments');
		}}