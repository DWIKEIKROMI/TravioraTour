<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$this->db->where('status', 'Y');
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null)
	{
		$this->db->from('user');
		if ($id != null) {
			$this->db->where('user_id', $id);
		}
		$query = $this->db->where('status', 'Y')->get();
		return $query;
	}

	public function add($post)
	{
		$params['name'] = $post['fullname'];
		$params['username'] = $post['username'];
		$params['gender'] = $post['gender'];
		$params['email'] = $post['email'];
		$params['password'] = sha1($post['password']);
		$params['address'] = $post['address'];
		$params['level'] = $post['level'];
		$params['status'] = "N";
		$params['avatar'] = $post['image'];
		$params['token'] = random_string('alnum', 64);
		$this->db->insert('user', $params);
	}

	public function addRegister($post)
	{
		$params['name'] = $post['fullname'];
		$params['username'] = $post['username'];
		$params['email'] = $post['email'];
		$params['password'] = sha1($post['password']);
		$params['address'] = $post['address'];
		$params['level'] = $post['level'];
		if ($post['level'] == 2) {
			$params['status'] = "N";
		} else {
			$params['status'] = "Y";
		}
		$params['token'] = random_string('alnum', 64);
		$this->db->insert('user', $params);

		return $params;
	}

	public function del($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('user');
	}

	public function edit($post)
	{
		$params['name'] = $post['fullname'];
		$params['username'] = $post['username'];
		$params['gender'] = $post['gender'];
		$params['email'] = $post['email'];
		if (!empty($post['password'])) {
			$params['password'] = sha1($post['password']);
		}
		$params['address'] = $post['address'];
		$params['level'] = $post['level'];
		$params['status'] = 'Y';
		$params['avatar'] = $post['image'];
		$this->db->where('user_id', $post['user_id']);
		$this->db->update('user', $params);
	}

	public function editStatus($id)
	{
		$params = [
			'status' => 'N'
			// ,
			// 'updated ' => date('Y-m-d  H:i:s')
		];
		$this->db->where('user_id', $id);
		$this->db->update('user', $params);
	}

	public function verif($username, $token)
	{
		$this->db->from('user');
		$query = $this->db->where('username', $username)->get()->row();

		if ($query->token != NULL && $query->token == $token) {
			$this->db->where('username', $username);
			$this->db->update('user', ['token' => random_string('alnum', 64)]);

			return TRUE;
		}

		return FALSE;
	}

	public function mail($email)
	{
		$this->db->from('user');
		$result = $this->db->where('email', $email)->get()->row();

		return $result;
	}

	public function changepassword($password, $username)
	{
		$this->db->where('username', $username);
		$this->db->update('user', ['password' => sha1($password)]);
	}
}
