<?php
		    class Quantity_model extends MY_Model{

		    	public function get_quantity($id = null)
					{
						$this->db->select('quantity.*,product.Product_Name,product.Product_Code')
								 ->from('quantity')->join('product', 'product.id = quantity.Product'); if ($id != null) {
								$this->db->where('quantity.user_id', $id);
							}return $this->db->get()->result_array();
					}}