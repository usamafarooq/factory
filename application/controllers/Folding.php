<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Folding extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('folding_model');
        $this->module = 'folding';
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
            $this->data['orders'] = $this->folding_model->get_flow('Folding',null);
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->folding_model->get_flow('Folding',null,$this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('folding/index',$this->data);
    }

}