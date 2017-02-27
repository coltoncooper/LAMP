<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		echo "Welcome to CodeIgniter. The default Controller is Main.php";
	}

	public function p($id)
	{
		echo $id;
	}

	public function edit($id)
	{
		echo $id;
	}
}


























