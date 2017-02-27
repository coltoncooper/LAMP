<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

	protected $view_data = array();
	protected $counter;

	public function __construct()
	{
		parent::__construct();
		$this->counter = $this->session->userdata('counter');
	}


	public function index()
	{
		if($this->input->post())
		{
			$this->view_data['survey_info'] = $this->input->post();

			if($this->counter)
			{
				$this->counter++;
				$this->session->set_userdata('counter', $this->counter);
			}
			else
			{
				$this->session->set_userdata('counter', 1);
			}

			$this->load->view('result', $this->view_data);
		}
	}
}






























