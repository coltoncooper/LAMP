<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->model('Product');
		$view_data = array(
			'products'=>$this->Product->get_all_products());
		$this->load->view('products/index', $view_data);
	}

	public function new()
	{
		$this->load->view('products/new');
	}

	public function create()
	{

		$this->load->library("form_validation");
		$this->form_validation->set_rules("product_name","Product Name", "required");
		$this->form_validation->set_rules("product_description","Product Description", "required");
		$this->form_validation->set_rules("product_price","Product Price", "required|numeric");
		if($this->form_validation->run()===FALSE)
		{
			$view_data=array("errors" => validation_errors());
			$this->load->view("products/new", $view_data);
		}
		else	
		{	
			$this->load->model('Product');
			$this->Product->add_product($this->input->post());
			redirect('/');
		}
	}

	public function show($id)
	{
		$this->load->model('Product');
		$view_data = array('product' => $this->Product->get_product($id));
		$this->load->view('products/show', $view_data);

	}

	public function edit($id)
	{
		$this->load->model('Product');
		$view_data = array('product' => $this->Product->get_product($id));
		$this->load->view('products/edit', $view_data);

	}

	public function update()
	{
		$this->load->model('Product');
		$view_data = array('product' => $this->Product->update_product($this->input->post()));
		redirect('/');
	}

	public function destroy($id)
	{
		$this->load->model('Product');
		$this->Product->destroy_product($id);
		$view_data = array('product' => $this->Product->update_product($this->input->post()));
		redirect('/');
	}
}
//end of main controller