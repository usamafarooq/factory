<?php
class Leaflet_cutting_model extends MY_Model{
	public function get_item($id=null)
	{
		$this->db->select('p.id,p.WO_no,p.Job_Description,p.Quantity,f.start_date,f.end_date')
				 ->from('production_plan p')
				 ->join('production_flow f', 'f.plane_id = p.id')
				 ->where('f.type', 'die_cutting')
				 ->group_by('p.id');
		if ($id!=null) {
			$this->db->where('p.user_id', $id);
		}
		return $this->db->get()->result_array();
	}
}