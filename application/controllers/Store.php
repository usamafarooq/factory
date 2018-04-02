<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('store_model');
        $this->module = 'store';
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
        $this->data['title'] = 'Work Orders';
        if ( $this->permission['view_all'] == '1'){
            $this->data['orders'] = $this->store_model->get_flow('store',null);
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->store_model->get_flow('store',null,$this->id);
        }
        //print_r($this->db->last_query());
        //echo '<pre>';print_r($this->data);die;
        $this->data['permission'] = $this->permission;
        $this->load->template('store/index',$this->data);
    }

}