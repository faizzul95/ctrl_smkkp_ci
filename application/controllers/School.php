<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class School extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('School_model');
        $this->load->model('Dynamic_country_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
    	check_login();

    	if (!empty($_GET['delete'])) {
    		$this->session->set_flashdata('success_message', 'Rekod Berjaya Dihapuskan');
    		echo "<script type='text/javascript'>";
    		echo "window.location.href = window.location.href.replace( /[\?#].*|$/, '' );"; // remove get
    		echo "</script>";
    	}
    	
        $data['schoolDetails'] = $this->db->get('school')->result();
        echo $this->session->set_flashdata('current_page','senarai School');
        $this->load->view('school/school_list', $data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->School_model->json();
    }

    public function read($id) 
    {
        $row = $this->School_model->get_by_id($id);
        if ($row) {
            $data = array(
			'school_id' => $row->school_id,
			'school_name' => $row->school_name,
			'school_address' => $row->school_address,
			'school_postal_code' => $row->school_postal_code,
			'school_city_id' => $row->school_city_id,
			'school_state_id' => $row->school_state_id,
			'school_country_id' => $row->school_country_id,
			'school_contact_no' => $row->school_contact_no,
			'school_fax_no' => $row->school_fax_no,
			'school_website' => $row->school_website,
			'school_type' => $row->school_type,
			'school_level' => $row->school_level,
			'create_at' => $row->create_at,
			'update_at' => $row->update_at,
	    );
            echo $this->session->set_flashdata('current_page','lihat Sekolah');
            $this->load->view('school/school_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Rekod Tidak Ditemui');
            redirect(site_url('school'));
        }
    }

    public function create() 
    {
    	check_login();
        $data = array(
            'pagename' => 'Borang Pendaftaran Sekolah',
            'button' => 'Daftar Sekolah',
            'action' => site_url('school/create_action'),
			'school_id' => set_value('school_id'),
			'school_name' => set_value('school_name'),
			'school_address' => set_value('school_address'),
			'school_postal_code' => set_value('school_postal_code'),
			'school_city_id' => set_value('school_city_id'),
			'school_state_id' => set_value('school_state_id'),
			'school_country_id' => set_value('school_country_id'),
			'school_contact_no' => set_value('school_contact_no'),
			'school_fax_no' => set_value('school_fax_no'),
			'school_website' => set_value('school_website'),
			'school_type' => set_value('school_type'),
			'school_level' => set_value('school_level'),
			'create_at' => set_value('create_at'),
			'update_at' => set_value('update_at'),
			'country' => $this->Dynamic_country_model->fetch_country(),
	);
        echo $this->session->set_flashdata('current_page','pendaftaran School');
        $this->load->view('school/school_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'school_name' => $this->input->post('school_name',TRUE),
				'school_address' => $this->input->post('school_address',TRUE),
				'school_postal_code' => $this->input->post('school_postal_code',TRUE),
				'school_city_id' => $this->input->post('school_city_id',TRUE),
				'school_state_id' => $this->input->post('school_state_id',TRUE),
				'school_country_id' => $this->input->post('school_country_id',TRUE),
				'school_contact_no' => $this->input->post('school_contact_no',TRUE),
				'school_fax_no' => $this->input->post('school_fax_no',TRUE),
				'school_website' => $this->input->post('school_website',TRUE),
				'school_type' => $this->input->post('school_type',TRUE),
				'school_level' => $this->input->post('school_level',TRUE),
				'create_at' => date('Y-m-d H:i:s'),
	    );

            $this->School_model->insert($data);
            $this->session->set_flashdata('message', 'Rekod Berjaya Ditambah');
            redirect(site_url('school'));
        }
    }

    public function update($id) 
    {
        $row = $this->School_model->get_by_id($id);

        if ($row) {
            $data = array(
                'pagename' => 'Kemaskini Borang School',
                'button' => 'Update School',
                'action' => site_url('school/update_action'),
				'school_id' => set_value('school_id', $row->school_id),
				'school_name' => set_value('school_name', $row->school_name),
				'school_address' => set_value('school_address', $row->school_address),
				'school_postal_code' => set_value('school_postal_code', $row->school_postal_code),
				'school_city_id' => set_value('school_city_id', $row->school_city_id),
				'school_state_id' => set_value('school_state_id', $row->school_state_id),
				'school_country_id' => set_value('school_country_id', $row->school_country_id),
				'school_contact_no' => set_value('school_contact_no', $row->school_contact_no),
				'school_fax_no' => set_value('school_fax_no', $row->school_fax_no),
				'school_website' => set_value('school_website', $row->school_website),
				'school_type' => set_value('school_type', $row->school_type),
				'school_level' => set_value('school_level', $row->school_level),
				'update_at' => set_value('update_at', $row->update_at),
	    );
             $this->load->view('school/school_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Rekod Tidak Ditemui');
            redirect(site_url('school'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('school_id', TRUE));
        } else {
            $data = array(
				'school_name' => $this->input->post('school_name',TRUE),
				'school_address' => $this->input->post('school_address',TRUE),
				'school_postal_code' => $this->input->post('school_postal_code',TRUE),
				'school_city_id' => $this->input->post('school_city_id',TRUE),
				'school_state_id' => $this->input->post('school_state_id',TRUE),
				'school_country_id' => $this->input->post('school_country_id',TRUE),
				'school_contact_no' => $this->input->post('school_contact_no',TRUE),
				'school_fax_no' => $this->input->post('school_fax_no',TRUE),
				'school_website' => $this->input->post('school_website',TRUE),
				'school_type' => $this->input->post('school_type',TRUE),
				'school_level' => $this->input->post('school_level',TRUE),
				'create_at' => $this->input->post('create_at',TRUE),
				'update_at' => $this->input->post('update_at',TRUE),
	    );

            $this->School_model->update($this->input->post('school_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Rekod Dikemaskini');
            redirect(site_url('school'));
        }
    }
    

    public function delete() 
    {
    	$id = $this->input->post('id',TRUE);
        $row = $this->School_model->get_by_id($id);

        if ($row) {
        	if ($this->School_model->delete($id)) {
        		$this->session->set_flashdata('success_message', 'Rekod Berjaya Dihapuskan');
            	redirect(site_url('school'));
        	}else{
        		$this->session->set_flashdata('err_message', 'Ralat ! Rekod tidak berjaya dihapuskan');
            	redirect(site_url('school'));
        	}
            
        } else {
            $this->session->set_flashdata('err_message', 'Rekod Tidak Ditemui');
            redirect(site_url('school'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('school_name', 'school name', 'trim|required');
		$this->form_validation->set_rules('school_address', 'school address', 'trim|required');
		$this->form_validation->set_rules('school_postal_code', 'poskod', 'trim|required|min_length[5]|max_length[6]|integer');
		$this->form_validation->set_rules('school_postal_code', 'school postal code', 'trim|required');
		$this->form_validation->set_rules('school_city_id', 'school city id', 'trim|required');
		$this->form_validation->set_rules('school_state_id', 'school state id', 'trim|required');
		$this->form_validation->set_rules('school_country_id', 'school country id', 'trim|required');
		$this->form_validation->set_rules('school_contact_no', 'No. Telefon', 'trim|required|min_length[10]|max_length[11]|integer');
		$this->form_validation->set_rules('school_fax_no', 'No. Fax', 'trim|required|min_length[6]|max_length[10]|integer');
		$this->form_validation->set_rules('school_website', 'school website', 'trim|required');
		$this->form_validation->set_rules('school_type', 'school type', 'trim|required');
		$this->form_validation->set_rules('school_level', 'school level', 'trim|required');

		$this->form_validation->set_rules('school_id', 'school_id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    function fetch_state()
	{
	    if($this->input->post('country_id'))
	      {
	        echo $this->Dynamic_country_model->fetch_state($this->input->post('country_id'));
	      }
	}

	function fetch_city()
	{
	    if($this->input->post('state_id'))
	      {
	        echo $this->Dynamic_country_model->fetch_city($this->input->post('state_id'));
	      }
	}
}