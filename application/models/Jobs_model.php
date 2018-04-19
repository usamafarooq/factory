<?php
class Jobs_model extends MY_Model{
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

	public function get_plane($id)
	{
		$this->db->select('i.Description, fl.Name, fs.created_at as start_date, fc.created_at as end_date,m.machine_Name machine')
				 ->from('work_orders w')
				 ->join('item i', 'i.id = w.Item_Code')
				 ->join('production_plan p', 'w.id = p.WO_no')
				 ->join('production_flow f', 'p.id = f.plane_id')
				 ->join('order_flow_start fs', 'fs.flow_id = f.id','left')
				 ->join('order_flow_submission fc', 'fc.flow_id = f.id','left')
				 ->join('machines m','m.id = f.machine','left')
				 ->join('flows fl', 'fl.id = f.type')
				 ->where('w.id', $id);
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
}