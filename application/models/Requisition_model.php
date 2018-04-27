<?php
class Requisition_model extends MY_Model{
	public function get_requisition($id = null)
	{
		$this->db->select('requisition.*,sub_store.Name')
				 ->from('requisition')
				 ->join('sub_store', 'sub_store.id = requisition.store_id'); 
		if ($id != null) {
			$this->db->where('requisition.user_id', $id);
		}
		return $this->db->get()->result_array();
	}

	public function get_order_product($id)
	{

		// $this->db->select('sum(p.received_quantity) as orders,p.product_id,pr.store_id')
		// 		 ->from('requisition_product p')
		// 		 ->join('requisition pr','pr.id = p.requisition_id')
		// 		 ->where('pr.status','Complete')
		// 		 ->group_by(array('p.product_id','pr.store_id'));
		// $orders = $this->db->get_compiled_select();
		// $this->db->select('p.*,sum(pp.received_quantity) as stock,o.orders, pr.store_id')
		// 		 ->from('product p')
		// 		 ->join('requisition_product pp','p.id = pp.product_id')
		// 		 ->join('requisition pr','pr.id = pp.requisition_id')
		// 		 ->join('product_release_product prp','pp.product_id = p.id', 'left')
		// 		 ->join('product_release pu','pu.id = prp.product_release_id and pu.Status = "Complete" and pu.Store = pr.store_id','left')
		// 		 ->join('('.$orders.') o', 'o.product_id = p.id and o.store_id = pr.store_id', 'left')
		// 		 ->group_by('p.id')
		// 		 ->having('stock > 0 and orders < stock');
		$this->db->select('sum(p.received_quantity) as orders,p.product_id, pr.store_id')
				 ->from('requisition_product p')
				 ->join('requisition pr','pr.id = p.requisition_id')
				 ->where('pr.status','Complete')
				 //->where('pr.store_id',$id)
				 ->group_by('p.product_id');
		$order = $this->db->get_compiled_select();
		$this->db->select('p.id,p.Product_Name,p.size,p.gramage,p.Product_Cost,sum(pp.received_quantity) as stock,o.orders, pu.Store as store_id,p.Sub_Category,p.Category')
				 ->from('product p')
				 ->join('product_release_product pp','pp.product_id = p.id', 'left')
				 ->join('product_release pu','pu.id = pp.product_release_id and Status = "Complete"','left')
				 ->join('('.$order.') o', 'o.product_id = p.id and o.store_id = pu.Store', 'left')
				 //->where('pu.Store',$id)
				 ->group_by('p.id');
		$products = $this->db->get_compiled_select();		 

		$this->db->select('sum(p.received_quantity) as orders,p.product_id,pr.store_id')
				 ->from('requisition_product p')
				 ->join('requisition pr','pr.id = p.requisition_id')
				 ->where('pr.status','Complete')
				 ->group_by(array('p.product_id','pr.store_id'));
		$order = $this->db->get_compiled_select();
		$this->db->select('p.Product_Name,p.Product_Unit,pp.quantity,pp.id,pp.received_quantity,sum(pp.received_quantity) as stock,o.orders, group_concat(distinct concat(ps.stock, ":"), concat(ps.orders, ":"), concat(ps.id, ":"), concat(ps.Product_Name, ":"),ps.Product_Cost) as products,p.id as product_id,pp.remarks') 
				 ->from('requisition_product pp')
				 ->join('requisition pr','pr.id = pp.requisition_id')
				 ->join('product p','p.id = pp.product_id')
				 ->join('product_release_product prp','pp.product_id = p.id', 'left')
				 ->join('product_release pu','pu.id = prp.product_release_id and pu.Status = "Complete" and pu.Store = pr.store_id','left')
				 ->join('('.$order.') o', 'o.product_id = p.id and o.store_id = pr.store_id', 'left')
				 ->join('('.$products.') ps', 'ps.store_id = pr.store_id and p.Sub_Category = ps.Sub_Category and p.Category = ps.Category', 'left')
				 ->where('pp.requisition_id',$id)
				 ->group_by('pp.id');
		return $this->db->get()->result_array();
	}

	public function get_all_orders($id,$type)
	{
		$this->db->select('p.Product_Name,pp.quantity,pp.id,pp.received_quantity,s.Name,r.status')
				 ->from('requisition_product pp')
				 ->join('requisition r','r.id = pp.requisition_id')
				 ->join('sub_store s', 's.id = r.store_id')
				 ->join('product p','p.id = pp.product_id')
				 ->where('r.wo_id',$id)
				 ->where('r.type',$type)
				 ->group_by('pp.id');
		return $this->db->get()->result_array();
	}
}