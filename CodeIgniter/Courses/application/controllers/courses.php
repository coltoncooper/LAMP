<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->load->model('Course');
		$view_data=array("courses" => $this->Course->get_all_courses()); 
		$this->load->view('courses_view', $view_data);
	}

	public function add()
	{
		
		$this->load->library("form_validation");
		$this->form_validation->set_rules("course_name","Name", "required|min_length[15]");
		if($this->form_validation->run()===FALSE)
		{
			$view_data=array("errors" => validation_errors());
			$this->load->view("courses_view", $view_data);
		}
		else
		{
			$this->load->model('Course');
			$course=array(
				'name'=>$this->input->post('course_name'),
				'description'=>$this->input->post('course_description'));
			$this->Course->add_course($course);
			$view_data=array("courses" => $this->Course->get_all_courses()); 
			$this->load->view('courses_view', $view_data);
		}	
	}

	public function destroy($id)
	{
		if($this->input->post())
		{
			echo 'confirm';
		}
		else
		{
			$this->load->model('Course');
			// $this->Course->destroy_course($id);
			$view_data=array(
				"courses" => $this->Course->get_all_courses(),
				"id" => $id); 
			$this->load->view('destroy_confirm');
		}
		

	}
}

//end of main controller
