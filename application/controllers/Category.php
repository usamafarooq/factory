<?php
class Category extends MY_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->module = 'category';
        $this->user_type = $this->session->userdata('user_type');
        $this->id = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module,$this->user_type);
    }

    public function index()
	{
		if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'Category';
		if ( $this->permission['view_all'] == '1'){
			$this->data['category'] = $this->Category_model->all_rows('category');
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['category'] = $this->Category_model->get_rows('category',array('user_id'=>$this->id));
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('category/index',$this->data);
	}

	public function create()
	{
		if ($this->permission['created'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'Create Category';
		$this->load->template('category/create',$this->data);
	}

	public function insert()
	{
		if ($this->permission['created'] == '0') 
		{
			redirect('home');
		}
		$data = $this->input->post();
		$data['user_id'] = $this->session->userdata('user_id');
		$id = $this->Category_model->insert('category',$data);
		if ($id) {
			redirect('category');
		}
	}

	public function edit($id)
	{
		if ($this->permission['edit'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'Edit Category';
		$this->data['category'] = $this->Category_model->get_row_single('category',array('id'=>$id));
		$this->load->template('category/edit',$this->data);
	}

	public function update()
	{
		if ($this->permission['edit'] == '0') 
		{
			redirect('home');
		}
		$data = $this->input->post();
		$id = $data['id'];
		unset($data['id']);
		$id = $this->Category_model->update('category',$data,array('id'=>$id));
		if ($id) {
			redirect('category');
		}
	}

	public function delete($id)
	{
		if ( $this->permission['deleted'] == '0') 
		{
			redirect('home');
		}
		$this->Category_model->delete('category',array('id'=>$id));
		redirect('category');
	}
}