<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		if($this->session->userdata('counter2'))
		{
			$counter = $this->session->userdata('counter2');
			$this->session->set_userdata('counter2', $counter+1);
		}
		else
		{
			$this->session->set_userdata('counter2', 1);
		}

		$view_data=array(
			'counter'=>$this->session->userdata('counter2'),
			'randomWord'=>$this->generateRandomString(15));

		$this->load->view('main_view', $view_data);
	}

	private function generateRandomString($string_len)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$randstring = '';
    	for ($i = 0; $i < $string_len; $i++) {
        $randstring = $randstring.$characters[rand(0, strlen($characters)-1)];
    	}
    	return $randstring;
	}
}

//end of main controller