<?php
class Purchases_model extends MY_Model{

	public function get_purchases($id = null)
	{
		$this->db->select('purchases.*,vednor.Name')
				 ->from('purchases')->join('vednor', 'vednor.id = purchases.Supplier'); if ($id != null) {
				$this->db->where('purchases.user_id', $id);
			}return $this->db->get()->result_array();
	}

	public function get_order_product($id)
	{
		$this->db->select('p.Product_Name,pp.quantity,pp.id')
				 ->from('purchase_product pp')
				 ->join('product p','p.id = pp.product_id')
				 ->where('pp.purchase_id',$id)
				 ->group_by('pp.id');
		return $this->db->get()->result_array();
	}

	public function get_product_stock($id,$parent,$store_id)
	{
		$this->db->select('sum(p.received_quantity) as orders,p.product_id')
				 ->from('requisition_product p')
				 ->join('requisition pr','pr.id = p.requisition_id')
				 ->where('pr.status','Complete')
				 ->where('pr.store_id',$store_id)
				 ->group_by('p.product_id');
		$order = $this->db->get_compiled_select();
		$this->db->select('p.*,sum(pp.received_quantity) as stock,o.orders')
				 ->from('product p')
				 ->join('product_release_product pp','pp.product_id = p.id', 'left')
				 ->join('product_release pu','pu.id = pp.product_release_id and Status = "Complete" and pu.Store = '.$store_id,'left')
				 ->join('('.$order.') o', 'o.product_id = p.id', 'left')
				 ->where('p.Sub_Category',$id)
				 ->where('p.Category',$parent)
				 ->group_by('p.id');
		return $this->db->get()->result_array();
	}
}