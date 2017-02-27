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

	public function get_user($id)
	{
		$query = "SELECT * FROM users WHERE id=?";
		$value = array($id);
		return $this->db->query($query, $value)->row_array();
	}

	public function get_user_by_email($id)
	{
		$query ="SELECT * FROM users WHERE email=?";
		$value = array($id);
		return $this->db->query($query, $value)->row_array();
	}

	public function get_all_users()
	{
		$query = "SELECT * FROM users";
		return $this->db->query($query)->result_array();
	}
}