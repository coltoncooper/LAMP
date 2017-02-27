<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		if($this->session->userdata('is_logged_in') === true)
		{
			$this->load->model('User');
			$view_data = array('users' => $this->User->get_all_users());
			$this->load->view('dashboard', $view_data);
		}
		else
		{
			redirect('/signin');
		}
	}

	public function admin()
	{
		if($this->session->userdata('is_logged_in') === true && $this->session->userdata('user_level') == 9)
		{
			$this->load->model('User');
			$view_data = array('users' => $this->User->get_all_users());
			$this->load->view('dashboard_admin', $view_data);
		}
		else
		{
			redirect('/dashboard');
		}
	}
}