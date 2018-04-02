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
}