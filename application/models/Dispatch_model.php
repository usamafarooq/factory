<?php
class Dispatch_model extends MY_Model{
	public function get_item($id=null)
	{
		$this->db->select('p.id,p.WO_no,p.Job_Description,p.Quantity,f.start_date,f.end_date')
				 ->from('production_plan p')
				 ->join('production_flow f', 'f.plane_id = p.id')
				 ->where('f.type', 'pasting')
				 ->group_by('p.id');
		if ($id!=null) {
			$this->db->where('p.user_id', $id);
		}
		return $this->db->get()->result_array();
	}

	public function get_delivery_challan($id)
	{
		$this->db->select('w.id,c.client_Name,c.Address,i.Description,br.qty_per_mc,br.total_carton,now() as date,i.Item_code,w.created_at')
				 ->from('work_orders w')
				 ->join('clients c', 'c.id = w.Client')
				 ->join('item i', 'i.id = w.Item_Code')
				 ->join('batch_release br', 'br.wo_id = w.id','left')
				 ->where('w.id',$id)
				 ->group_by('w.id');
		return $this->db->get()->row_array();
	}

	public function get_slip($id)
	{
		$this->db->select('w.id,c.client_Name,c.Address,i.Description,br.qty_per_mc,br.total_carton,now() as date,i.Item_code,w.created_at,PO_No,dc.created_at as mfg_date,dc.delivery_challan')
				 ->from('work_orders w')
				 ->join('clients c', 'c.id = w.Client')
				 ->join('item i', 'i.id = w.Item_Code')
				 ->join('batch_release br', 'br.wo_id = w.id')
				 ->join('delivery_challan dc', 'dc.wo_id = w.id')
				 ->where('w.id',$id)
				 ->group_by('w.id');
		return $this->db->get()->row_array();
	}
}