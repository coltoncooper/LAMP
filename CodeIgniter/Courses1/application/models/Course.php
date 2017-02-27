<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Course extends CI_Model
{

	public function get_all_courses()
	{
		$courses_query = "SELECT * FROM courses";
		return $this->db->query($courses_query)->result_array();
	}

	public function delete_course($id)
	{
		$delete_query = "DELETE FROM courses WHERE id = ?";
		return $this->db->query($delete_query, array($id));
	}

	public function get_course($id)
	{
		$query = "SELECT * FROM courses WHERE id = ?";
		return $this->db->query($query, array($id))->row_array();
	}

	public function create_course($post)
	{
		
		$name = $post['course_name'];
		$description = $post['description'];
		$query = "INSERT INTO courses (name, description, created_at) VALUES (?,?, NOW())";
		return $this->db->query($query, array($name, $description));
	}


}

