<?php 

class Appointments_Model extends CI_Model
{
	public function get_appointments_by_date($info)
	{

		$query = "SELECT * FROM appointments WHERE date = ? AND user_id = ?";
		$values = array($info['date'], $info['id']);
		return $this->db->query($query, $values)->result_array();
	}

	public function add_appointment($info)
	{
		$query = "INSERT INTO appointments (name, date, time, status, created_at, updated_at, user_id)
				  VALUES (?, ?, ?, ?, NOW(), NOW(), ?)";
		$values = array($info['task'], $info['date'], $info['time'], $info['status'], $info['user_id']);

		$this->db->query($query, $values);
	}

	public function delete_appointment($info)
	{
		$query = "DELETE FROM appointments
				  WHERE id = ?";
		$values = $info['id'];
		$this->db->query($query, $values);
	}

}
 ?>