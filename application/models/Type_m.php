<?php defined('BASEPATH') or exit('No direct script access allowed');

class Type_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('p_type');
        if ($id != null) {
            $this->db->where('type_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function dropdownList()
    {
        $results = $this->db->select('id, name')
            ->where('status', 'E')
            ->get('p_type')
            ->result_array();

        return array_column($results, 'name', 'id');
    }

    public function add($post)
    {
        $params = [
            'name' => $post['type_name'],
            'status' => $post['type_status']
        ];
        $this->db->insert('p_type', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['type_name'],
            'status' => $post['type_status'],
            'updated ' => date('Y-m-d  H:i:s')
        ];
        $this->db->where('type_id', $post['id']);
        $this->db->update('p_type', $params);
    }

    public function del($id)
    {
        $this->db->where('type_id', $id);
        $this->db->delete('p_type');
    }
}
