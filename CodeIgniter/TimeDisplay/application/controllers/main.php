<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	protected $view_data = array();

	public function index()
	{
		$this->view_data['date']=date("F j, Y");
		$this->view_data['time']=date("h: i a");
		$this->load->view('index', $this->view_data);
	}
}























