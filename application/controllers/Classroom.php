<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Classroom extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Classroom_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
    	if (!empty($_GET['delete'])) {
    		$this->session->set_flashdata('success_message', 'Rekod Berjaya Dihapuskan');
    		echo "<script type='text/javascript'>";
    		echo "window.location.href = window.location.href.replace( /[\?#].*|$/, '' );"; // remove get
    		echo "</script>";
    	}
    	
        $data['classroomDetails'] = $this->db->get('classroom')->result();
        echo $this->session->set_flashdata('current_page','senarai kelas');
        $this->load->view('classroom/classroom_list', $data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Classroom_model->json();
    }

   //  public function read($id) 
   //  {
   //      $row = $this->Classroom_model->get_by_id($id);
   //      if ($row) {
   //          $data = array(
			// 'class_id' => $row->class_id,
			// 'class_name' => $row->class_name,
			// 'class_type' => $row->class_type,
			// 'class_status' => $row->class_status,
	  //   );
   //          echo $this->session->set_flashdata('current_page','lihat kelas');
   //          $this->load->view('classroom/classroom_read', $data);
   //      } else {
   //          $this->session->set_flashdata('message', 'Rekod Tidak Ditemui');
   //          redirect(site_url('classroom'));
   //      }
   //  }

    public function create() 
    {

        $data = array(
            'pagename' => 'Borang Pendaftaran Kelas',
            'button' => 'Daftar Kelas',
            'action' => site_url('classroom/create_action'),
			'class_id' => set_value('class_id'),
			'class_name' => set_value('class_name'),
			'class_type' => set_value('class_type'),
			'class_status' => set_value('class_status'),
	);
        echo $this->session->set_flashdata('current_page','pendaftaran kelas');
        $this->load->view('classroom/classroom_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        $schoolID = $this->session->userdata('schoolid'); // get school ID from session

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'class_name' => $this->input->post('class_name',TRUE),
				'class_type' => $this->input->post('class_type',TRUE),
				'class_status' => $this->input->post('class_status',TRUE),
				'school_id' => $schoolID,
	    );

            $this->Classroom_model->insert($data);
            $this->session->set_flashdata('success_message', 'Rekod Berjaya Ditambah');
            redirect(site_url('classroom'));
        }
    }

    public function update($id) 
    {
        $row = $this->Classroom_model->get_by_id($id);

        if ($row) {
            $data = array(
                'pagename' => 'Borang Kemaskini Kelas',
                'button' => 'Kemaskini Kelas',
                'action' => site_url('classroom/update_action'),
				'class_id' => set_value('class_id', $row->class_id),
				'class_name' => set_value('class_name', $row->class_name),
				'class_type' => set_value('class_type', $row->class_type),
				'class_status' => set_value('class_status', $row->class_status),
	    );
             $this->load->view('classroom/classroom_form', $data);
        } else {
            $this->session->set_flashdata('err_message', 'Rekod Tidak Ditemui');
            redirect(site_url('classroom'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('class_id', TRUE));
        } else {
            $data = array(
				'class_name' => $this->input->post('class_name',TRUE),
				'class_type' => $this->input->post('class_type',TRUE),
				'class_status' => $this->input->post('class_status',TRUE),
	    	);

            $this->Classroom_model->update($this->input->post('class_id', TRUE), $data);
            $this->session->set_flashdata('success_message', 'Rekod berjaya dikemaskini');
            redirect(site_url('classroom'));
        }
    }

    public function delete() 
    {
    	$id = $this->input->post('id',TRUE);
        $row = $this->Classroom_model->get_by_id($id);

        if ($row) {
        	if ($this->Classroom_model->delete($id)) {
        		$this->session->set_flashdata('success_message', 'Rekod Berjaya Dihapuskan');
            	redirect(site_url('classroom'));
        	}else{
        		$this->session->set_flashdata('err_message', 'Ralat ! Rekod tidak berjaya dihapuskan');
            	redirect(site_url('classroom'));
        	}
            
        } else {
            $this->session->set_flashdata('err_message', 'Rekod Tidak Ditemui');
            redirect(site_url('classroom'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('class_name', 'Nama Kelas', 'trim|required');
		$this->form_validation->set_rules('class_type', 'Jenis Kelas', 'trim|required');
		$this->form_validation->set_rules('class_status', 'Status', 'trim|required');

		$this->form_validation->set_rules('class_id', 'class_id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}