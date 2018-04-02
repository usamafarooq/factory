<?php
class Stock_model extends MY_Model{
	public function get_stock()
	{
		$this->db->select('sum(Quantity) as addi,Product as product_id')
				 ->from('quantity_adjustments')
				 ->where('Type','Addition')
				 ->group_by('Product');
		$addi = $this->db->get_compiled_select();
		$this->db->select('sum(Quantity) as less,Product as product_id')
				 ->from('quantity_adjustments')
				 ->where('Type','Subtraction')
				 ->group_by('Product');
		$less = $this->db->get_compiled_select();
		$this->db->select('sum(p.received_quantity) as orders,p.product_id')
				 ->from('product_release_product p')
				 ->join('product_release pr','pr.id = p.product_release_id')
				 ->where('pr.Status','Complete')
				 ->group_by('p.product_id');
		$order = $this->db->get_compiled_select();
		$this->db->select('p.id,p.Product_Name,p.size,p.gramage,sum(pp.received_quantity) as stock,less,addi,o.orders')
				 ->from('product p')
				 ->join('purchase_product pp','pp.product_id = p.id', 'left')
				 ->join('purchases pu','pu.id = pp.purchase_id and Status = "Received"','left')
				 ->join('('.$addi.') addi', 'addi.product_id = p.id', 'left')
				 ->join('('.$less.') less', 'less.product_id = p.id', 'left')
				 ->join('('.$order.') o', 'o.product_id = p.id', 'left')
				 ->group_by('p.id');
		return $this->db->get()->result_array();
	}
}