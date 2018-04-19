<?php
class Job_inventory_report_model extends MY_Model{
	public function get_item($start,$end,$id = null)
	{
		$this->db->select('work_orders.*,clients.client_Name as Client, item.Item_Code')
			 ->from('work_orders')
			 ->join('clients', 'clients.id = work_orders.Client')
			 ->join('item', 'item.id = work_orders.Item_Code')
			 ->where('work_orders.created_at >=',$start)
			 ->where('work_orders.created_at <=',$end);
		if ($id != null) {
			$this->db->where('work_orders.user_id', $id);
		}
		return $this->db->get()->result_array();
	}

	public function get_requisition($id)
	{
		$this->db->select('requisition.*,sub_store.Name')
				 ->from('requisition')
				 ->join('sub_store', 'sub_store.id = requisition.store_id')
				 ->where('requisition.wo_id', $id); 
		return $this->db->get()->result_array();
	}
}