<?php

class Article_model extends CI_Model
{
	private $_table = 'artikel';

	public function get_published($limit = null, $offset = null)
	{
		if (!$limit && $offset) {
			$query = $this->db->get_where($this->_table, ['draft' => 'false']);
		} else {
			$query =  $this->db->get_where($this->_table, ['draft' => 'false'], $limit, $offset);
		}
		return $query->result();
	}

	public function find_by_slug($slug)
	{
		if (!$slug) {
			return;
		}
		$query = $this->db->get_where($this->_table, ['slug' => $slug]);
		return $query->row();
	}
}
