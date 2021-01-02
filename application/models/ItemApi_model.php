<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ItemApi_model extends CI_Model {

	public function getItem($id=null){
		if ($id === null) {
			return $this->db->get('p_item')->result_array();
		} else {
			return $this->db->get_where('p_item', ['item_id' => $id])->result_array();
		}
	}

	public function deleteItem($id){
		$this->db->delete('p_item', ['item_id' => $id]);
		return $this->db->affected_rows();
		
	}

	public function createItem($data){
		$this->db->insert('p_item', $data);
		return $this->db->affected_rows();
		
	}

	public function updateItem($data, $id){
		$this->db->update('p_item', $data, ['item_id' => $id]);
		return $this->db->affected_rows();
		
	}

}

/* End of file p_item_model.php */

?>
