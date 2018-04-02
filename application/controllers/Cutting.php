<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cutting extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('cutting_model');
        $this->load->model('machine_flow_model');
        $this->module = 'cutting';
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
            $this->data['orders'] = $this->cutting_model->get_flow('Cutting',null);
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->cutting_model->get_flow('Cutting',null,$this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('cutting/index',$this->data);
    }

    public function view_machine($id,$flow)
    {
        $this->data['title'] = 'Cutting Machine';
        $this->data['data'] = $this->cutting_model->get_row_single('cutting',array('plane_id'=>$id,'flow_id'=>$flow));
        $this->data['job'] = $this->machine_flow_model->get_job($id,$flow);
        //echo '<pre>';print_r($this->data);
        $this->load->template('cutting/view_machine',$this->data);
    }

}