<?php
		    class Production_plan_model extends MY_Model{

		    	public function get_production_plan($id = null)
					{
						$this->db->select('production_plan.*,work_orders.Description,work_orders.Item_Code')
								 ->from('production_plan')->join('work_orders', 'work_orders.id = production_plan.WO_no'); if ($id != null) {
								$this->db->where('production_plan.user_id', $id);
							}return $this->db->get()->result_array();
					}}