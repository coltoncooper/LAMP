<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function add_user($post)
	{
		$value = array($post['name'], $post['alias'], $post['email'], md5($post['password']), $post['dob']);
		$query = "INSERT INTO users (name, alias, email, password, dob, created_at, updated_at) VALUES (?,?,?,?,?, NOW(), NOW())";
		return $this->db->query($query, $value);
	}

	public function get_all_users()
	{
		$query = "SELECT * FROM users";
		// $query = "SELECT name, alias, email, poke_history FROM users JOIN pokes ON users.id = pokes.user_id";
		return $this->db->query($query)->result_array();
	}

	public function get_user_by_email($id)
	{
		$query ="SELECT * FROM users WHERE email=?";
		$value = array($id);
		return $this->db->query($query, $value)->row_array();
	}





}