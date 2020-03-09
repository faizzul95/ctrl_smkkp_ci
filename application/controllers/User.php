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
    }

    public function index()
    {
        $data['userDetails'] = $this->db->get('user')->result();
        echo $this->session->set_flashdata('current_page','senarai pengguna');
        $this->load->view('user/user_list',$data);
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
			'user_email' => $row->user_email,
			'email_verified_at' => $row->email_verified_at,
			'user_password' => $row->user_password,
			'user_remember_token' => $row->user_remember_token,
			'role_id' => $row->role_id,
			'school_id' => $row->school_id,
			'user_avatar' => $row->user_avatar,
			'created_at' => $row->created_at,
			'updated_at' => $row->updated_at,
	    );
            // $this->load->view('header');
            $this->load->view('user/user_read', $data);
            // $this->load->view('footer');
        } else {
            $this->session->set_flashdata('message', 'Rekod Tidak Ditemui');
            redirect(site_url('user'));
        }
    }

    public function create() 
    {
        $data = array(
            'pagename' => 'Borang Pendaftaran Pengguna',
            'button' => 'Daftar Pengguna',
            'action' => site_url('user/create_action'),
			'user_id' => set_value('user_id'),
			'user_username' => set_value('user_username'),
			'user_email' => set_value('user_email'),
			'user_password' => set_value('user_password'),
			'user_remember_token' => set_value('user_remember_token'),
			'role_id' => set_value('role_id'),
			'school_id' => set_value('school_id'),
			'user_avatar' => set_value('user_avatar'),
	);
        // $this->load->view('header');
        echo $this->session->set_flashdata('current_page','pendaftaran pengguna');
        $this->load->view('user/user_form', $data);
        // $this->load->view('footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'user_username' => $this->input->post('user_username',TRUE),
				'user_email' => $this->input->post('user_email',TRUE),
				'email_verified_at' => $this->input->post('email_verified_at',TRUE),
				'user_password' => $this->input->post('user_password',TRUE),
				'user_remember_token' => $this->input->post('user_remember_token',TRUE),
				'role_id' => $this->input->post('role_id',TRUE),
				'school_id' => $this->input->post('school_id',TRUE),
				'user_avatar' => $this->input->post('user_avatar',TRUE),
				'created_at' => $this->input->post('created_at',TRUE),
				'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->User_model->insert($data);
            $this->session->set_flashdata('message', 'Rekod Berjaya Ditambah');
            redirect(site_url('user'));
        }
    }

    public function update($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'pagename' => 'Kemaskini Borang User',
                'button' => 'Update User',
                'action' => site_url('user/update_action'),
				'user_id' => set_value('user_id', $row->user_id),
				'user_username' => set_value('user_username', $row->user_username),
				'user_email' => set_value('user_email', $row->user_email),
				'email_verified_at' => set_value('email_verified_at', $row->email_verified_at),
				'user_password' => set_value('user_password', $row->user_password),
				'user_remember_token' => set_value('user_remember_token', $row->user_remember_token),
				'role_id' => set_value('role_id', $row->role_id),
				'school_id' => set_value('school_id', $row->school_id),
				'user_avatar' => set_value('user_avatar', $row->user_avatar),
				'created_at' => set_value('created_at', $row->created_at),
				'updated_at' => set_value('updated_at', $row->updated_at),
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

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('user_id', TRUE));
        } else {
            $data = array(
				'user_username' => $this->input->post('user_username',TRUE),
				'user_email' => $this->input->post('user_email',TRUE),
				'email_verified_at' => $this->input->post('email_verified_at',TRUE),
				'user_password' => $this->input->post('user_password',TRUE),
				'user_remember_token' => $this->input->post('user_remember_token',TRUE),
				'role_id' => $this->input->post('role_id',TRUE),
				'school_id' => $this->input->post('school_id',TRUE),
				'user_avatar' => $this->input->post('user_avatar',TRUE),
				'created_at' => $this->input->post('created_at',TRUE),
				'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->User_model->update($this->input->post('user_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Rekod Dikemaskini');
            redirect(site_url('user'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $this->User_model->delete($id);
            $this->session->set_flashdata('message', 'Rekod Dipadamkan');
            redirect(site_url('user'));
        } else {
            $this->session->set_flashdata('message', 'Rekod Tidak Ditemui');
            redirect(site_url('user'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('user_username', 'user username', 'trim|required');
		$this->form_validation->set_rules('user_email', 'user email', 'trim|required');
		$this->form_validation->set_rules('email_verified_at', 'email verified at', 'trim|required');
		$this->form_validation->set_rules('user_password', 'user password', 'trim|required');
		$this->form_validation->set_rules('user_remember_token', 'user remember token', 'trim|required');
		$this->form_validation->set_rules('role_id', 'role id', 'trim|required');
		$this->form_validation->set_rules('school_id', 'school id', 'trim|required');
		$this->form_validation->set_rules('user_avatar', 'user avatar', 'trim|required');
		$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
		$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

		$this->form_validation->set_rules('user_id', 'user_id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}