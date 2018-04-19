<?php
class Client_inventory_report_model extends MY_Model{

	public function get_requisition($id)
	{
		$this->db->select('requisition.*,sub_store.Name')
				 ->from('requisition')
				 ->join('work_orders', 'work_orders.id = requisition.wo_id')
				 ->join('sub_store', 'sub_store.id = requisition.store_id')
				 ->where('work_orders.Client', $id); 
		return $this->db->get()->result_array();
	}
}