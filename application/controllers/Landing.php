<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	public function index()
	{
		$this->load->view('landing/v_header');
		$this->load->view('landing/v_navbar');
		$this->load->view('landing/v_body');
		$this->load->view('landing/v_footer');
	}
}
