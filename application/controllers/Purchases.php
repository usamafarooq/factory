<?php
class Purchases extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Purchases_model');
        $this->module     = 'purchases';
        $this->user_type  = $this->session->userdata('user_type');
        $this->id         = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module, $this->user_type);
    }
    public function index()
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') {
            redirect('home');
        }
        $this->data['title'] = 'Purchases';
        if ($this->permission['view_all'] == '1') {
            $this->data['purchases'] = $this->Purchases_model->get_purchases();
        } elseif ($this->permission['view'] == '1') {
            $this->data['purchases'] = $this->Purchases_model->get_purchases($this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('purchases/index', $this->data);
    }
    public function create()
    {
        if ($this->permission['created'] == '0') {
            redirect('home');
        }
        $this->data['title']        = 'Create Purchases';
        $this->data['table_vednor'] = $this->Purchases_model->all_rows('vednor');
        $this->data['table_category'] = $this->Purchases_model->all_rows('category');
        $this->load->template('purchases/create', $this->data);
    }
    public function insert()
    {
        if ($this->permission['created'] == '0') {
            redirect('home');
        }
        $data                    = $this->input->post();
        $product_id = $data['product_id'];
        $quantity = $data['quantity'];
        $price = $data['price'];
        unset($data['quantity']);
        unset($data['product_id']);
        unset($data['price']);
        //echo '<pre>';print_r($data);die;
        $data['user_id']         = $this->session->userdata('user_id');
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'doc|docs|pdf|xlx|xlsx';
        $config['max_size']      = 1000;
        $config['max_width']     = 1024;
        $config['max_height']    = 768;
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('Attach_Document')) {
            $data['Attach_Document'] = '/uploads/' . $this->upload->data('file_name');
        }
        $id = $this->Purchases_model->insert('purchases', $data);
        if ($id) {
        	for ($i=0; $i < sizeof($product_id); $i++) { 
                $r = 0;
                if ($data['Status'] == 'Received') {
                    $r = $quantity[$i];
                }
        		$product[] = array(
        			'product_id'=>$product_id[$i],
        			'quantity'=>$quantity[$i],
                    'price'=>$price[$i],
        			'purchase_id'=>$id,
                    'received_quantity'=>$r,
        		);
                $this->Purchases_model->update('product', array('Product_Cost'=>$price[$i]), array('id' => $product_id[$i]));
        	}
        	$this->Purchases_model->insert_batch('purchase_product',$product);
            redirect('purchases');
        }
    }
    public function edit($id)
    {
        if ($this->permission['edit'] == '0') {
            redirect('home');
        }
        $this->data['title']        = 'Edit Purchases';
        $this->data['purchases']    = $this->Purchases_model->get_row_single('purchases', array(
            'id' => $id
        ));
        $this->data['table_vednor'] = $this->Purchases_model->all_rows('vednor');
        $this->load->template('purchases/edit', $this->data);
    }
    
    public function update()
    {
        if ($this->permission['edit'] == '0') {
            redirect('home');
        }
        $data = $this->input->post();
        $id   = $data['id'];
        unset($data['id']);
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'doc|docs|pdf|xlx|xlsx';
        $config['max_size']      = 1000;
        $config['max_width']     = 1024;
        $config['max_height']    = 768;
        
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('Attach_Document')) {
            $data['Attach_Document'] = '/uploads/' . $this->upload->data('file_name');
        }
        $id = $this->Purchases_model->update('purchases', $data, array(
            'id' => $id
        ));
        if ($id) {
            redirect('purchases');
        }
    }
    public function delete($id)
    {
        if ($this->permission['deleted'] == '0') {
            redirect('home');
        }
        $this->Purchases_model->delete('purchases', array(
            'id' => $id
        ));
        redirect('purchases');
    }

    public function change_status($id,$status)
    {
    	$id = $this->Purchases_model->update('purchases', array('Status'=>$status), array(
            'id' => $id
        ));
        if ($id) {
            redirect('purchases');
        }
    }

    public function get_order($id)
    {
        $data = $this->Purchases_model->get_order_product($id);
        echo json_encode($data);
    }

    public function received_order()
    {
        $id = $this->input->post('id');
        $detail_id = $this->input->post('detail_id');
        $received_quantity = $this->input->post('received_quantity');
        $this->Purchases_model->update('purchases', array('Status'=>'Received'), array('id' => $id));
        for ($i=0; $i < sizeof($detail_id); $i++) { 
            $this->Purchases_model->update('purchase_product', array('received_quantity'=>$received_quantity[$i]), array('id' => $detail_id[$i]));
        }
        redirect('purchases');
    }

    public function get_sub_category($id)
    {
        $data = $this->Purchases_model->get_rows('sub_category', array('Parent_Category' => $id));
        echo json_encode($data);
    }

    public function get_product($id,$parent,$store_id=null)
    {
        if ($store_id != null) {
            $data = $this->Purchases_model->get_product_stock($id,$parent,$store_id);
        }
        else{
            $data = $this->Purchases_model->get_rows('product', array('Category' => $parent,'Sub_Category' => $id));
        }
        echo json_encode($data);
    }
}