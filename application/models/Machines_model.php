<?php
		    class Machines_model extends MY_Model{

		    	public function get_machines($id = null)
					{
						$this->db->select('machines.*,group_concat(feature.name separator ",") as name')
								 ->from('machines')->join('feature', 'find_in_set(feature.id, machines.feature)')->group_by('machines.id'); if ($id != null) {
								$this->db->where('machines.user_id', $id);
							}return $this->db->get()->result_array();
					}}