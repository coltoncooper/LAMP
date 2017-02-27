<?php 

class Users_Model extends CI_Model
{
	function add_user($user)
	{
		$query = "INSERT INTO users (name, email, password, birthdate, created_at, updated_at)
				  VALUES (?, ?, ?, ?, NOW(), NOW())";
		$values = array($user['name'], $user['email'], $user['password'], $user['birthdate']);
		return $this->db->query($query, $values);
	}

	function login_user($email)
	{
		$query = "SELECT * FROM users WHERE email = ?";

		return $this->db->query($query, array($email))->row_array();
	}
}
 ?>