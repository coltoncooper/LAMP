<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function admin()
	{
		$this->load->model('User');
		$view_data = array('users' => $this->User->get_all_users());
		$this->load->view('admin', $view_data);
	}

}