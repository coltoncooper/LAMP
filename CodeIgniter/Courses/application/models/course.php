<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
	}

	public function add_course($course)
	{
		$query="INSERT INTO courses (name, description, created_at, updated_at) VALUES (?, ?, ?, ?)";
		$now= date('Y-m-d H:i:s');
		$value=array($course['name'], $course['description'], $now, $now);
		return $this->db->query($query, $value);

	}

	public function get_all_courses()
	{
		$query="SELECT * FROM courses ORDER BY created_at";
		return $this->db->query($query)->result_array();
	}

	public function destroy_course($id)
	{
		$query="DELETE FROM courses WHERE id=?";
		$value=array($id);
		return $this->db->query($query, $value);
	}
}

//end of main controller