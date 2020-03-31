<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Teacher extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Teacher_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
        $data['teacherDetails'] = $this->db->get('teacher')->result();
        echo $this->session->set_flashdata('current_page','senarai Teacher');
        $this->load->view('teacher/teacher_list', $data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Teacher_model->json();
    }

    public function read($id) 
    {
        $row = $this->Teacher_model->get_by_id($id);
        if ($row) {
            $data = array(
			'tch_id' => $row->tch_id,
			'tch_staff_no' => $row->tch_staff_no,
			'tch_fullname' => $row->tch_fullname,
			'tch_nric_no' => $row->tch_nric_no,
			'tch_contact_no' => $row->tch_contact_no,
			'tch_gender' => $row->tch_gender,
			'tch_phone_no' => $row->tch_phone_no,
			'tch_email' => $row->tch_email,
			'tch_race' => $row->tch_race,
			'tch_religion' => $row->tch_religion,
			'tch_address' => $row->tch_address,
			'tch_postal_code' => $row->tch_postal_code,
			'tch_city_id' => $row->tch_city_id,
			'tch_state_id' => $row->tch_state_id,
			'tch_country_id' => $row->tch_country_id,
			'school_id' => $row->school_id,
			'create_at' => $row->create_at,
			'update_at' => $row->update_at,
	    );
            echo $this->session->set_flashdata('current_page','lihat Teacher');
            $this->load->view('teacher/teacher_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Rekod Tidak Ditemui');
            redirect(site_url('teacher'));
        }
    }

    public function create() 
    {
        $data = array(
            'pagename' => 'Borang Pendaftaran Teacher',
            'button' => 'Daftar Teacher',
            'action' => site_url('teacher/create_action'),
			'tch_id' => set_value('tch_id'),
			'tch_staff_no' => set_value('tch_staff_no'),
			'tch_fullname' => set_value('tch_fullname'),
			'tch_nric_no' => set_value('tch_nric_no'),
			'tch_contact_no' => set_value('tch_contact_no'),
			'tch_gender' => set_value('tch_gender'),
			'tch_phone_no' => set_value('tch_phone_no'),
			'tch_email' => set_value('tch_email'),
			'tch_race' => set_value('tch_race'),
			'tch_religion' => set_value('tch_religion'),
			'tch_address' => set_value('tch_address'),
			'tch_postal_code' => set_value('tch_postal_code'),
			'tch_city_id' => set_value('tch_city_id'),
			'tch_state_id' => set_value('tch_state_id'),
			'tch_country_id' => set_value('tch_country_id'),
			'school_id' => set_value('school_id'),
			'create_at' => set_value('create_at'),
			'update_at' => set_value('update_at'),
	);
        echo $this->session->set_flashdata('current_page','pendaftaran Teacher');
        $this->load->view('teacher/teacher_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'tch_staff_no' => $this->input->post('tch_staff_no',TRUE),
				'tch_fullname' => $this->input->post('tch_fullname',TRUE),
				'tch_nric_no' => $this->input->post('tch_nric_no',TRUE),
				'tch_contact_no' => $this->input->post('tch_contact_no',TRUE),
				'tch_gender' => $this->input->post('tch_gender',TRUE),
				'tch_phone_no' => $this->input->post('tch_phone_no',TRUE),
				'tch_email' => $this->input->post('tch_email',TRUE),
				'tch_race' => $this->input->post('tch_race',TRUE),
				'tch_religion' => $this->input->post('tch_religion',TRUE),
				'tch_address' => $this->input->post('tch_address',TRUE),
				'tch_postal_code' => $this->input->post('tch_postal_code',TRUE),
				'tch_city_id' => $this->input->post('tch_city_id',TRUE),
				'tch_state_id' => $this->input->post('tch_state_id',TRUE),
				'tch_country_id' => $this->input->post('tch_country_id',TRUE),
				'school_id' => $this->input->post('school_id',TRUE),
				'create_at' => $this->input->post('create_at',TRUE),
				'update_at' => $this->input->post('update_at',TRUE),
	    );

            $this->Teacher_model->insert($data);
            $this->session->set_flashdata('message', 'Rekod Berjaya Ditambah');
            redirect(site_url('teacher'));
        }
    }

    public function update($id) 
    {
        $row = $this->Teacher_model->get_by_id($id);

        if ($row) {
            $data = array(
                'pagename' => 'Kemaskini Borang Teacher',
                'button' => 'Update Teacher',
                'action' => site_url('teacher/update_action'),
				'tch_id' => set_value('tch_id', $row->tch_id),
				'tch_staff_no' => set_value('tch_staff_no', $row->tch_staff_no),
				'tch_fullname' => set_value('tch_fullname', $row->tch_fullname),
				'tch_nric_no' => set_value('tch_nric_no', $row->tch_nric_no),
				'tch_contact_no' => set_value('tch_contact_no', $row->tch_contact_no),
				'tch_gender' => set_value('tch_gender', $row->tch_gender),
				'tch_phone_no' => set_value('tch_phone_no', $row->tch_phone_no),
				'tch_email' => set_value('tch_email', $row->tch_email),
				'tch_race' => set_value('tch_race', $row->tch_race),
				'tch_religion' => set_value('tch_religion', $row->tch_religion),
				'tch_address' => set_value('tch_address', $row->tch_address),
				'tch_postal_code' => set_value('tch_postal_code', $row->tch_postal_code),
				'tch_city_id' => set_value('tch_city_id', $row->tch_city_id),
				'tch_state_id' => set_value('tch_state_id', $row->tch_state_id),
				'tch_country_id' => set_value('tch_country_id', $row->tch_country_id),
				'school_id' => set_value('school_id', $row->school_id),
				'create_at' => set_value('create_at', $row->create_at),
				'update_at' => set_value('update_at', $row->update_at),
	    );
             $this->load->view('teacher/teacher_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Rekod Tidak Ditemui');
            redirect(site_url('teacher'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('tch_id', TRUE));
        } else {
            $data = array(
				'tch_staff_no' => $this->input->post('tch_staff_no',TRUE),
				'tch_fullname' => $this->input->post('tch_fullname',TRUE),
				'tch_nric_no' => $this->input->post('tch_nric_no',TRUE),
				'tch_contact_no' => $this->input->post('tch_contact_no',TRUE),
				'tch_gender' => $this->input->post('tch_gender',TRUE),
				'tch_phone_no' => $this->input->post('tch_phone_no',TRUE),
				'tch_email' => $this->input->post('tch_email',TRUE),
				'tch_race' => $this->input->post('tch_race',TRUE),
				'tch_religion' => $this->input->post('tch_religion',TRUE),
				'tch_address' => $this->input->post('tch_address',TRUE),
				'tch_postal_code' => $this->input->post('tch_postal_code',TRUE),
				'tch_city_id' => $this->input->post('tch_city_id',TRUE),
				'tch_state_id' => $this->input->post('tch_state_id',TRUE),
				'tch_country_id' => $this->input->post('tch_country_id',TRUE),
				'school_id' => $this->input->post('school_id',TRUE),
				'create_at' => $this->input->post('create_at',TRUE),
				'update_at' => $this->input->post('update_at',TRUE),
	    );

            $this->Teacher_model->update($this->input->post('tch_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Rekod Dikemaskini');
            redirect(site_url('teacher'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Teacher_model->get_by_id($id);

        if ($row) {
            $this->Teacher_model->delete($id);
            $this->session->set_flashdata('message', 'Rekod Dipadamkan');
            redirect(site_url('teacher'));
        } else {
            $this->session->set_flashdata('message', 'Rekod Tidak Ditemui');
            redirect(site_url('teacher'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('tch_staff_no', 'tch staff no', 'trim|required');
		$this->form_validation->set_rules('tch_fullname', 'tch fullname', 'trim|required');
		$this->form_validation->set_rules('tch_nric_no', 'tch nric no', 'trim|required');
		$this->form_validation->set_rules('tch_contact_no', 'tch contact no', 'trim|required');
		$this->form_validation->set_rules('tch_gender', 'tch gender', 'trim|required');
		$this->form_validation->set_rules('tch_phone_no', 'tch phone no', 'trim|required');
		$this->form_validation->set_rules('tch_email', 'tch email', 'trim|required');
		$this->form_validation->set_rules('tch_race', 'tch race', 'trim|required');
		$this->form_validation->set_rules('tch_religion', 'tch religion', 'trim|required');
		$this->form_validation->set_rules('tch_address', 'tch address', 'trim|required');
		$this->form_validation->set_rules('tch_postal_code', 'tch postal code', 'trim|required');
		$this->form_validation->set_rules('tch_city_id', 'tch city id', 'trim|required');
		$this->form_validation->set_rules('tch_state_id', 'tch state id', 'trim|required');
		$this->form_validation->set_rules('tch_country_id', 'tch country id', 'trim|required');
		$this->form_validation->set_rules('school_id', 'school id', 'trim|required');
		$this->form_validation->set_rules('create_at', 'create at', 'trim|required');
		$this->form_validation->set_rules('update_at', 'update at', 'trim|required');

		$this->form_validation->set_rules('tch_id', 'tch_id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}