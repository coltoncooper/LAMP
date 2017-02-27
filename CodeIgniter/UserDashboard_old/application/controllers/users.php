<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function sign_in_page()
	{
		$this->load->view('sign_in_page');
	}

	public function register_page()
	{
		$this->load->view('register_page');
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
			$this->load->view("register_page", $view_data);
		}
		else
		{
			$this->load->model('User');
			$this->User->add_user($this->input->post());
			redirect('/users/sign_in_page');
		}	
	}
	
	public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('User');
        $user = $this->User->get_user_by_email($email);
        if($user && $user['password'] == md5($password))
        {
            $view_data = array(
               'id' => $user['id'],
               'email' => $user['email'],
               'first_name' => $user['first_name'],
               'last_name' => $user['last_name'],
               'is_logged_in' => true
            );
            $this->session->set_userdata($view_data);
            redirect("dashboard/admin");
        }
        else
        {
            $this->session->set_flashdata("login_error", "Invalid email or password!");
            redirect("/users/sign_in_page");
        }
    }

	public function logout()
	 {
	   $this->session->unset_userdata('logged_in');
	   $this->session->sess_destroy();
	   redirect('home', 'refresh');
	 }

	 public function add_user()
	 {
	 	$this->load->view('add_user');
	 }
}

//end of main controller