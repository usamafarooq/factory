<?php
		    class Work_orders extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Work_orders_model');
	        $this->module = 'work_orders';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }
	    public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Work_orders';
			if ( $this->permission['view_all'] == '1'){
				$this->data['work_orders'] = $this->Work_orders_model->get_item();
			}
			elseif ($this->permission['view'] == '1') {
				$this->data['work_orders'] = $this->Work_orders_model->get_item($this->id);
			}
			$this->data['permission'] = $this->permission;
			$this->load->template('work_orders/index',$this->data);
		}
		public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['clients'] = $this->Work_orders_model->all_rows('clients');
			$this->data['title'] = 'Create Work_orders';$this->load->template('work_orders/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}


			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');
			$id = $this->Work_orders_model->insert('work_orders',$data);
			
			if ($id) {
				redirect('work_orders');
			}
		}

		public function view_plane($id)
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Work Order Plane';
			$this->data['plane'] = $this->Work_orders_model->get_plane($id);
			//print_r($this->data['plane']);die;
			$this->load->template('work_orders/plane',$this->data);
		}
		public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Work_orders';
			$this->data['work_orders'] = $this->Work_orders_model->get_row_single('work_orders',array('id'=>$id));
			$this->data['clients'] = $this->Work_orders_model->all_rows('clients');
			$this->data['item'] = $this->Work_orders_model->get_rows('item',array('Client'=>$this->data['work_orders']['Client']));
			$this->load->template('work_orders/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);
			$id = $this->Work_orders_model->update('work_orders',$data,array('id'=>$id));
			if ($id) {
				redirect('work_orders');
			}
		}
		public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Work_orders_model->delete('work_orders',array('id'=>$id));
			redirect('work_orders');
		}

		public function get_item($id)
		{
			$item = $this->Work_orders_model->get_rows('item',array('Client'=>$id));
			echo json_encode($item);
		}
	}