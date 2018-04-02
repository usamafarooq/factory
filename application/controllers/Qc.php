<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qc extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('qc_model');
        $this->module = 'qc';
        $this->user_type = $this->session->userdata('user_type');
        $this->id = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module,$this->user_type);
    }

    public function index()
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') 
        {
            redirect('home');
        }
        $this->data['title'] = 'Work Orders';
        if ( $this->permission['view_all'] == '1'){
            $this->data['work_orders'] = $this->qc_model->get_item();
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['work_orders'] = $this->qc_model->get_item($this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('qc/index',$this->data);
    }

    public function view_flows($id)
    {
        if ($this->permission['view'] == '0' && $this->permission['view_all'] == '0') 
        {
            redirect('home');
        }
        $this->data['title'] = 'Work Orders';
        $this->data['flows'] = $this->qc_model->get_qc_flow($id);
        $this->data['permission'] = $this->permission;
        //echo '<pre>';print_r($this->data['flows']);die;
        $this->load->template('qc/view_flows',$this->data);
    }

    public function line_clearance($id,$wo)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $data['flow_id'] = $id;
            $data['user_id'] = $this->session->userdata('user_id');
            $id = $this->qc_model->insert('line_clearance',$data);
            if ($id) {
                redirect('qc/view_flows/'.$wo);
            }
        }
        $this->data['title'] = 'Line Clearance';
        $this->data['wo_no'] = $wo;
        $this->load->template('qc/line_clearance',$this->data);
    }

    public function view_line_clearance($id,$wo)
    {
        $this->data['title'] = 'Line Clearance';
        $this->data['data'] = $this->qc_model->get_row_single('line_clearance',array('flow_id'=>$id));
        $this->data['wo_no'] = $wo;
        //echo '<pre>';print_r($this->data);die;
        $this->load->template('qc/view_line_clearance',$this->data);
    }

}