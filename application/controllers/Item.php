<?php
class Item extends MY_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
        $this->module = 'item';
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
		$this->data['title'] = 'Item';
		if ($this->permission['view_all'] == '1'){
			$this->data['item'] = $this->Item_model->get_item();
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['item'] = $this->Item_model->get_item($this->id);
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('item/index',$this->data);
	}

	public function create()
	{
		if ($this->permission['created'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'Create Item';
		$this->data['table_clients'] = $this->Item_model->all_rows('clients');
		$this->data['features'] = $this->Item_model->all_rows('feature');
		$this->load->template('item/create',$this->data);
	}

	public function insert()
	{
		if ($this->permission['created'] == '0') 
		{
			redirect('home');
		}
		$data = $this->input->post();
		$data['features'] = implode(',', $data['features']);
		$data['colors'] = implode(',', $data['colors']);
		$data['user_id'] = $this->session->userdata('user_id');
		$id = $this->Item_model->insert('item',$data);
		if ($id) {
			redirect('item');
		}
	}

	public function edit($id)
	{
		if ($this->permission['edit'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'Edit Item';
		$this->data['item'] = $this->Item_model->get_row_single('item',array('id'=>$id));
		$this->data['table_clients'] = $this->Item_model->all_rows('clients');
		$this->data['features'] = $this->Item_model->all_rows('feature');
		$this->load->template('item/edit',$this->data);
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
		$data['features'] = implode(',', $data['features']);
		$id = $this->Item_model->update('item',$data,array('id'=>$id));
		if ($id) {
			redirect('item');
		}
	}

	public function delete($id)
	{
		if ($this->permission['deleted'] == '0') 
		{
			redirect('home');
		}
		$this->Item_model->delete('item',array('id'=>$id));
		redirect('item');
	}

	public function create_bomb($id)
	{
		if ($this->permission['created'] == '0') 
		{
			redirect('home');
		}
		if ($this->input->post()) {
			$data = $this->input->post();
			for ($i=0; $i < sizeof($data['product']); $i++) { 
				$item[] = array(
					'product_id'=>$data['product'][$i],
					//'qty'=>$data['qty'][$i],
					'item_id'=>$id,
					'user_id' => $this->session->userdata('user_id'),
				);
			}
			$this->Item_model->insert_batch('bom',$item);
			redirect('item');
		}
		$this->data['title'] = 'Create Bom';
		//$this->data['products'] = $this->Item_model->all_rows('product');
		$this->data['table_category'] = $this->Item_model->all_rows('category');
		$this->load->template('item/create_bomb',$this->data);
	}

	public function view_bomb($id)
	{
		if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'View Bom';
		//$this->data['table_category'] = $this->Item_model->all_rows('category');
		$this->data['bom'] = $this->Item_model->get_bom($id);
		//echo '<pre>';print_r($this->data['bom']);die;
		$this->load->template('item/view_bomb',$this->data);
	}
}