<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function new()
	{
		$this->load->view('user_new');
	}

	public function create()
	{
		$this->load->model('User');
		$result = $this->User->validate($this->input->post());
		if($result == 'valid')
		{
			$this->User->add_user($this->input->post());
			
		}
		else
		{
			$this->session->set_flashdata('login_error', $result);
			
		}
		redirect('/dashboard/admin');
	}

	public function edit()
	{
		$this->load->view("user_edit");
	}

	public function edit_with_id($id)
	{
		$this->load->model('User');
		$result = $this->User->get_user_with_id($id);

		$view_data = array('user' => $result);
		$this->load->view('user_edit_with_id', $view_data);
	}

	public function edit_profile_with_id()
	{
		$this->load->model('User');
		$result = $this->User->edit_profile($this->input->post());
		if($result == 'valid')
		{
			$this->session->set_flashdata('message', 'Profile is updated!');
		}
		else
		{
			$this->session->set_flashdata('login_error', $result);
			
		}
		redirect('/users/edit/'.$this->input->post("id"));
	}

	public function update_password_with_id()
	{
		$this->load->model('User');
		$result = $this->User->password_update($this->input->post());
		if($result == 'valid')
		{
			$this->session->set_flashdata('message', 'Password is updated!');
		}
		else
		{
			$this->session->set_flashdata('login_error', $result);
			
		}
		redirect('/users/edit/'.$this->input->post("id"));
	}

	public function edit_profile()
	{
		$this->load->model('User');
		$result = $this->User->edit_profile($this->input->post());
		if($result == 'valid')
		{
			$this->session->set_flashdata('message', 'You have updated your profile!');
		}
		else
		{
			$this->session->set_flashdata('login_error', $result);
			
		}redirect('/users/edit');
	}

	public function edit_description()
	{
		$this->load->model('User');
		$result = $this->User->edit_description($this->input->post());
		$this->session->set_flashdata('message', 'You have updated your description!');
		redirect('/users/edit');
	}

	public function update_password()
	{
		$this->load->model('User');
		$result = $this->User->password_update($this->input->post());
		if($result == 'valid')
		{
			$this->session->set_flashdata('message', 'You have updated your password!');
		}
		else
		{
			$this->session->set_flashdata('login_error', $result);
			
		}redirect('/users/edit');
	}

	public function remove($id)
	{
		$this->load->model('User');
		$this->User->remove_user($id);
		redirect('/dashboard/admin');
	}
}

