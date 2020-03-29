<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event_model extends CI_Model
{

    public $table = 'event';
    public $id = 'event_code';
    public $sessionCode = 'event_code_scan_session';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // display activity in dashboard
    function displayActivityDashboard() {
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $currentDate = date('Y-m-d');
        $this->datatables->select('event_code,event_name,start_date,end_date,start_time,end_time,event_venue,event_categories,num_participant,num_session,organizer_id,status_event,semester_session_name');
        $this->datatables->from('event');
        $this->datatables->where('event.end_date >=', $currentDate);
        
        $this->datatables->add_column('action', 
                anchor(site_url('event/get_detail/$1'),'<i class="fa fa-eye" aria-hidden="true"></i> View', array('class' => 'btn btn-success btn-sm view_event_detail')), 'event_code');
        return $this->datatables->generate();
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

    // get data by id for session
    function get_session_data($id)
    {
        $this->db->where($this->id, $id);
        $result = $this->db->get($this->table,1);
        return $result;
    }

    // get data by id for scan session
    function get_scan_session_data($sessionCode)
    {
        $this->db->where($this->sessionCode, $sessionCode);
        $result = $this->db->get($this->table,1);
        return $result;
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('event_code', $q);
    	$this->db->or_like('event_name', $q);
    	$this->db->or_like('start_date', $q);
    	$this->db->or_like('end_date', $q);
    	$this->db->or_like('start_time', $q);
    	$this->db->or_like('end_time', $q);
    	$this->db->or_like('event_venue', $q);
    	$this->db->or_like('event_categories', $q);
    	$this->db->or_like('num_participant', $q);
    	$this->db->or_like('num_session', $q);
    	$this->db->or_like('organizer_id', $q);
        $this->db->or_like('register_by', $q);
    	$this->db->or_like('status_event', $q);
        $this->db->or_like('status_reopen_attendance', $q);
    	$this->db->or_like('semester_session_name', $q);
    	$this->db->from($this->table);
        return $this->db->count_all_results();
    } 

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('event_code', $q);
    	$this->db->or_like('event_name', $q);
    	$this->db->or_like('start_date', $q);
    	$this->db->or_like('end_date', $q);
    	$this->db->or_like('start_time', $q);
    	$this->db->or_like('end_time', $q);
    	$this->db->or_like('event_venue', $q);
    	$this->db->or_like('event_categories', $q);
    	$this->db->or_like('num_participant', $q);
    	$this->db->or_like('num_session', $q);
    	$this->db->or_like('organizer_id', $q);
        $this->db->or_like('register_by', $q);
    	$this->db->or_like('status_event', $q);
        $this->db->or_like('status_reopen_attendance', $q);
    	$this->db->or_like('semester_session_name', $q);
    	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
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

    public function get_detail($eventDetail)
    {
        $params = array('event_code'=>$eventDetail);
        $data['event'] = $this->db->get_where('event',$params)->result();
        $this->load->view('event/event_detail_view', $data);
    }

}