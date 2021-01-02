<?php defined('BASEPATH') or exit('No direct script access allowed');

class Armada_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('armada');
        if ($id != null) {
            $this->db->where('armada_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'name'          => $post['armada_name'],
            'address'       => $post['addr'],
            'phone'         => $post['phone'],
            'email'         => $post['email'],
            'bus'           => $post['bus'],
            'minibus'       => $post['minibus'],
            'hiace'         => $post['hiace'],
            'note'          => empty($post['note']) ? null : $post['note'],
        ];
        $this->db->insert('armada', $params);
    }

    public function edit($post)
    {
        $params = [
            'name'          => $post['armada_name'],
            'address'       => $post['addr'],
            'phone'         => $post['phone'],
            'email'         => $post['email'],
            'bus'           => $post['bus'],
            'minibus'       => $post['minibus'],
            'hiace'         => $post['hiace'],
            'note'          => empty($post['note']) ? null : $post['note'],
            'updated '      => date('Y-m-d  H:i:s')
        ];
        $this->db->where('armada_id', $post['id']);
        $this->db->update('armada', $params);
    }

    public function del($id)
    {
        $this->db->where('armada_id', $id);
        $this->db->delete('armada');
    }
}
