<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryApi_model extends CI_Model {

	public function getCategory($id=null){
		if ($id === null) {
			return $this->db->get('p_category')->result_array();
		} else {
			return $this->db->get_where('p_category', ['category_id' => $id])->result_array();
		}
	}

    public function deleteCategory($id){
		$this->db->delete('p_category', ['category_id' => $id]);
		return $this->db->affected_rows();
		
	}

	public function createCategory($data){
		$this->db->insert('p_category', $data);
		return $this->db->affected_rows();
		
	}

	public function updateCategory($data, $id){
		$this->db->update('p_category', $data, ['category_id' => $id]);
		return $this->db->affected_rows();
		
	}

}