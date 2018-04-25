<?php
class Store_stock extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('store_stock_model');
        $this->module     = 'store_stock';
        $this->user_type  = $this->session->userdata('user_type');
        $this->id         = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module, $this->user_type);
    }

    public function index()
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') {
            redirect('home');
        }
        $this->data['title'] = 'Store';
        $this->data['stores'] = $this->store_stock_model->all_rows('sub_store');
        $this->data['permission'] = $this->permission;
        $this->load->template('store_stock/index', $this->data);
    }

    public function view()
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') {
            redirect('home');
        }
        $id = $this->input->post('store');
        $this->data['title'] = 'Store Stock';
        $this->data['stock'] = $this->store_stock_model->get_stock($id);
        //echo '<pre>';print_r($this->data['store_stock']);die;
        $this->data['permission'] = $this->permission;
        $this->load->template('store_stock/view', $this->data);
    }

    public function get_product_stock()
    {
        $data = $this->input->post();
        $store_id = $data['store_id'];
        $product_id = $data['product_id'];
        $stock = $this->store_stock_model->get_stock_by_product($store_id,$product_id);
        //print_r($this->db->last_query());
        //print_r($stock);
        echo json_encode($stock);
    }
}