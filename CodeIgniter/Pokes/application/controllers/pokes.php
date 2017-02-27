<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pokes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->model('User');
		$view_data = array('users' => $this->User->get_all_users());
		$this->load->view('pokes', $view_data);
		
	}

	public function pokes($post)
	{
		if($this->input->post('poke'))
		{
			$value += 1;
			$query="INSERT INTO INTO pokes (pokes_history, created_at, updated_at) VALUES (?, NOW(), NOW())";
			return $this->db->query($query, $value);
		}
	}
}