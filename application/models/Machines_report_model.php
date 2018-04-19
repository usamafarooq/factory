<?php
class Machines_report_model extends MY_Model{

	public function get_machines()
	{
		$this->db->select('m.*')
			 ->from('machines m')
			 ->join('flows f', 'find_in_set(f.id, m.flows)')
			 ->group_by('m.id');
			 //->where('f.id',$flow_id);
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