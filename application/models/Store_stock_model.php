<?php
class Store_stock_model extends MY_Model{
	public function get_stock($id)
	{
		$this->db->select('sum(p.received_quantity) as orders,p.product_id')
				 ->from('requisition_product p')
				 ->join('requisition pr','pr.id = p.requisition_id')
				 ->where('pr.status','Complete')
				 ->where('pr.store_id',$id)
				 ->group_by('p.product_id');
		$order = $this->db->get_compiled_select();
		$this->db->select('p.id,p.Product_Name,p.size,p.gramage,sum(pp.received_quantity) as stock,o.orders')
				 ->from('product p')
				 ->join('product_release_product pp','pp.product_id = p.id', 'left')
				 ->join('product_release pu','pu.id = pp.product_release_id and Status = "Complete"','left')
				 ->join('('.$order.') o', 'o.product_id = p.id', 'left')
				 ->where('pu.Store',$id)
				 ->group_by('p.id');
		return $this->db->get()->result_array();
	}


	public function get_stock_by_product($id,$product_id = null)
	{
		$this->db->select('sum(p.received_quantity) as orders,p.product_id')
				 ->from('requisition_product p')
				 ->join('requisition pr','pr.id = p.requisition_id')
				 ->where('pr.status','Complete')
				 ->where('pr.store_id',$id)
				 ->group_by('p.product_id');
		$order = $this->db->get_compiled_select();
		$this->db->select('p.id,sum(pp.received_quantity) as stock,o.orders')
				 ->from('product p')
				 ->join('product_release_product pp','pp.product_id = p.id', 'left')
				 ->join('product_release pu','pu.id = pp.product_release_id and Status = "Complete" and pu.Store = '.$id,'left')
				 ->join('('.$order.') o', 'o.product_id = p.id', 'left')
				 //->where('pu.Store',$id)
				 ->group_by('p.id');
		if ($product_id != null) {
			$this->db->where_in('p.id', $product_id);
		}
		return $this->db->get()->result_array();
	}
}