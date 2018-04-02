<?php
		    class Sub_category extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Sub_category_model');
	        $this->module = 'sub_category';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Sub_category';
			if ( $this->permission['view_all'] == '1'){$this->data['sub_category'] = $this->Sub_category_model->get_sub_category();}
			elseif ($this->permission['view'] == '1') {$this->data['sub_category'] = $this->Sub_category_model->get_sub_category($this->id);}
			$this->data['permission'] = $this->permission;
			$this->load->template('sub_category/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Sub_category';$this->data['table_category'] = $this->Sub_category_model->all_rows('category');$this->load->template('sub_category/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Sub_category_model->insert('sub_category',$data);
			if ($id) {
				redirect('sub_category');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Sub_category';
			$this->data['sub_category'] = $this->Sub_category_model->get_row_single('sub_category',array('id'=>$id));$this->data['table_category'] = $this->Sub_category_model->all_rows('category');$this->load->template('sub_category/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Sub_category_model->update('sub_category',$data,array('id'=>$id));
			if ($id) {
				redirect('sub_category');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Sub_category_model->delete('sub_category',array('id'=>$id));
			redirect('sub_category');
		}}