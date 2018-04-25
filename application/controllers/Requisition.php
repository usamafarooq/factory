<?php
class Requisition extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('requisition_model');
        $this->module     = 'requisition';
        $this->user_type  = $this->session->userdata('user_type');
        $this->id         = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module, $this->user_type);
    }

    public function index()
    {
    	if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') {
            redirect('home');
        }
        $this->data['title'] = 'Requisition';
        if ( $this->permission['view_all'] == '1'){
			$this->data['requisition'] = $this->requisition_model->get_requisition();
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['requisition'] = $this->requisition_model->get_requisition($this->id);
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('requisition/index',$this->data);
    }

    public function insert()
    {
    	$data            = $this->input->post();
        $product_id = $data['product_id'];
        $quantity = $data['quantity'];
        unset($data['quantity']);
        unset($data['product_id']);
        $data['user_id'] = $this->session->userdata('user_id');
        $id              = $this->requisition_model->insert('requisition', $data);
        if ($id) {
        	for ($i=0; $i < sizeof($product_id); $i++) { 
                $r = 0;
        		$product[] = array(
        			'product_id'=>$product_id[$i],
        			'quantity'=>$quantity[$i],
        			'requisition_id'=>$id,
                    'received_quantity'=>$r,
        		);
        	}
        	$this->requisition_model->insert_batch('requisition_product',$product);
            echo 1;
        }
        else{
        	echo 2;
        }
    }

    public function order($id,$type)
    {
        $this->data['title'] = 'Create Order';
        $this->data['id'] = $id;
        $this->data['type'] = $type;
        $this->data['url'] = $_GET['redirect'];
        $this->data['table_category'] = $this->requisition_model->all_rows('category');
        $this->data['table_store'] = $this->requisition_model->all_rows('sub_store');
        $this->load->template('requisition/order',$this->data);
    }

    public function change_status($id,$status)
    {
    	$id = $this->requisition_model->update('requisition', array('status'=>$status), array(
            'id' => $id
        ));
        if ($id) {
            redirect('requisition');
        }
    }

    public function get_order($id)
    {
        $data = $this->requisition_model->get_order_product($id);
        //print_r($this->db->last_query());
        echo json_encode($data);
    }

    public function received_order()
    {
        $id = $this->input->post('id');
        $detail_id = $this->input->post('detail_id');
        $product_id = $this->input->post('product_id');
        $received_quantity = $this->input->post('received_quantity');
        $remarks = $this->input->post('remarks');
        $this->requisition_model->update('requisition', array('status'=>'Complete'), array('id' => $id));
        for ($i=0; $i < sizeof($detail_id); $i++) { 
            $this->requisition_model->update('requisition_product', array('received_quantity'=>$received_quantity[$i],'product_id'=>$product_id[$i],'remarks'=>$remarks[$i]), array('id' => $detail_id[$i]));
        }
        redirect('requisition');
    }

    public function view_order($id,$type)
    {
        $this->data['title'] = 'View Order';
        $type = str_replace('_', ' ', $type);
        $this->data['orders'] = $this->requisition_model->get_all_orders($id,$type);
        $this->load->template('requisition/view_order',$this->data);
    }

    public function pending_quantity($id,$type)
    {
        $this->data['title'] = 'Pending Quantity';
        $type = str_replace('_', ' ', $type);
        $this->data['url'] = $_GET['redirect'];
        $this->data['orders'] = $this->requisition_model->get_all_orders($id,$type);
        $this->load->template('requisition/pending_quantity',$this->data);
    }

    public function submit_pending()
    {
        $data = $this->input->post();
        $redirect = $data['redirect'];
        $id = $data['id'];
        $pending = $data['pending'];
        for ($i=0; $i < sizeof($id); $i++) { 
            $this->requisition_model->update('requisition_product',array('pending_quantity'=>$pending[$i]),array('id'=>$id[$i]));
        }
        redirect($redirect);    
    }
}