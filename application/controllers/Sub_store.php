<?php
		    class Sub_store extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Sub_store_model');
	        $this->module = 'sub_store';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Sub_store';
			if ( $this->permission['view_all'] == '1'){$this->data['sub_store'] = $this->Sub_store_model->all_rows('sub_store');}
			elseif ($this->permission['view'] == '1') {$this->data['sub_store'] = $this->Sub_store_model->get_rows('sub_store',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('sub_store/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Sub_store';$this->load->template('sub_store/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Sub_store_model->insert('sub_store',$data);
			if ($id) {
				redirect('sub_store');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Sub_store';
			$this->data['sub_store'] = $this->Sub_store_model->get_row_single('sub_store',array('id'=>$id));$this->load->template('sub_store/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Sub_store_model->update('sub_store',$data,array('id'=>$id));
			if ($id) {
				redirect('sub_store');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Sub_store_model->delete('sub_store',array('id'=>$id));
			redirect('sub_store');
		}}