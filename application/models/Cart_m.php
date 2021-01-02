<?php defined('BASEPATH') or exit('No direct script access allowed');

class Cart_m extends CI_Model
{
	public function get($id = null)
	{
		$this->db->from('t_cart');
		if ($id != null) {
			$this->db->where('user_id', $id)
				->join('p_item', 't_cart.item_id = p_item.item_id');
		}
		$query = $this->db->get();
		return $query;
	}

	public function dropdownList()
	{
		$results = $this->db->select('id, name')
			->where('status', 'E')
			->get('p_category')
			->result_array();

		return array_column($results, 'name', 'id');
	}

	public function add($post)
	{
		$this->db->insert('t_cart', $post);
	}

	public function del($id)
	{
		$this->db->where('cart_id', $id);
		$this->db->delete('t_cart');
	}
}
