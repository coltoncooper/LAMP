<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('signin');
	}

	public function login()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $this->load->model('User');
        $user = $this->User->get_user($email);
        if($user && $user['password'] == $password)
        {
            $view_data = array(
               'id' => $user['id'],
               'email' => $user['email'],
               'first_name' => $user['first_name'],
               'last_name' => $user['last_name'],
               'is_logged_in' => true,
               'user_level' => $user['user_level'],
               'description' => $user['description']
            );
            $this->session->set_userdata($view_data);
            if($user['user_level']== 9)
            {
				redirect("/dashboard/admin");
            }
            else
            {
            	redirect('/dashboard');
            }
            
        }
        else
        {
            $this->session->set_flashdata("login_error", "Invalid email or password!");
            redirect("/signin");
        }
    }

    public function logout()
	 {
	   $this->session->unset_userdata('is_logged_in');
	   $this->session->sess_destroy();
	   redirect('/', 'refresh');
	 }








}