<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newuser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function create()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name","First Name", "required");
		$this->form_validation->set_rules("last_name","Last Name", "required");
		$this->form_validation->set_rules("email","Email Address", "required");
		$this->form_validation->set_rules("password","Password", "required|min_length[6]");
		$this->form_validation->set_rules("confirm_password","Confirm Password", "required|matches[password");
		if($this->form_validation->run()===FALSE)
		{
			$view_data=array("errors" => validation_errors());
			$this->load->view("newuser_page", $view_data);
		}
		else
		{
			$this->load->model('User');
			$this->User->add_user($this->input->post());
			redirect('newuser_page');
		}	
	}