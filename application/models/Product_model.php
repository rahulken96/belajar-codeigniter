<?php

class Product_model extends CI_Model
{
	public function find($id)
	{
	  $query = $this->db->get_where('table_name', ['id' => $id]);
	  return $query->row(); // return berupa satu object
	}

	public function get_expired_product()
	{
	  $query = $this->db->query("SELECT * FROM table WHERE expired=1");
	  return $query->result(); // return berupa array objek
	}

}
