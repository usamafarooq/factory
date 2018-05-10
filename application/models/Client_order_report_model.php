<?php
class Client_order_report_model extends MY_Model{

	public function get_report($start,$end,$id = null)
	{
		$this->db->select('c.Company_Name name,c.id, group_concat(br.qty_per_mc separator ",") as qty, group_concat(br.total_carton separator ",") as carton')
				 ->from('clients c')
				 ->join('work_orders w', 'w.Client = c.id')
				 ->join('batch_release br', 'br.wo_id = w.id')
				 ->join('delivery_challan d', 'd.wo_id = w.id')
				 ->where('d.created_at >=', $start)
				 ->where('d.created_at <=', $end)
				 ->group_by('c.id');
		return $this->db->get()->result_array();
	}

	public function get_client_report($id)
	{
		$this->db->select('c.Company_Name name,c.id, br.qty_per_mc as qty, br.total_carton as carton,w.id as wo_id, i.Description, i.Item_Code')
				 ->from('clients c')
				 ->join('work_orders w', 'w.Client = c.id')
				 ->join('item i', 'w.Item_Code = i.id')
				 ->join('batch_release br', 'br.wo_id = w.id')
				 ->join('delivery_challan d', 'd.wo_id = w.id')
				 ->group_by('w.id');
		return $this->db->get()->result_array();
	}
}