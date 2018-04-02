<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Development extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Develoment_model');
        $this->module = 'development';
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
            $this->data['orders'] = $this->Develoment_model->get_item();
        }
        elseif ($this->permission['view'] == '1') {
            $this->data['orders'] = $this->Develoment_model->get_item($this->id);
        }
        $this->data['permission'] = $this->permission;
        $this->load->template('development/index',$this->data);
    }

    public function report_submit($id)
    {
        if ($this->permission['edit'] == '0') 
        {
            redirect('home');
        }
        if ($this->input->post()) {
            $data = $this->input->post();
            $data['order_id'] = $id;
            $data['user_id'] = $this->session->userdata('user_id');
            $config['upload_path']          = './uploads/work_order';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('file'))
            {
                $data['file'] = '/uploads/'.$this->upload->data('file_name');
            }
            $id = $this->Develoment_model->insert('development_report',$data);
            if ($id) {
                redirect('development');
            }
        }
        $this->data['title'] = 'Submit Report';
        $this->load->template('development/report',$this->data);
    }

}