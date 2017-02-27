<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function add_product($product)
	{
		$value = array($product['product_name'], $product['product_description'], $product['product_price']);
		$query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";
		return $this->db->query($query, $value);
	}

	public function get_all_products()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}

	public function get_product($id)
	{
		$query = "SELECT * FROM products WHERE id=?";
		$value = array($id);
		return $this->db->query($query, $value)->row_array();
	}

	public function update_product($product)
	{
		$query = "UPDATE products SET name=?, description=?, price=?, updated_at=NOW() WHERE id=?";
		$value = array($product['product_name'], $product['product_description'], $product['product_price'], $product['id']);
		return $this->db->query($query, $value);
	}

	public function destroy_product($id)
	{
		$query = "DELETE FROM products WHERE id = ?";
		$value = array($id);
		return $this->db->query($query, $value);
	}
}
	

//end of main model