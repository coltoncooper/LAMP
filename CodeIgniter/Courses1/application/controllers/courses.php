<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->model('Course');
		$courses = $this->Course->get_all_courses();
		$this->load->view('courses/index', array("courses"=>$courses));
	}

	public function create()
	{	
		$this->load->model('Course');
		$this->load->library("form_validation");
		$this->form_validation->set_rules("course_name","Name", "required|min_length[15]");
		if($this->form_validation->run()===FALSE)
		{
			$view_data=array(
				"errors" => validation_errors(),
				"courses"=>$this->Course->get_all_courses());
			$this->load->view("courses/index", $view_data);
		}
		else	
		{	
			$this->load->model('Course');
			$this->Course->create_course($this->input->post());
			redirect('/');
		}
	}

	public function destroy($id)
	{
		$this->load->model('Course');
		$course = $this->Course->get_course($id);
		$this->load->view('courses/destroy', array(
			'id'=>$id, 
			'name'=>$course['name'], 
			"description"=>$course['description']));
	}

	public function delete($id)
	{
		$this->load->model('Course');
		$this->Course->delete_course($id);
		redirect('/');
	}
}

//end of main controller