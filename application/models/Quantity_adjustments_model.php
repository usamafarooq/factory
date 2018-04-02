<?php
		    class Quantity_adjustments_model extends MY_Model{

		    	public function get_quantity_adjustments($id = null)
					{
						$this->db->select('quantity_adjustments.*,product.Product_Name')
								 ->from('quantity_adjustments')->join('product', 'product.id = quantity_adjustments.Product'); if ($id != null) {
								$this->db->where('quantity_adjustments.user_id', $id);
							}return $this->db->get()->result_array();
					}}