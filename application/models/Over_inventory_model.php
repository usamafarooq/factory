<?php
class Over_inventory_model extends MY_Model{

	public function get_stock($id)
	{
		$this->db->select('f.Name,sum(rp.pending_quantity) as qty,p.Product_Name')
				 ->from('flows f')
				 ->join('requisition r', 'r.type=f.Name')
				 ->join('requisition_product rp','r.id = rp.requisition_id')
				 ->join('product p', 'p.id=rp.product_id')
				 ->where('f.id',$id)
				 ->group_by('f.id')
				 ->having('qty > 0');
		return $this->db->get()->result_array();
	}
}