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
		$this->db->select('l.*,f.Name as flow_name')
				 ->from('line_clearance l')
				 ->join('production_flow p','l.flow_id = p.id')
				 ->join('flows f','f.id = p.type')
				 ->where('p.plane_id',$id);
		return $this->db->get()->result_array();
	}

	public function get_work_order($id)
	{
		$this->db->select('"Work Order" as type, w.created_at as start_date, of.created_at as end_date')
				 ->from('work_orders w')
				 ->join('production_plan p', 'p.WO_no = w.id', 'left')
				 ->join('production_flow pf', 'pf.plane_id = p.id and type = 16', 'left')
				 ->join('order_flow_submission of', 'of.flow_id = pf.id', 'left')
				 ->where('w.id',$id);
		return $this->db->get()->result_array();
	}

	public function get_production_plan($id)
	{
		$this->db->select('"Production Plane" as type, p.created_at as start_date, of.created_at as end_date')
				 ->from('production_plan p')
				 ->join('production_flow pf', 'pf.plane_id = p.id and type = 16', 'left')
				 ->join('order_flow_submission of', 'of.flow_id = pf.id', 'left')
				 ->where('p.WO_no',$id);
		return $this->db->get()->result_array();
	}

	public function get_line_clearance($id)
	{
		$this->db->select('"Line Clearance" as type, l.created_at as start_date, "" as end_date')
				 ->from('line_clearance l')
				 ->join('production_flow p','l.flow_id = p.id')
				 ->join('flows f','f.id = p.type')
				 ->where('p.plane_id',$id);
		return $this->db->get()->result_array();
	}

	public function get_production_flow($id)
	{
		$this->db->select('f.Name as type, fs.created_at as start_date, fc.created_at as end_date')
				 ->from('production_flow p')
				 ->join('production_plan pp', 'pp.id = p.plane_id')
				 ->join('flows f','f.id = p.type')
				 ->join('order_flow_start fs', 'fs.flow_id = p.id')
				 ->join('order_flow_submission fc', 'fc.flow_id = p.id')
				 ->where('p.plane_id',$id);
		return $this->db->get()->result_array();
	}

	public function get_product($id)
	{
		$this->db->select('p.Product_Name as name, sum(rp.quantity) as order_qty, sum(rp.received_quantity) as deliver_qty, sum(rp.pending_quantity) as balance_qty')
				 ->from('product p')
				 ->join('requisition_product rp', 'rp.product_id = p.id')
				 ->join('requisition r', 'r.id = rp.requisition_id')
				 ->group_by('p.id')
				 ->where('r.status', 'Complete')
				 ->where('r.wo_id', $id);
		return $this->db->get()->result_array();
	}

	public function get_batch_detail($id,$flow_id)
	{
		$this->db->select('w.id,i.Description as product_name,w.quantity,m.machine_Name')
				 ->from('work_orders w')
				 ->join('item i', 'i.id = w.Item_Code')
				 ->join('production_plan pp','pp.WO_no = w.id')
				 ->join('production_flow pf','pf.plane_id = pp.id and pf.id = '.$flow_id)
				 ->join('machines m','m.id = pf.machine', 'left')
				 ->group_by('w.id')
				 ->where('w.id',$id);
		return $this->db->get()->row_array();
	}

	public function get_batch_release($id)
	{
		$this->db->select('br.*,w.id,i.Description as product_name,w.quantity,m.machine_Name')
				 ->from('work_orders w')
				 ->join('item i', 'i.id = w.Item_Code')
				 ->join('batch_release br', 'br.wo_id = w.id')
				 ->join('production_plan pp','pp.WO_no = w.id')
				 ->join('production_flow pf','pf.plane_id = pp.id and pf.id = br.flow_id')
				 ->join('machines m','m.id = pf.machine', 'left')
				 ->group_by('w.id')
				 ->where('w.id',$id);
		return $this->db->get()->row_array();
	}
}