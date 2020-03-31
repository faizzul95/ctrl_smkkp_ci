<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('User_level_model');
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


    public function checkAuthorization(){

    	$this->_rules();

        if ($this->form_validation->run() == FALSE) {
            // $this->index();
            $username  = $this->input->post('username',TRUE);
            $enteredPassword = $this->input->post('password', TRUE);

            $data = array(
                // 'username' => set_value('username'),
                // 'password' => set_value('password'),
                'username' => set_value('username', $this->input->post('username',TRUE)),
				'password' => set_value('password', $this->input->post('password',TRUE)),
            );

            $this->load->view('auth/login', $data);
        } else 
        { 
            $username  = $this->input->post('username',TRUE);
            $enteredPassword = $this->input->post('password', TRUE);

            $validate = $this->User_model->validate($username);
            if($validate->num_rows() > 0){
                $data  = $validate->row_array();
                $id  = $data['user_id'];
                $username  = $data['user_username'];
                $email = $data['user_email'];
                $fullname  = $data['user_fullname'];
                // $token_remember = $data['user_remember_token'];
                $role_id = $data['role_id'];
                $school_id = $data['school_id'];
                $user_password = $data['user_password']; 
                $avatar = $data['user_avatar'];
                $status = $data['user_status'];

                // get session level name
                $userlvlDetail = $this->User_level_model->get_session_data($role_id);
                $row = $userlvlDetail->row_array();
                $roleName = $row['role_name'];

                if (password_verify($enteredPassword, $user_password)) { 
                        if ($status == "active") {
                            $sesdata = array(
                            'userfname'  => $fullname,
                            'userid'  => $id,
                            'roleid'=> $role_id,
                            'schoolid'=> $school_id,
                            'rolename'=> $roleName,
                            'useravatar'=> $avatar,
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata($sesdata);
                         	redirect('dashboard');
                        }elseif($status == "inactive"){
                            echo $this->session->set_flashdata('login_error_message','Your ID is inactive, Please contact administrator');
                            redirect('auth');
                        }else{
                             redirect('auth');
                        }
                }else{
                    echo $this->session->set_flashdata('login_error_message','Pengesahan tidak berjaya, Sila cuba lagi');
                    redirect('auth');
                }
            }else{
                echo $this->session->set_flashdata('login_error_message','Pengesahan tidak berjaya, Sila cuba lagi');
                redirect('auth');
            }
        }
    }

    function logout() {
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