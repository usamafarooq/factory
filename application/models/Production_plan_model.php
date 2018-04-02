<?php
class Production_plan_model extends MY_Model{

public function get_production_plan($id = null)
	{
		$this->db->select('work_orders.*,clients.client_Name as Client, item.Item_Code,count(production_plan.id) as p_id')
			 ->from('work_orders')
			 ->join('clients', 'clients.id = work_orders.Client')
			 ->join('production_plan', 'production_plan.WO_no = work_orders.id', 'left')
			 ->join('item', 'item.id = work_orders.Item_Code')
			 ->group_by('work_orders.id');
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

	public function get_flows($id)
	{
		$this->db->select('f.id,f.Name,p.parent_id')
			 ->from('flows f')
			 ->join('production_flow p', 'f.id = p.type')
			 ->join('production_plan pp', 'pp.id = p.plane_id')
			 ->where('pp.WO_no',$id);
		return $this->db->get()->result_array();
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

	public function get_machines($flow_id)
	{
		$this->db->select('m.*')
			 ->from('machines m')
			 ->join('flows f', 'find_in_set(f.id, m.flows)')
			 ->group_by('m.id')
			 ->where('f.id',$flow_id);
		return $this->db->get()->result_array();
	}

	public function get_detail($id)
	{
		$this->db->select('p.id,Job_Description,start_date,end_date,DATEDIFF(end_date, start_date) AS days')
				 ->from('production_flow p')
				 ->join('production_plan pp', 'pp.id = p.plane_id')
				 ->where('p.machine',$id);
		return $this->db->get()->result_array();
	}

}