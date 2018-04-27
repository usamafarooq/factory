<?php 

class Machine_flow_model extends MY_Model
{
	public function get_job($plane_id,$flow_id)
	{
		$this->db->select('p.id, p.WO_no, p.Job_Description, p.Planned_qty, w.PO_No, c.client_Name, m.machine_Name, i.colors, f.id as flow, f.start_date, f.end_date, i.type, i.size, i.gsm, p.Planned_qty_sheets as qty, p.Conversion, i.spl1, i.spl2, i.spl3, i.spl4')
				 ->from('production_plan p')
				 ->join('work_orders w', 'w.id = p.WO_no')
				 ->join('clients c', 'c.id = w.Client')
				 ->join('item i', 'i.id = w.Item_Code')
				 ->join('production_flow f', 'p.id = f.plane_id and f.id = '.$flow_id)
				 ->join('machines m', 'f.machine = m.id', 'left')
				 ->where('p.id', $plane_id);
		return $this->db->get()->row_array();
	}
}