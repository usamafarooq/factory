<?php
class Work_orders_model extends MY_Model{
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

	public function get_plane($id)
	{
		$this->db->select('i.Description, fl.Name, f.start_date, f.end_date')
				 ->from('work_orders w')
				 ->join('item i', 'i.id = w.Item_Code')
				 ->join('production_plan p', 'w.id = p.WO_no')
				 ->join('production_flow f', 'p.id = f.plane_id')
				 ->join('flows fl', 'fl.id = f.type')
				 ->where('w.id', $id);
		return $this->db->get()->result_array();
	}
}