<?php
class Machines_model extends MY_Model{
	public function get_machines($id = null)
	{
		$this->db->select('group_concat(feature.name separator ",") AS name,machines.id' )
        		 ->from('feature')
        		 ->join('machines', 'find_in_set(feature.id, machines.feature)')
        		 ->group_by('machines.id');
        $feature = $this->db->get_compiled_select();

        $this->db->select( 'group_concat(flows.Name separator ",") AS Name, machines.id' )
        		 ->from('flows')
        		 ->join('machines', 'find_in_set(flows.id, machines.flows)')
        		 ->group_by('machines.id');
        $flows = $this->db->get_compiled_select();

		$this->db->select('machines.*,feature.name,flows.Name as flow')
				 ->from('machines')
				 ->join('('.$feature.')  feature', 'feature.id = machines.id', 'left')
				 ->join('('.$flows.')  flows', 'flows.id = machines.id', 'left')
				 ->group_by('machines.id'); 
		if ($id != null) {
			$this->db->where('machines.user_id', $id);
		}
		return $this->db->get()->result_array();
	}
}