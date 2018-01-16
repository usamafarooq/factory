<?php
		    class All_orders extends MY_Controller
		    {
		    		public function __construct()
		    	    {
		    	        parent::__construct();
		    	        $this->load->model('all_orders_model');
		    	        $this->module = 'orders';
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



		    			$this->data['title'] = 'All Orders';

		    			if ( $this->permission['view_all'] == '1'){


		    				$this->data['all_orders'] = $this->all_orders_model->all_rows('orders');


		    			}

		    			elseif ($this->permission['view'] == '1') {$this->data['all_orders'] = $this->Orders_modelget_rows('all_orders',array('user_id'=>$this->id));}
		    			$this->data['permission'] = $this->permission;
		    			$this->load->template('all_orders/index',$this->data);


		    		}
		    		public function cutting_machine($id)
		    		

		    				{

		    					if ( $this->permission['created'] == '0') 
		    					{
		    						redirect('home');
		    					}
		    					
		    					$this->data['orders'] = $this->all_orders_model->get_row_single('orders',array('id'=>$id));



		    					$this->data['title'] = 'Cutting Machine';$this->load->template('all_orders/cutting_machine',$this->data);



		    					

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

		    					$id = $this->all_orders_model->insert('cutting_machine',$data);
		    					if ($id) {
		    						redirect('orders');
		    					}
		    				}








		    }
		   
