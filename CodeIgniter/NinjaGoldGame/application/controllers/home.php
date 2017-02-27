<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	protected $gold_count =0;
		$activity = array();

	public function __construct()
	{
		parent::__construct();
		$this->gold_count = $this->session->userdata('gold_count');
		$this->activity = $this->session->userdata('activity');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function process()
	{
		$post_data = $this->input->post();

		if(isset($post_data['action']) && $post_data['action'] == "restart_form")
		{
			$this->session->sess_destroy();
			redirect(base_url());
		}

		if(isset($post_data['building']))
		{
			$gold_count=0;

			case 'farm':
				$gold_count = rand(10,20);
			break;

			case 'cave':
				$gold_count = rand(5,10);
			break;

			case 'house':
				$gold_count = rand(2,5);
			break;

			case 'casino':
				$
		}

		if(!empty($this->activity))
		{
			$this->activity = $this->session->userdata('activity');
		}
		$gold_count += $this->session->userdata('gold_count');
		$this->session->set_userdata('gold_count', $gold_count);

		redirect(base_url());
	}

	
}

//end of main controller