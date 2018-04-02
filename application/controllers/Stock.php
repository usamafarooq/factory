<?php
class Stock extends MY_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('stock_model');
        $this->module     = 'stock';
        $this->user_type  = $this->session->userdata('user_type');
        $this->id         = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module, $this->user_type);
    }
    public function index()
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') {
            redirect('home');
        }
        $this->data['title'] = 'stock';
        $this->data['stock'] = $this->stock_model->get_stock();
        //echo '<pre>';print_r($this->data['stock']);die;
        $this->data['permission'] = $this->permission;
        $this->load->template('stock/index', $this->data);
    }
}