<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        // $this->load->model('User_level_model');
        $this->load->library('session');
        $this->load->library('form_validation');   
    }
    
    public function index(){

        //restrict users to go back to login if session has been set
        if($this->session->userdata('userid')){
            redirect('dashboard');
        }
        else{
            // $this->load->view('auth/login');
            $data = array(
                'username' => set_value('username'),
                'password' => set_value('password'),
            );

            $this->load->view('auth/login', $data);
        }
    }

    public function forgot_password(){
       $this->load->view('auth/forgot_password');
    }

    public function register(){
         //load session library
        $this->load->library('session');

        //restrict users to go back to login if session has been set
        if($this->session->userdata('userid')){
            redirect('dasboard');
        }
        else{
             $this->load->view('auth/register');
        }
    }

    public function checkAuthorization(){

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            date_default_timezone_set("Asia/Kuala_Lumpur"); // set timezone to Kuala Lumpur
            $currentDate = date('Y-m-d'); // get current date

            $userType = $this->input->post('type',TRUE);
            $remember = $this->input->post('rememberME',TRUE);

            $username  = $this->input->post('username',TRUE);
            $enteredPassword = $this->input->post('password', TRUE);

            // get current semester session
            $detailSemester = $this->db->get_where('semester_session_settings',array('semester_status'=>'ACTIVE'));
            $row = $detailSemester->row_array();
            $semesterSession = $row['semester_session_name'];
            $semesterEnd = $row['semester_session_end'];

            $semesterExpired = FALSE; // set default semester setting to false

            if ($semesterEnd < $currentDate) {
                $semesterExpired = TRUE; // if true means semester already expired, need to register new semester
            }

            if ($remember) {
               $rememberMe = 1; // remember me is tick
            }else{
               $rememberMe = 0; // remember me is untick
            }

            $validate = $this->User_model->validate($username);
                if($validate->num_rows() > 0){
                    $data  = $validate->row_array();
                    $id  = $data['user_id'];
                    $name  = $data['usr_username'];
                    $current_password = $data['usr_password'];
                    $level = $data['id_user_level'];
                    $status = $data['usr_status'];
                    $lastLogin = $data['last_login'];                

                    if($level == '3') { // for srk login
                        $detailOrganizer = $this->Srk_model->get_session_data($name);
                        $row  = $detailOrganizer->row_array();
                        $fname = $row['srk_fullname'];
                        $collegeID = $row['college_id'];
                    }

                    // get session level name
                    $userlvlDetail = $this->User_level_model->get_session_data($level);
                    $row = $userlvlDetail->row_array();
                    $levelName = $row['level_name'];

                    if (password_verify($enteredPassword, $current_password)) { 
                            if ($status == "active") {
                                $sesdata = array(
                                'userfname'  => $fname,
                                'userid'  => $id,
                                'matricID'=> $name,
                                'level'=> $level,
                                'levelName'=> $levelName,
                                'masterLevel'=> $masterLevel, // use for change account otherwise will be blank
                                'collegeID'=> $collegeID, // use for srk only otherwise will be blank
                                'rememberSession'=> $rememberMe,
                                'semesterSession'=> $semesterSession,
                                'semesterExpiredChecK'=> $semesterExpired, // check semester session
                                'logged_in' => TRUE
                            );
                            $this->session->set_userdata($sesdata);
                                // log login time
                                $loginTimestamp = array( 
                                    'login_at' => date('Y-m-d H:i:s')
                                );
                                $this->User_model->update($name, $loginTimestamp);

                                if (empty($lastLogin) AND $masterLevel == 5) {
                                    echo $this->session->set_flashdata('msg','First time login');
                                }
                                redirect('dashboard');

                            }elseif($status == "inactive"){
                                echo $this->session->set_flashdata('msg','Your ID is inactive, Please contact college administrator');
                                redirect('auth');
                            }else{
                                 redirect('auth');
                            }
                    }else{
                        echo $this->session->set_flashdata('msg','Authentication failed, Please Try Again');
                        redirect('auth');
                    }
                }else{
                    echo $this->session->set_flashdata('msg','Authentication failed, Please Try Again');
                    redirect('auth');
                }

        }
    }

    function logout(){
        // $idLogin = $this->session->userdata('userid');

        // log logout time
        // $logoutTimestamp = array( 
        //     'last_login' => date('Y-m-d H:i:s')
        // );
        // $this->User_model->update($idLogin, $logoutTimestamp);

        // add user log
        // $request_time = date('Y-m-d H:i:s');
        // $http_user_agent = $_SERVER['HTTP_USER_AGENT']; 

        // $data = array(
        //     'user_id' => $idLogin,
        //     'ROUTE' => current_url(),
        //     'IP_ADDRESS' => $this->input->ip_address(),
        //     'TYPE' => 'logout',
        //     'REQUEST_TIME' => $request_time,
        //     'HTTP_USER_AGENT' => $http_user_agent,
        // );

        // $this->db->insert('userlog', $data);

        session_unset();
        $this->session->sess_destroy();
        redirect('auth');
    }

    function blockpage(){
        $this->load->view('errors/html/error_403');
    }

    public function _rules() 
    {
        $this->form_validation->set_rules('username', 'ID Pengguna', 'trim|required');
        $this->form_validation->set_rules('password', 'Kata laluan', 'trim|required');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }


}