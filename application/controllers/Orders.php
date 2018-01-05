<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends MY_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('Orders_model');
        $this->module = 'orders';
        $this->user_type = $this->session->userdata('user_type');
        $this->id = $this->session->userdata('user_id');
        $this->permission = $this->get_permission($this->module,$this->user_type);
        $this->dis_permission = $this->get_permission('distribution',$this->user_type);
        $this->pro_permission = $this->get_permission('product',$this->user_type);
    }

    public function index()
    {
    	if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
		{
			redirect('home');
		}
		$this->data['title'] = 'Order';
		if ( $this->permission['view_all'] == '1'){
			$this->data['orders'] = $this->Orders_model->all_rows('sales');
		}
		elseif ($this->permission['view'] == '1') {
			$this->data['orders'] = $this->Orders_model->get_rows('sales',array('user_id'=>$this->id));
		}
		$this->data['permission'] = $this->permission;
		$this->load->template('orders/index',$this->data);
    }

    public function Add()
	{
		if ( $this->permission['created'] == '0') 
		{
			redirect('home');
		}
		$this->data['title'] = 'Distributions';
		
		if ( $this->dis_permission['view_all'] == '1'){
			$this->data['distributions'] = $this->Orders_model->all_rows('distribution');
		}
		elseif ($this->dis_permission['view'] == '1') {
			$this->data['distributions'] = $this->Orders_model->get_rows('distribution',array('user_id'=>$this->id));
		}
		$this->load->template('orders/add',$this->data);
	}

    public function create()
	{

		if ( $this->permission['created'] == '0') 
		{
			redirect('home');
		}
		$scm_code = $this->input->post('distribution_sort');
		$this->data['distribution'] = $this->Orders_model->get_row_single('distribution',array('scm_code'=>$scm_code));

		// echo '<pre>';print_r($scm_code);die;

		if ( $this->pro_permission['view_all'] == '1'){
			$this->data['products_details'] = $this->Orders_model->all_rows('product');
 		$first_date  =  date('Y-m-01', strtotime("-3 month"));
 		$last_date  =  date('Y-m-t', strtotime("-1 month"));


		$this->data['product_data_sort'] = $this->db->query("SELECT product.*, group_concat(s.sale separator ',') as sale, group_concat(s.month separator
		',') as month, c.closing FROM product left join (select sales.packcode, sum(sales.sales) as sale, MONTH(sales.date) as month, sales.closing from sales where sales.distribution_code = ".$scm_code." and sales.date >= DATE('".$first_date."') and sales.date <= DATE('".$last_date."') GROUP BY MONTH(sales.date)) as s on s.packcode = product.product_code left join (select closing, packcode from sales where distribution_code = ".$scm_code." order by id desc limit 1) as c on c.packcode = product.product_code GROUP by product.id")->result_array();
		// echo '<pre>';print_r($result);die;

		

		}
		elseif ($this->pro_permission['view'] == '1') {
			$this->data['products_details'] = $this->Orders_model->get_rows('product',array('user_id'=>$this->id));


		$first_date  =  date('Y-m-01', strtotime("-3 month"));
 		$last_date  =  date('Y-m-t', strtotime("-1 month"));


			$this->data['product_data_sort'] = $this->db->query("SELECT product.*, group_concat(s.sale separator ',') as sale, group_concat(s.month separator
		',') as month, c.closing FROM product left join (select sales.packcode, sum(sales.sales) as sale, MONTH(sales.date) as month, sales.closing from sales where sales.distribution_code = ".$scm_code." and sales.date >= DATE('".$first_date."') and sales.date <= DATE('".$last_date."') and sales.user_id = ".$this->id." GROUP BY MONTH(sales.date)) as s on s.packcode = product.product_code left join (select closing, packcode from sales where distribution_code = ".$scm_code." and sales.user_id = ".$this->id." order by id desc limit 1) as c on c.packcode = product.product_code where product.user_id = ".$this->id." GROUP by product.id  ")->result_array();




		}
		$this->data['permission'] = $this->permission;
		$this->data['title'] = 'Create Order';
		$this->load->template('orders/create',$this->data);
	}

	public function test()
	{
		$result = $this->db->query("SELECT product.*, group_concat(s.sale separator ',') as sale, group_concat(s.month separator
		 ',') as month FROM product left join (select sales.packcode, sum(sales.sales) as sale, MONTH(sales.date) as month from sales where sales.distribution_code = 000449 and sales.date >= DATE('2017-10-01') and sales.date <= DATE('2017-12-31') GROUP BY MONTH(sales.date)) as s on s.packcode = product.product_code GROUP by product.id")->result_array();
		echo '<pre>';print_r($result);die;
	}

}