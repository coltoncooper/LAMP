<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('pokes');
	}

	public function create()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Name", "trim|required");
		$this->form_validation->set_rules("alias","Alias", "trim|required");
		$this->form_validation->set_rules("email","Email Address", "trim|valid_email|is_unique[users.email]|required");
		$this->form_validation->set_rules("password","Password", "trim|required|min_length[6]");
		$this->form_validation->set_rules("confirm_password","Confirm Password", "required|matches[password]");
		$this->form_validation->set_rules("dob", "Date of Birth", "required");
		if($this->form_validation->run()===FALSE)
		{
			$view_data=array("errors" => validation_errors());
			$this->load->view("main", $view_data);
		}
		else
		{
			$this->load->model('User');
			$this->User->add_user($this->input->post());
			redirect('/');
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
               'name' => $user['name'],
               'alias' => $user['alias'],
               'is_logged_in' => true
            );
            $this->session->set_userdata($view_data);
            $this->load->view('pokes','$view_data');
            // redirect('/pokes');
        }
        else
        {
            $this->session->set_flashdata("login_error", "Invalid email or password!");
            redirect("/");
        }
    }

	public function logout()
	 {
	   $this->session->unset_userdata('logged_in');
	   $this->session->sess_destroy();
	   redirect('index', 'refresh');
	 }

	 public function pokes_page()
	 {
	 	$this->load->model('User');
		$view_data = array('users' => $this->User->get_all_users());
		var_dump($view_data); die();
		$this->load->view('pokes', $view_data);
	 }
}

//end of main controller