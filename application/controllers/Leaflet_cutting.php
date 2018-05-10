<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leaflet_cutting extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('leaflet_cutting_model');
        $this->load->model('machine_flow_model');
        $this->module = 'leaflet_cutting';
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
            $this->data['orders'] = $this->leaflet_cutting_model->get_flow('Leaflet Cutting','leaflet_cutting');
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->leaflet_cutting_model->get_flow('Leaflet Cutting','leaflet_cutting',$this->id);
        }
        // print_r($this->db->last_query());
        // echo '<pre>';print_r($this->data['orders']);die;
        $this->data['permission'] = $this->permission;
        $this->load->template('leaflet_cutting/index',$this->data);
    }

    public function view_machine($id,$flow)
    {
        $this->data['title'] = 'Cutting Machine';
        $this->data['data'] = $this->leaflet_cutting_model->get_row_single('leaflet_cutting',array('plane_id'=>$id,'flow_id'=>$flow));
        $this->data['job'] = $this->machine_flow_model->get_job($id,$flow);
        //echo '<pre>';print_r($this->data);die;
        $this->load->template('leaflet_cutting/view_machine',$this->data);
    }

}