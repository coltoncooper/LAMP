<?php 
class Appointments extends CI_Controller
{
	public function index()
	{
		date_default_timezone_set("America/Los_Angeles");
		$this->load->model('appointments_model');
		$info['date'] = date('Y-m-d');
		$user = $this->session->userdata('user');
		$info['id'] = $user['id'];

		$todays_appointments = $this->appointments_model->get_appointments_by_date($info);
		$this->session->set_userdata('appointments', $todays_appointments);
		$this->load->view('appointments_view', $todays_appointments);
	}

	public function add_appointment()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('task', 'Task', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('time', 'Time', 'required');
		if($this->form_validation->run() === FALSE) //not success
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url('appointments'));
		}
		else
		{
			date_default_timezone_set("America/Los_Angeles");
			$this->load->model('appointments_model');
			$input_date = $this->input->post('date');
			$input_time = $this->input->post('time');
			$input_time = date('H:i:s', strtotime($input_time));
			$input_date = date('m-d-Y', strtotime($input_date));
			$current_date = date('m-d-Y');
			$current_time = date('H:i:s');
			if($input_date >= $current_date && $input_time >= $current_time)
			{
				$appointment_info = array(
					'user_id' => $this->input->post('user_id'),
					'task' => $this->input->post('task'),
					'date' => $this->input->post('date'),
					'time' => $this->input->post('time'),
					'status' => 'pending'
					);
				$this->appointments_model->add_appointment($appointment_info);
				$this->session->set_flashdata('success', 'Successfully added new task');
			}
			else
			{
				$this->session->set_flashdata('errors', 'Date and time must be in the future');
			}
		}
		redirect(base_url('appointments'));
	}

	public function edit()
	{
		$this->load->model('edits_model');
		$appt_to_edit['id'] = $this->input->post('appt_id');
	
		$appointment = $this->edits_model->get_appt_by_id($appt_to_edit);
		$this->session->set_userdata('appointment_to_edit', $appointment);
		redirect(base_url('edits'));
	}

	public function delete()
	{
		$this->load->model('appointments_model');
		$info['id'] = $this->input->post('appt_id');
		$this->appointments_model->delete_appointment($info);
		redirect(base_url('appointments'));
	}
}
 ?>