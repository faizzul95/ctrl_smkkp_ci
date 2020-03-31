<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_level_model extends CI_Model
{

    public $table = 'schema_user_role';
    public $id = 'role_id';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        // $this->datatables->select('id_user_level,level_name');
        // $this->datatables->from('user_level');
        // // $this->datatables->where('id_user_level !=', '5');
        // //add this line for join
        // //$this->datatables->join('table2', 'user_level.field = table2.field');
        
        // $this->datatables->add_column('action', 
        //         anchor(site_url('user_level/access/$1'),'<i class="fa fa-eye" aria-hidden="true"></i> View Access', array('class' => 'btn btn-success btn-sm')).
        //         " | "
        //         .anchor(site_url('user_level/update/$1'),'<i class="mdi mdi-lead-pencil" aria-hidden="true"></i> Update', array('class' => 'btn btn-cyan btn-sm')).
        //         " | "
        //         .anchor(site_url('user_level/delete/$1'),'<i class="mdi mdi-delete-forever" aria-hidden="true"></i> Delete', array('class' => 'btn btn-danger btn-sm delete-btn')), 'id_user_level');
        // return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('role_id', $q);
		$this->db->or_like('role_name', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('role_id', $q);
		$this->db->or_like('role_name', $q);
		$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // get data by id for level
    function get_session_data($id)
    {
        $this->db->where($this->id, $id);
        $result = $this->db->get($this->table,1);
        return $result;
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}