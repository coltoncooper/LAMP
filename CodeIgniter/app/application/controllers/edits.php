<?php 

class Edits extends CI_Controller
{
	public function index()
	{	
		date_default_timezone_set("America/Los_Angeles");
		$this->load->view('edits_view');
	}

	public function update()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Task', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('time', 'Time', 'required');
		if($this->form_validation->run() === FALSE) //not success
		{	
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url('edits'));
		}
		else 
		{
			date_default_timezone_set("America/Los_Angeles");
			$this->load->model('edits_model');
			$input_date = $this->input->post('date');
			$input_date = date('m-d-Y', strtotime($input_date));
			$input_time = $this->input->post('time');
			$input_time = date('H:i:s', strtotime($input_time));
			$current_date = date('m-d-Y');
			$current_time = date('H:i:s');
			if($input_date >= $current_date && $input_time >= $current_time)
			{
				$appt_info = array(
					'name' => $this->input->post('name'),
					'date' => $this->input->post('date'),
					'time' => $this->input->post('time'),
					'status' => $this->input->post('status'),
					'id' => $this->input->post('appt_id')
					);
				$this->edits_model->update($appt_info);
				redirect(base_url('appointments'));
			}
			else
			{
				$this->session->set_flashdata('errors', 'Date and time must be in the future');
				redirect(base_url('edits'));
			}
		}
		
	}
}
 ?>