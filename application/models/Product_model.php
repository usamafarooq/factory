<?php
		    class Product_model extends MY_Model{

		    	public function get_product($id = null)
					{
						$this->db->select('product.*,category.Name as category,sub_category.Name as sub_category')
								 ->from('product')->join('category', 'category.id = product.Category')->join('sub_category', 'sub_category.id = product.Sub_Category', 'left')->group_by('product.id'); if ($id != null) {
								$this->db->where('product.user_id', $id);
							}return $this->db->get()->result_array();
					}}