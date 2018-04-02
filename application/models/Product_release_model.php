<?php
class Product_release_model extends MY_Model{

	public function get_product_release($id = null)
	{
		$this->db->select('product_release.*,sub_store.Name')
				 ->from('product_release')->join('sub_store', 'sub_store.id = product_release.Store'); if ($id != null) {
				$this->db->where('product_release.user_id', $id);
			}return $this->db->get()->result_array();
	}

	public function get_order_product($id)
	{
		$this->db->select('p.Product_Name,pp.quantity,pp.id')
				 ->from('product_release_product pp')
				 ->join('product p','p.id = pp.product_id')
				 ->where('pp.product_release_id',$id)
				 ->group_by('pp.id');
		return $this->db->get()->result_array();
	}
}