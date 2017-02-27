<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function add_user($user)
	{
		$all_users_count = count($this->db->query('SELECT * FROM users')->result_array());
		if($all_users_count == 0)
		{
			$user_level = 9;
		}
		else
		{
			$user_level = 0;
		}
		$value = array($user['first_name'], $user['last_name'], $user['email'], md5($user['password']));
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at, user_level) VALUES (?,?,?,?, NOW(), NOW(), $user_level)";
		return $this->db->query($query, $value);
	}

	public function validate($user)
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name","First Name", "trim|required");
		$this->form_validation->set_rules("last_name","Last Name", "trim|required");
		$this->form_validation->set_rules("email","Email Address", "trim|valid_email|is_unique[users.email]|required");
		$this->form_validation->set_rules("password","Password", "trim|required|min_length[6]");
		$this->form_validation->set_rules("confirm_password","Confirm Password", "required|matches[password]");
		if($this->form_validation->run())
		{
			return 'valid';
		}
		else
		{
			return validation_errors();
		}	
	}

	public function get_user($email)
	{
		$query ="SELECT * FROM users WHERE email=?";
		$value = array($email);
		return $this->db->query($query, $value)->row_array();
	}

	public function get_all_users()
	{
		$query = "SELECT * FROM users ORDER BY id";
		return $this->db->query($query)->result_array();
	}

	public function password_update($post)
	{
		if(!isset($post['id']))
		{
			$id=$this->session->userdata('id');
		}else{
			$id=$post['id'];
		}
		$this->load->library("form_validation");
		$this->form_validation->set_rules("password","Password", "trim|required|min_length[6]");
		$this->form_validation->set_rules("confirm_password","Confirm Password", "required|matches[password]");
		if($this->form_validation->run())
		{
			$value = array(md5($post['password']), $id); 
			$query = "UPDATE users SET password = ? WHERE id = ?";
			$this->db->query($query, $value);
			return 'valid';
		}
		else
		{
			return validation_errors();
		}		
	}

	public function edit_description($post)
	{
		$value = array($post['description'], $this->session->userdata['id']);
		$query = "UPDATE users SET description = ? WHERE id = ?";
		$this->db->query($query, $value);
		$this->session->set_userdata('description', $post['description']);
	}

	public function edit_profile($post)
	{
		if(!isset($post['id']))
		{
			$id=$this->session->userdata('id');
		}else{
			$id=$post['id'];
		}
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name","First Name", "trim|required");
		$this->form_validation->set_rules("last_name","Last Name", "trim|required");
		$this->form_validation->set_rules("email","Email Address", "trim|valid_email|required");
		if($this->form_validation->run())
		{
			$value = array($post['first_name'], $post['last_name'], $post['email'], $post['user_level'], $id);
			$this->session->set_userdata('first_name', $post['first_name']);
			$this->session->set_userdata('last_name', $post['last_name']);
			$this->session->set_userdata('email', $post['email']);
			$query = "UPDATE users SET first_name=?, last_name=?, email=? , user_level=? seWHERE id = ?";
			$this->db->query($query, $value);
			return 'valid';
		}
		else
		{
			return validation_errors();
		}		
	}

	public function get_user_with_id($id)
	{
		$value = array($id);
		$query = 'SELECT * FROM users WHERE id=?';
		return $this->db->query($query, $value)->row_array();
	}

	public function remove_user($id){
		$value = array($id);
		$query = 'DELETE FROM users WHERE id=?';
		$this->db->query($query, $value);
	}
}