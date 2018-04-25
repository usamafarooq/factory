<?php
class Item_model extends MY_Model
{
    
    public function get_item($id = null)
    {
        $this->db->select('item.*,clients.client_Name, count(bom.id) as bom')
        		 ->from('item')
        		 ->join('clients', 'clients.id = item.Client')
        		 ->join('bom','bom.item_id = item.id', 'left')
        		 ->group_by('item.id');
        if ($id != null) {
            $this->db->where('item.user_id', $id);
        }
        return $this->db->get()->result_array();
    }

    public function get_bom($id)
    {
    	$this->db->select('b.qty,p.Product_Name,c.Name as category,s.Name as sub_category, b.id')
    			 ->from('bom b')
    			 ->join('product p','p.id = b.product_id')
    			 ->join('category c', 'c.id = p.Category')
    			 ->join('sub_category s','s.id = p.Sub_Category')
    			 ->where('b.item_id',$id)
    			 ->group_by('b.id');
    	return $this->db->get()->result_array();
    }
}