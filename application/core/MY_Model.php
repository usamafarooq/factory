<?php

class MY_Model extends CI_Model
{
    public function all_rows($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function get_row_single($table,$where)
    {
        return $this->db->get_where($table,$where)->row_array();
    }

    public function get_rows($table,$where)
    {
        return $this->db->get_where($table,$where)->result_array();
    }

    public function insert($table,$data)
    {
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }

    public function update($table,$data,$where)
    {
        $this->db->update($table,$data,$where);
        return $this->db->affected_rows();
    }

    public function delete($table,$where)
    {
        $this->db->delete($table,$where); 
    }

    public function insert_batch($table,$data)
    {
        $this->db->insert_batch( $table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function query($query)
    {
        return $this->db->query($query);
    }

    public function query_result($query)
    {
        return $this->db->query($query)->result_array();
    }

    public function query_single_result($query)
    {
        return $this->db->query($query)->row_array();
    }



    public function view_scm_code_ckeck($column,$data,$table_data)
    {
        $query = 'SELECT * FROM '.$table_data.' WHERE LTRIM('.$column.') = '.$data;
        return $this->query_single_result($query);

    }


    public function get_flow($name,$table=null,$id=null)
    {
        $this->db->select('MAX(id),status,wo_id')
                 ->from('requisition')
                 ->where('type',$name)
                 ->group_by(array('type','wo_id'));
        $status = $this->db->get_compiled_select();
        $this->db->select('ff.id as last')
                 ->from('production_flow ff')
                 ->where('ff.plane_id = p.id')
                 ->order_by('ff.id','desc')
                 //->where('ff.id = f.id')
                 ->limit(1,1);
        $last = $this->db->get_compiled_select();
        $this->db->select('count(d.id) as d_id, d.wo_id')
                 ->from('delivery_challan d')
                 ->group_by('d.wo_id');
        $challan = $this->db->get_compiled_select();
        $this->db->select('p.id,p.WO_no,p.Job_Description,p.Quantity,f.start_date,f.end_date,f.parent_id,(CASE WHEN f.parent_id != 0 THEN pf.id ELSE 0 END) as parent, f.id as flow_id, count(ofs.id) as con, COUNT(off.id) as submit,(CASE WHEN s.status IS NULL THEN "Not initialized" ELSE s.status END) as status, ('.$last.') as last, f.id as flows_id, count(br.id) as batch, d.d_id');
        $this->db->from('production_plan p')
                 ->join('production_flow f', 'f.plane_id = p.id')
                 ->join('flows fl', 'fl.id = f.type')
                 ->join('production_flow pf', ' f.parent_id = (CASE WHEN f.parent_id != 0 THEN pf.type ELSE 0 END) and pf.plane_id = f.plane_id', 'left')
                 ->join('order_flow_submission of', 'pf.id = of.flow_id', 'left')
                 ->join('order_flow_submission off', 'f.id = off.flow_id', 'left')
                 ->join('order_flow_start ofs', 'f.id = ofs.flow_id', 'left')
                 ->join('batch_release br','br.wo_id = p.WO_no and br.flow_id = f.id','left')
                 ->join('('.$status.') s', 's.wo_id = p.WO_no', 'left')
                 ->join('('.$challan.') d', 'd.wo_id = p.WO_no', 'left');
        // if ($table != null && $table != 'null') {
        //     $this->db->join($table.' s', 's.plane_id = p.id', 'left');
        // }
        $this->db->where('fl.Name', $name)
                 ->group_by('p.id')
                 ->having('COUNT(of.id) >= (CASE WHEN f.parent_id != 0 THEN 1 ELSE 0 END)');
        if ($id != null) {
            $this->db->where('p.user_id', $id);
        }
        return $this->db->get()->result_array();
    }

    public function get_qc_flow($id)
    {
        $this->db->select('fl.Name,f.start_date,f.end_date,p.WO_no,p.Job_Description,count(off.id) as submit,count(ofs.id) as start, pf.Name as parent,f.id, count(lc.id) as clearance')
                 ->from('production_plan p')
                 ->join('production_flow f', 'f.plane_id = p.id')
                 ->join('line_clearance lc', 'lc.flow_id = f.id', 'left')
                 ->join('flows fl', 'fl.id = f.type')
                 ->join('flows pf', 'pf.id = f.parent_id', 'left')
                 ->join('order_flow_submission off', 'f.id = off.flow_id', 'left')
                 ->join('order_flow_start ofs', 'f.id = ofs.flow_id', 'left')
                 ->group_by('f.id')
                 ->where('p.WO_no', $id);
        return $this->db->get()->result_array();
    }

    public function get_wo_id_by_flow($id)
    {
        $this->db->select('pp.WO_no as id')
                 ->from('production_flow pf')
                 ->join('production_plan pp', 'pp.id = pf.plane_id')
                 ->where('pf.id',$id);
        return $this->db->get()->row_array();
    }

}