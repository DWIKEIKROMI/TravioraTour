<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ContactApi_model extends CI_Model
{

	public function getContact($id = null)
	{
		if ($id === null) {
			return $this->db->get('contact')->result_array();
		} else {
			return $this->db->get_where('contact', ['contact_id' => $id])->result_array();
		}
	}

	public function deleteContact($id)
	{
		$this->db->delete('contact', ['contact_id' => $id]);
		return $this->db->affected_rows();
	}

	public function createContact($request)
	{
		$this->db->insert('contact', $request);
		return $this->db->affected_rows();
	}

	public function updateContact($data, $id)
	{
		$this->db->update('contact', $data, ['contact_id' => $id]);
		return $this->db->affected_rows();
	}





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

/* End of file contact_model.php */
