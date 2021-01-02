<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BlogApi_model extends CI_Model
{

	public function getBlog($id = null)
	{
		if ($id === null) {
			return $this->db->get('Blog')->result_array();
		} else {
			return $this->db->get_where('Blog', ['blog_id' => $id])->result_array();
		}
	}

	public function deleteBlog($id)
	{
		$this->db->delete('Blog', ['blog_id' => $id]);
		return $this->db->affected_rows();
	}

	public function createBlog($data)
	{
		$this->db->insert('Blog', $data);
		return $this->db->affected_rows();
	}

	public function updateBlog($data, $id)
	{
		$this->db->update('Blog', $data, ['blog_id' => $id]);
		return $this->db->affected_rows();
	}
}
