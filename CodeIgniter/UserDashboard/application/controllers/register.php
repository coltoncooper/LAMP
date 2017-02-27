<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function create()
	{
		$this->load->model('User');
		$result = $this->User->validate($this->input->post());
		if($result == 'valid')
		{
			$this->User->add_user($this->input->post());
			redirect('/signin');
		}
		else
		{
			$this->session->set_flashdata('login_error', $result);
			redirect('/register');
		}
		
	}
}