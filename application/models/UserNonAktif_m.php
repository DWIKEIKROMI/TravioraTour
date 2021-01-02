<?php defined('BASEPATH') or exit('No direct script access allowed');

class UserNonAktif_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->where('status', 'N')->get();
        return $query;
    }

    public function edit($id)
    {
        $params = [
            'status' => 'Y'
            // ,
            // 'updated ' => date('Y-m-d  H:i:s')
        ];
        $this->db->where('user_id', $id);
        $this->db->update('user', $params);
    }
}
