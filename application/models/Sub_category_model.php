<?php
		    class Sub_category_model extends MY_Model{

		    	public function get_sub_category($id = null)
					{
						$this->db->select('sub_category.*,category.name')
								 ->from('sub_category')->join('category', 'category.id = sub_category.Parent_Category'); if ($id != null) {
								$this->db->where('sub_category.user_id', $id);
							}return $this->db->get()->result_array();
					}}