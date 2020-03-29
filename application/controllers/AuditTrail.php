<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuditTrail extends CI_Controller {

	function __construct(){
	    parent::__construct();
	    $this->load->model('AuditTrail_model');
	}

    public function index()
    {
        check_login();
        $data['userLog'] = $this->db->order_by('created_at', 'DESC')->get('user_audit_trails')->result();
        $this->session->set_flashdata('typeAction', 'Lihat Audit Trail'); // set for user logs
        $this->session->set_flashdata('current_page','audittrail'); // set for active sidebar
        $this->load->view('auditTrail/audittrail_list', $data);
    }

	public function userlog()
    {
        check_login();
        $data['userLog'] = $this->db->order_by('REQUEST_TIME', 'DESC')->get('schema_user_logs')->result();
        $this->session->set_flashdata('typeAction', 'Lihat Log Pengguna'); // set for user logs
        $this->session->set_flashdata('current_page','userlog'); // set for active sidebar
        $this->load->view('auditTrail/user_log_list', $data);
    }

    public function systemLog()
    {
        check_login();
        $data['systemLog'] = $this->db->order_by('time', 'DESC')->get('schema_system_logs')->result();
        $this->session->set_flashdata('typeAction', 'Lihat Log Sistem'); // set for user logs
        $this->session->set_flashdata('current_page','systemlog'); // set for active sidebar
        $this->load->view('auditTrail/system_log_list', $data);
    }


    public function delete_log_record_user() 
    {
        check_login();
        $condition = $this->input->post('delete_from',TRUE);

        $this->db->where($REQUEST_TIME, $condition);
        $this->db->delete($userlog);

        $this->session->set_flashdata('typeAction', 'Clear User Log Record');
        $this->session->set_flashdata('message', 'Log Record Clear');
        redirect(site_url('auditTrail/systemLog'));
       
    }

    public function delete_log_record_system() 
    {
        check_login();
        $condition = $this->input->post('delete_from',TRUE);

        $this->db->where($time, $condition);
        $this->db->delete($system_logs);

        $this->session->set_flashdata('typeAction', 'Clear User Log Record');
        $this->session->set_flashdata('message', 'Log Record Clear');
        redirect(site_url('auditTrail/systemLog'));
    }


    // clear userlog log
    public function today_userLogs() 
    {
        check_login();
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $todayDate = date('Y-m-d');
        $lastDate = date('Y-m-d H:i:s', strtotime($todayDate . ' -1 day'));

        $this->db->where('REQUEST_TIME >', $lastDate);
        $this->db->delete('schema_user_logs');

        $this->session->set_flashdata('typeAction', 'Clear User Log Record');
        $this->session->set_flashdata('message', 'Log Record Clear');
        redirect(site_url('auditTrail/userlog'));
    }

    public function all_userLogs() 
    {
        check_login();
        $this->db->truncate('schema_user_logs'); // truncate table
        $this->session->set_flashdata('typeAction', 'Clear All User Log Record');
        $this->session->set_flashdata('message', 'Log Record Clear');

        redirect(site_url('auditTrail/userlog'));
    }

    // clear userlog log
    public function today_systemLogs() 
    {
        check_login();
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $todayDate = date('Y-m-d H:i:s');
        $lastDate = date('Y-m-d H:i:s', strtotime($todayDate . '-1 day'));


        // $datetime1 = new DateTime(); // get last day date
        // $datetime1->modify('-1 day');
        // $datetime2 = new DateTime();// get today date
        // $interval = $datetime1->diff($datetime2);
        // $reformat = $interval->format('%R%a days'); 

        // var_dump($reformat);die;

        $this->db->where('time >', $lastDate);
        $this->db->delete('schema_user_logs');

        $this->session->set_flashdata('typeAction', 'Clear System Log Record');
        $this->session->set_flashdata('message', 'Log Record Clear');
        redirect(site_url('auditTrail/systemLog'));
    }

    public function all_systemLogs() 
    {
        check_login();
        $this->db->truncate('schema_user_logs'); // truncate table
        $this->session->set_flashdata('typeAction', 'Clear All Systen Log Record');
        $this->session->set_flashdata('message', 'Log Record Clear');

        redirect(site_url('auditTrail/systemLog'));
    }

    // public function get_data() 
    // {
    //     // check_login();
    //    	$id = $this->input->get('id');
	   //  $get_audittral_data = $this->AuditTrail_model->get_data($id);
	   //  echo json_encode($get_audittral_data); 
	   //  exit();
    // }

    public function get_data()
    {
        // $id = $this->input->post('id');
        $this->AuditTrail_model->get_data_audit($this->input->post('id'));  
    }

	
}