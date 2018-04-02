<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sorting extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('sorting_model');
        $this->module = 'sorting';
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
            $this->data['orders'] = $this->sorting_model->get_flow('Sorting',null);
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->sorting_model->get_flow('Sorting',null,$this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('sorting/index',$this->data);
    }

}