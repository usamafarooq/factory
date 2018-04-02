<?php
		    class Orders extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Orders_model');
	        $this->module = 'orders';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('home');
			}
			$this->data['title'] = 'Orders';
			if ( $this->permission['view_all'] == '1'){$this->data['orders'] = $this->Orders_model->all_rows('orders');}
			elseif ($this->permission['view'] == '1') {$this->data['orders'] = $this->Orders_modelget_rows('orders',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('orders/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Create Orders';$this->load->template('orders/create',$this->data);
		}
		public function insert()
		{

			if ( $this->permission['created'] == '0') 
			{
				redirect('home');
			}
			//print_r($_FILES);die;
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');

			$config['upload_path'] = './uploads/orders';

			$config['allowed_types'] = 'pdf|doc|word|docs|txt|xlsx|xls|jpeg';

			$config['max_size'] = '10000';

			$config['max_width'] = '1024';

			$config['max_height'] = '768';
			if (!empty($_FILES['Attach_File']['name'])) {
			  $this->load->library('upload', $config);
			  if($this->upload->do_upload('Attach_File'))
			  {
			    $data += array('Attach_File' => '/uploads/orders/'.$this->upload->data('file_name') );
			  }
			  else
			  {
			    $error = array('error' => $this->upload->display_errors());
			  }
			}

			$id = $this->Orders_model->insert('orders',$data);
			if ($id) {
				redirect('orders');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('home');
			}
			$this->data['title'] = 'Edit Orders';
			$this->data['orders'] = $this->Orders_model->get_row_single('orders',array('id'=>$id));$this->load->template('orders/edit',$this->data);
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

			$config['upload_path'] = './uploads/orders';

			$config['allowed_types'] = 'pdf|doc|word|docs|txt|xlsx|xls|jpeg';

			$config['max_size'] = '10000';

			$config['max_width'] = '1024';

			$config['max_height'] = '768';
			if (!empty($_FILES['Attach_File']['name'])) {
			  $this->load->library('upload', $config);
			  if($this->upload->do_upload('Attach_File'))
			  {
			    $data += array('Attach_File' => '/uploads/orders/'.$this->upload->data('file_name') );
			  }
			  else
			  {
			    $error = array('error' => $this->upload->display_errors());
			  }
			}

			$id = $this->Orders_model->update('orders',$data,array('id'=>$id));
			if ($id) {
				redirect('orders');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('home');
			}
			$this->Orders_model->delete('orders',array('id'=>$id));
			redirect('orders');
		}}