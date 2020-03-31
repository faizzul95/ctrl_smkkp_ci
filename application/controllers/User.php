<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
		$this->load->helper('file');
		$this->load->helper('string');
    }

    public function index()
    {
    	check_login();
    	if ($this->session->userdata('roleid') == 1) // for superadmin view
    	{
    		$params = array('role_id !='=>5,'role_id !='=>4,'role_id !='=>3);
   			$data['userDetails'] = $this->db->order_by('role_id', 'ASC')->get_where('user',$params)->result();
    	}
    	else // for admin view
    	{
    		$school_id = $this->session->userdata('schoolid'); // get school ID session
    		$params = array('role_id !='=>1, 'school_id'=>$school_id);
   			$data['userDetails'] = $this->db->order_by('role_id', 'ASC')->get_where('user',$params)->result();
    	}

    	if (!empty($_GET['delete'])) {
    		$this->session->set_flashdata('success_message', 'Rekod Berjaya Dihapuskan');
    		echo "<script type='text/javascript'>";
    		echo "window.location.href = window.location.href.replace( /[\?#].*|$/, '' );"; // remove get
    		echo "</script>";
    	}
    	
        $this->session->set_flashdata('current_page','senarai pengguna'); // set for active sidebar
        $this->session->set_flashdata('typeAction','lihat senarai pengguna'); // set for user logs
        $this->load->view('user/user_list',$data);
    } 

    public function profile()
    {
    	check_login();

    	$userID = $this->session->userdata('userid'); // get user ID from session

    	if (!empty($this->uri->segment('3'))) {
    		$this->session->set_flashdata('tab', 'tab2'); // set tab tu maklumat akaun
    		redirect(site_url('user/profile'));
    	}
    	
    	$id = $this->session->flashdata('tab');

        $row = $this->User_model->get_by_id($userID);

        if ($row) {
            $data = array(
				'user_id' => set_value('user_id', $row->user_id),
				'user_fullname' => set_value('user_fullname', $row->user_fullname),
				'user_username' => set_value('user_username', $row->user_username),
				'user_email' => set_value('user_email', $row->user_email),
				'user_password' => set_value('user_password', $row->user_password),
				'role_id' => set_value('role_id', $row->role_id),
				'school_id' => set_value('school_id', $row->school_id),
				'user_status' => set_value('user_status', $row->user_status),
				'user_avatar' => set_value('user_status', $row->user_avatar),
				'tabNo' => $id,
	    	);

        	$this->load->view('user/user_profile', $data);
       }

    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->User_model->json();
    }

    public function read($id) 
    {
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
			'user_id' => $row->user_id,
			'user_username' => $row->user_username,
			'user_fullname' => $row->user_fullname,
			'user_email' => $row->user_email,
			'user_password' => $row->user_password,
			'role_id' => $row->role_id,
			'school_id' => $row->school_id,
			'user_avatar' => $row->user_avatar,
	    );
            $this->load->view('user/user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Rekod Tidak Ditemui');
            redirect(site_url('user'));
        }
    }

    public function create() 
    {
    	check_login();
        $data = array(
            'pagename' => 'Borang Pendaftaran Pengguna',
            'button' => 'Daftar Pengguna',
            'action' => site_url('user/create_action'),
			'user_id' => set_value('user_id'),
			'user_username' => set_value('user_username'),
			'user_fullname' => set_value('user_fullname'),
			'user_email' => set_value('user_email'),
			'user_password' => set_value('user_password',random_string('alnum',8)),
			'role_id' => set_value('role_id'),
			'school_id' => set_value('school_id'),
	);
        $this->session->set_flashdata('current_page','pendaftaran pengguna');
        $this->load->view('user/user_form', $data);
    }
    
   
	public function create_action() 
    {

        $this->_rules();

        $this->form_validation->set_message('is_unique', 'Email telah digunakan');
        $this->form_validation->set_rules('user_email', 'email', 'trim|required|valid_email|min_length[5]|max_length[35]|is_unique[user.user_email]');

        $roleID = $this->input->post('role_id',TRUE);

        // superadmin register for admin
        if ($roleID != '' && $roleID != '1') {
        	$this->form_validation->set_rules('school_id', 'sekolah', 'trim|required');
        }


        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
        	
	        // create user user login
            $enterpassword = $this->input->post('user_password',TRUE);
            $hashpassword = password_hash($enterpassword,PASSWORD_DEFAULT); // hash password

            $userData = array( 
                'user_username' => $this->input->post('user_username',TRUE),
                'user_fullname' => ucwords($this->input->post('user_fullname',TRUE)),
				'user_email' => $this->input->post('user_email',TRUE),
				'user_password' => $hashpassword,
				'role_id' => $this->input->post('role_id',TRUE),
				'school_id' => $this->input->post('school_id',TRUE),
				'user_avatar' => 'default/user.jpg',
				'user_status' => 'active',
				'created_at' => date('Y-m-d H:i:s'),
            );

            // setting for email
            $config = Array(
              // 'smtp_crypto'=>'ssl', //add this one
              'protocol' => 'smtp',
              'smtp_host' => 'ssl://smtp.googlemail.com',
              'smtp_port' => 465,
              'smtp_user' => 'arcasystem.uitm@gmail.com', 
              'smtp_pass' => 'arca@Admin', 
              'charset' => 'iso-8859-1',
              'newline' => "\r\n",
              'wordwrap' => TRUE
            );
               
            $subject = 'Pendaftaran Pengguna Sistem Maklumat Pelajar';

            $emailSend = $this->input->post('user_email',TRUE);

            $mailData = array( 
                'user_username' => $this->input->post('user_username',TRUE),
                'user_fullname' => ucwords($this->input->post('user_fullname',TRUE)),
				'user_email' => $emailSend,
				'user_password' => $enterpassword,
				'role_id' => $this->input->post('role_id',TRUE),
            );

            $this->load->library('email', $config);
            $this->email->set_header('MIME-Version', '1.0');
            $this->email->set_header('From', 'SMP SMK Kinarut Papar <no-reply@gmail.com>');
            $this->email->set_mailtype("html");
            $this->email->from('arcasystem.uitm@gmail.com', 'SMP SMK Kinarut Papar');
            $this->email->to($emailSend);
            $this->email->subject($subject);

            $body = $this->load->view('user/registration_email.php',$mailData,TRUE);
            $this->email->message($body); 

            if(!$this->email->send())
            {
                show_error($this->email->print_debugger());
            }else{
	            $this->User_model->insert($userData);
	            // $this->session->set_flashdata('message', 'Pengguna berjaya didaftarkan');
				$this->session->set_flashdata('success_message','Pendaftaran Berjaya');
	            redirect(site_url('User'));
            }
        }
    }

    public function update($id) 
    {
    	check_login();
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'pagename' => 'Kemaskini Pengguna',
                'button' => 'Kemaskini Pengguna',
                'action' => site_url('user/update_action'),
				'user_id' => set_value('user_id', $row->user_id),
				'user_fullname' => set_value('user_fullname', $row->user_fullname),
				'user_email' => set_value('user_email', $row->user_email),
				'user_password' => set_value('user_password', $row->user_password),
				'role_id' => set_value('role_id', $row->role_id),
				'school_id' => set_value('school_id', $row->school_id),
				'user_status' => set_value('user_status', $row->user_status),
	    );
             $this->load->view('user/user_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Rekod Tidak Ditemui');
            redirect(site_url('user'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        $roleID = $this->input->post('role_id',TRUE);
        $EnteremailUser =  $this->input->post('user_email',TRUE);

        $getUser = $this->User_model->get_session_data($this->input->post('user_id', TRUE));
        $row  = $getUser->row_array();
        $DBEmail = $row['user_email']; // get db email to compare

        if ($EnteremailUser != $DBEmail) {
	        $this->form_validation->set_message('is_unique', 'Email telah digunakan. Sila masukkan email yang berbeza.');
	        $this->form_validation->set_rules('user_email', 'email', 'trim|required|valid_email|min_length[5]|max_length[35]|is_unique[user.user_email]');
        }

        // superadmin register for admin
        if ($roleID != '' && $roleID != '1') {
        	$this->form_validation->set_rules('school_id', 'sekolah', 'trim|required');
        }

        if ($roleID == '1') {
        	$schoolID = NULL; // if role id is 1 or super admin. remove school id
        }else{
        	$schoolID = $this->input->post('school_id',TRUE);
        }

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('user_id', TRUE));
        } else {
            $data = array(
            	'user_fullname' => ucwords($this->input->post('user_fullname',TRUE)),
				'user_email' => $this->input->post('user_email',TRUE),
				'user_password' => $this->input->post('user_password',TRUE),
				'role_id' => $roleID,
				'school_id' => $schoolID,
				'user_status' => $this->input->post('user_status',TRUE),
				'updated_at' => date('Y-m-d H:i:s'),
	    );

            $this->User_model->update($this->input->post('user_id', TRUE), $data);
            $this->session->set_flashdata('success_message', 'Rekod berjaya dikemaskini');
            redirect(site_url('user'));
        }
    }

    public function update_user_profile() 
    {

        $userID = $this->session->userdata('userid'); // get user ID from session
        $userFName = ucwords($this->input->post('user_fullname',TRUE));
        $EnteremailUser =  $this->input->post('user_email',TRUE);
        $phoneNo =  $this->input->post('user_phone_no',TRUE);

        $this->form_validation->set_rules('user_fullname', 'nama pengguna', 'trim|required|min_length[5]|max_length[50]');

        $getUser = $this->User_model->get_session_data($userID);
        $row  = $getUser->row_array();
        $DBEmail = $row['user_email']; // get db email to compare

        if ($EnteremailUser != $DBEmail) {
	        $this->form_validation->set_message('is_unique', 'Email telah digunakan. Sila masukkan email yang berbeza.');
	        $this->form_validation->set_rules('user_email', 'email', 'trim|valid_email|min_length[5]|max_length[45]|is_unique[user.user_email]');
        }

        if ($this->form_validation->run() == FALSE) {
            $this->profile();
        } else {
            $data = array(
            	'user_fullname' => $userFName,
				'user_email' => $this->input->post('user_email',TRUE),
				'updated_at' => date('Y-m-d H:i:s'),
	    	);

	    	// set new user full name session
	        $this->session->set_userdata('userfname', $userFName);

            $this->User_model->update($userID, $data);
            $this->session->set_flashdata('success_message', 'Rekod berjaya dikemaskini');
            redirect(site_url('User/profile'));
        }
    }
    
    public function delete() 
    {
    	$id = $this->input->post('id',TRUE);
        $row = $this->User_model->get_by_id($id);

        if ($row) {
        	if ($this->User_model->delete($id)) {
        		$this->session->set_flashdata('success_message', 'Rekod Berjaya Dihapuskan');
            	redirect(site_url('user'));
        	}else{
        		$this->session->set_flashdata('err_message', 'Ralat ! Rekod tidak berjaya dihapuskan');
            	redirect(site_url('user'));
        	}
            
        } else {
            $this->session->set_flashdata('err_message', 'Rekod Tidak Ditemui');
            redirect(site_url('user'));
        }
    }

    // use by user to update profile
    public function update_user_image_profile() 
    {

		$this->form_validation->set_rules('user_avatar', '', 'callback_file_check');

        if ($this->form_validation->run() == FALSE) {
            // $this->session->set_flashdata('err_message', 'Ralat memuat naik gambar : <br> Sila pilih gambar berformat jpeg/jpg/png sahaja.');
	        $this->profile();
	        // redirect(site_url('user/profile'));
        } else {
        	$config['image_library']='gd2';
        	$config['upload_path'] = 'vendor/user_avatar';
	        $config['allowed_types'] = 'jpeg|jpg|png';
	        $config['max_size'] = 4000;
	        $config['max_width'] = 2500;
	        $config['max_height'] = 2500;
	        $config['remove_spaces'] = TRUE;
           	$config['encrypt_name'] = TRUE;
           	$config['maintain_ratio']= FALSE;
            $config['quality']= '50%';
            $config['create_thumb']= TRUE;

	        $this->load->library('upload', $config);

	        if (!$this->upload->do_upload('user_avatar')) {
	            $errorType = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata('err_message', 'Ralat Memuat naik gambar :'. $errorType['error']);
	            // $this->profile();
	            redirect(site_url('user/profile'));
	        } else {

                $data = array( 
					'user_avatar' => $this->upload->data('file_name'),
					'updated_at ' => date('Y-m-d H:i:s'),
                );

                $userID = $this->session->userdata('userid'); // get user ID from session

                $getUser = $this->User_model->get_session_data($userID);
	            $row = $getUser->row_array();
	            $oldImageName = $row['user_avatar'];

	            if ($oldImageName != "default/user.jpg") {
	            	unlink("vendor/user_avatar/".$oldImageName);
	            }

	            // set new user avatar session
	            $this->session->set_userdata('useravatar', $this->upload->data('file_name'));

                $this->User_model->update($userID , $data);
            	$this->session->set_flashdata('success_message', 'Profil Gambar Dikemaskini');
                redirect(site_url('User/profile'));
			}
        }
    }

    // use by user to update id or password
    public function update_user_id_password() 
    {

    	$enteruname = $this->input->post('user_username',TRUE);
    	$enternewpassword = $this->input->post('user_new_password',TRUE);

    	$userID = $this->session->userdata('userid'); // get user ID from session

        if (!empty($enternewpassword)) {
            $this->session->set_flashdata('tab', 'tab2');
        	$this->form_validation->set_rules('user_new_password', 'kata laluan baharu', 'trim');
        	$this->form_validation->set_rules('confirm_password', 'ulangan kata laluan', 'required|matches[user_new_password]');
        }

        $this->form_validation->set_rules('user_username', 'id pengguna', 'trim');
      
        if ($this->form_validation->run() == FALSE) {
            // $this->session->set_flashdata('err_message', 'Kemaskini Tidak Berjaya');
	        // redirect(site_url('user/profile'));
	        $this->profile();
        } else {

	        if (!empty($enternewpassword)) {
	        	$hashpassword = password_hash($enternewpassword,PASSWORD_DEFAULT); // hash password

	        	 $data = array(
	            	'user_username' => $enteruname,
					'user_password' => $hashpassword,
					'updated_at' => date('Y-m-d H:i:s'),
		    	);
	        }else{
	        	 $data = array(
	            	'user_username' => $enteruname,
					'updated_at' => date('Y-m-d H:i:s'),
		    	);
	        }

            $this->User_model->update($userID, $data);
            $this->session->set_flashdata('tab', 'tab2');
	        $this->session->set_flashdata('success_message', 'Maklumat Log Masuk Dikemaskini');
	        redirect(site_url('user/profile'));
        }
    }

    public function _rules() 
    {
    	$this->form_validation->set_rules('user_fullname', 'nama pengguna', 'trim|required');
		$this->form_validation->set_rules('user_username', 'ID pekerja', 'trim');
		$this->form_validation->set_rules('user_email', 'email', 'trim|required');
		$this->form_validation->set_rules('user_password', 'katalaluan', 'trim|required');
		$this->form_validation->set_rules('role_id', 'peranan', 'trim|required');

		$this->form_validation->set_rules('user_id', 'user_id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    // check file upload
    public function file_check($str){
        $allowed_mime_type_arr = array('image/jpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['user_avatar']['name']);
        if(isset($_FILES['user_avatar']['name']) && $_FILES['user_avatar']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
            	// $this->session->set_flashdata('err_message', 'Sila pilih gambar berformat jpeg/jpg/png sahaja.');
                $this->form_validation->set_message('file_check', 'Sila pilih gambar berformat jpeg/jpg/png sahaja.');
                return false;
            }
        }else{
        	// $this->session->set_flashdata('err_message', 'Sila pilih gambar untuk dimuat naik');
            $this->form_validation->set_message('file_check', 'Sila pilih gambar pengguna untuk dimuat naik');
            return false;
        }
    }
}