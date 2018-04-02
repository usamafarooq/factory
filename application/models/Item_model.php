<?php
		    class Item_model extends MY_Model{

		    	public function get_item($id = null)
					{
						$this->db->select('item.*,clients.client_Name')
								 ->from('item')->join('clients', 'clients.id = item.Client'); if ($id != null) {
								$this->db->where('item.user_id', $id);
							}return $this->db->get()->result_array();
					}}