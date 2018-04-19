<?php
class Requisition_model extends MY_Model{
	public function get_requisition($id = null)
	{
		$this->db->select('requisition.*,sub_store.Name')
				 ->from('requisition')
				 ->join('sub_store', 'sub_store.id = requisition.store_id'); 
		if ($id != null) {
			$this->db->where('requisition.user_id', $id);
		}
		return $this->db->get()->result_array();
	}

	public function get_order_product($id)
	{
		$this->db->select('p.Product_Name,pp.quantity,pp.id,pp.received_quantity')
				 ->from('requisition_product pp')
				 ->join('product p','p.id = pp.product_id')
				 ->where('pp.requisition_id',$id)
				 ->group_by('pp.id');
		return $this->db->get()->result_array();
	}

	public function get_all_orders($id,$type)
	{
		$this->db->select('p.Product_Name,pp.quantity,pp.id,pp.received_quantity,s.Name,r.status')
				 ->from('requisition_product pp')
				 ->join('requisition r','r.id = pp.requisition_id')
				 ->join('sub_store s', 's.id = r.store_id')
				 ->join('product p','p.id = pp.product_id')
				 ->where('r.wo_id',$id)
				 ->where('r.type',$type)
				 ->group_by('pp.id');
		return $this->db->get()->result_array();
	}
}