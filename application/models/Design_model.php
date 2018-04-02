<?php
		    class Design_model extends MY_Model{
public function get_item($id = null)
					{
						$this->db->select('work_orders.*,clients.client_Name as Client, item.Item_Code, count(design_report.id) as reports')
								 ->from('work_orders')
								 ->join('clients', 'clients.id = work_orders.Client')
								 ->join('design_report', 'design_report.order_id = work_orders.id', 'left')
								 ->join('item', 'item.id = work_orders.Item_Code')
								 ->group_by('work_orders.id');
								if ($id != null) {
									$this->db->where('work_orders.user_id', $id);
								}
							return $this->db->get()->result_array();
					}
		    	}