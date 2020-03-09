<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session'); 
    }

	public function index()
	{
		echo $this->session->set_flashdata('current_page','dashboard');
		$this->load->view('dashboard');
	}
}
