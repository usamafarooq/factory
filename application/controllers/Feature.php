<?php
		    class Feature extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Feature_model');
	        $this->module = 'feature';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Feature';
			if ( $this->permission['view_all'] == '1'){$this->data['feature'] = $this->Feature_model->all_rows('feature');}
			elseif ($this->permission['view'] == '1') {$this->data['feature'] = $this->Feature_modelget_rows('feature',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('feature/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Feature';$this->load->template('feature/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Feature_model->insert('feature',$data);
			if ($id) {
				redirect('feature');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Feature';
			$this->data['feature'] = $this->Feature_model->get_row_single('feature',array('id'=>$id));$this->load->template('feature/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Feature_model->update('feature',$data,array('id'=>$id));
			if ($id) {
				redirect('feature');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Feature_model->delete('feature',array('id'=>$id));
			redirect('feature');
		}}