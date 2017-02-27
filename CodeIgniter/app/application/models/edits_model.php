<?php 

class Edits_Model extends CI_Model
{
	public function get_appt_by_id($appt)
	{
		return $this->db->query("SELECT * FROM appointments WHERE id = ".$appt['id'])->row_array();
	}

	public function update($appt)
	{
		$query = "UPDATE appointments
				  SET name = ?, date = ?, time = ?, status = ?
				  WHERE id = ?";
		$values = array($appt['name'], $appt['date'], $appt['time'], $appt['status'], $appt['id']);
		return $this->db->query($query, $values);
	}
}
 ?>