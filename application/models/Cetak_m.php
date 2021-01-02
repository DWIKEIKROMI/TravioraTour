<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cetak_m extends CI_Model
{
    public function viewcontact()
    {
        $this->db->select('*');
        $query = $this->db->get('armada');
        return $query->result();
    }
    
}
