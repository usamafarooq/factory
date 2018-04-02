<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Die_cutting extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('die_cutting_model');
        $this->load->model('machine_flow_model');
        $this->module = 'die_cutting';
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
            $this->data['orders'] = $this->die_cutting_model->get_flow('Die Cutting','die_cutting');
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->die_cutting_model->get_flow('Die Cutting','die_cutting',$this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->data['table_category'] = $this->die_cutting_model->all_rows('category');
        $this->data['table_store'] = $this->die_cutting_model->all_rows('sub_store');
        $this->load->template('die_cutting/index',$this->data);
    }

    public function view_machine($id,$flow)
    {
        $this->data['title'] = 'Die Cutting Machine';
        $this->data['data'] = $this->die_cutting_model->get_row_single('die_cutting',array('plane_id'=>$id,'flow_id'=>$flow));
        $this->data['data_complete'] = $this->die_cutting_model->get_row_single('die_cutting_complete',array('die_cutting_id'=>$this->data['data']['id']));
        $this->data['data_hourse'] = $this->die_cutting_model->get_rows('die_cutting_hourse',array('die_cutting_id'=>$this->data['data_complete']['id']));
        $this->data['job'] = $this->machine_flow_model->get_job($id,$flow);
        //echo '<pre>';print_r($this->data);die;
        $this->load->template('die_cutting/view_machine',$this->data);
    }

}