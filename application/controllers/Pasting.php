<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasting extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('pasting_model');
        $this->load->model('machine_flow_model');
        $this->module = 'pasting';
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
            $this->data['orders'] = $this->pasting_model->get_flow('Pasting','pasting');
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->pasting_model->get_flow('Pasting','pasting',$this->id);
        }
        $this->data['permission'] = $this->permission;
        // print_r($this->db->last_query());
        // echo '<pre>';print_r($this->data['orders']);die;
        $this->load->template('pasting/index',$this->data);
    }

    public function view_machine($id,$flow)
    {
        $this->data['title'] = 'Pasting Machine';
        $this->data['data'] = $this->pasting_model->get_row_single('pasting',array('plane_id'=>$id,'flow_id'=>$flow));
        $this->data['data_complete'] = $this->pasting_model->get_row_single('pasting_complete',array('pasting_id'=>$this->data['data']['id']));
        $this->data['data_hourse'] = $this->pasting_model->get_rows('pasting_hourse',array('pasting_id'=>$this->data['data_complete']['id']));
        $this->data['job'] = $this->machine_flow_model->get_job($id,$flow);
        //echo '<pre>';print_r($this->data);die;
        $this->load->template('pasting/view_machine',$this->data);
    }

}