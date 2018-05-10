<?php 

class Daily_dispatch_model extends MY_Model
{
	public function get_order($start,$end)
	{
		$this->db->select('d.created_at,i.Item_Code,c.Company_name,w.id,i.Description,w.quantity,br.qty_per_mc as qty, br.total_carton as carton,w.PO_No,d.delivery_challan')
				 ->from('clients c')
				 ->join('work_orders w', 'w.Client = c.id')
				 ->join('item i', 'w.Item_Code = i.id')
				 ->join('batch_release br', 'br.wo_id = w.id')
				 ->join('delivery_challan d', 'd.wo_id = w.id')
				 ->where('d.created_at >=', $start)
				 ->where('d.created_at <=', $end)
				 ->group_by('w.id');
		return $this->db->get()->result_array();
	}
}