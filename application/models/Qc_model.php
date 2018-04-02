<?php
class Qc_model extends MY_Model{

	public function get_item($id = null)
	{
		$this->db->select('work_orders.*,clients.client_Name as Client, item.Item_Code')
			 ->from('work_orders')
			 ->join('clients', 'clients.id = work_orders.Client')
			 ->join('item', 'item.id = work_orders.Item_Code');
		if ($id != null) {
			$this->db->where('work_orders.user_id', $id);
		}
		return $this->db->get()->result_array();
	}
	
}