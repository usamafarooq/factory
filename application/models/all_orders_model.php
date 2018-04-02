<?php
class all_orders_model extends MY_Model{
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

	public function get_order($id)
	{
		$this->db->select('item.*,work_orders.*,clients.order_Margin')
			 ->from('work_orders')
			 ->join('item', 'item.id = work_orders.Item_Code')
			 ->join('clients', 'clients.id = work_orders.Client');
				$this->db->where('work_orders.id', $id);
		return $this->db->get()->row_array();
	}
	
	public function get_order_flows($id)
	{
		$this->db->select('f.Name,p.start_date,m.machine_Name')
			 ->from('flows f')
			 ->join('production_flow p', 'f.id = p.type')
			 ->join('machines m', 'm.id = p.machine', 'left')
			 ->join('production_plan pp', 'pp.id = p.plane_id')
			 ->where('f.Name !=', 'Store')
			 ->where('f.Name !=', 'Dispatch')
			 ->where('pp.WO_no',$id);
		return $this->db->get()->result_array();
	}

	public function line_clearance($id)
	{
		$this->db->select('l.*')
				 ->from('line_clearance l')
				 ->join('production_flow p','l.flow_id = p.id')
				 ->where('p.plane_id',$id);
		return $this->db->get()->result_array();
	}
}