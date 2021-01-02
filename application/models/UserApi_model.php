<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserApi_model extends CI_Model {

	public function getUser($id=null){
		if ($id === null) {
			return $this->db->get('user')->result_array();
		} else {
			return $this->db->get_where('user', ['user_id' => $id])->result_array();
		}
	}

	public function deleteUser(te$id){
		$this->db->delete('user', ['user_id' => $id]);
		return $this->db->affected_rows();
		
	}

	public function createUser($data){
		$this->db->insert('user', $data);
		return $this->db->affected_rows();
		
	}

	public function updateUser($data, $id){
		$this->db->update('user', $data, ['user_id' => $id]);
		return $this->db->affected_rows();
		
	}
	public function login($uname, $pass)
    {
        return $this->db->get_where('user', ['username' => $uname, 'password' => $pass, 'status' => 'Y'])->result();
    }

}

/* End of file user_model.php */

?>
