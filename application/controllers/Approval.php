<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approval extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('approval_model');
        $this->module = 'approval';
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
            $this->data['orders'] = $this->approval_model->get_item();
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->approval_model->get_item($this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('approval/index',$this->data);
    }

    public function approve($id)
    {
        $id = $this->approval_model->update('work_orders',array('approval'=>'1'),array('id'=>$id));
        if ($id) {
            redirect('approval');
        }
    }

}