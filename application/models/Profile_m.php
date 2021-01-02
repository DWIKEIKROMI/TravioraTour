<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profile_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('profile_web');
        if ($id != null) {
            $this->db->where('profile_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {

        $params = [
            'web_name'     => $post['webname'],
            'status_name'  => $post['statusname'],
            'about'        => $post['about'],
            'address1'     => $post['address1'],
            'address2'     => $post['address2'],
            'email1'       => $post['email1'],
            'email2'       => $post['email2'],
            'facebook'     => $post['facebook'],
            'instagram'    => $post['instagram'],
            'twitter'      => $post['twitter'],
            'youtube'      => $post['youtube'],
            'phone'        => $post['phone'],
            'whatsapp'     => $post['whatsapp'],
            'web_version'  => $post['webversion']
        ];
        if ($post['logo'] != null) {
            $params['logo']     = $post['logo'];
        }
        if ($post['bannerutama'] != null) {
            $params['banner_utama'] = $post['bannerutama'];
        }
        if ($post['bannerumum'] != null) {
            $params['banner_umum']  = $post['bannerumum'];
        }
        $this->db->where('profile_id', $post['profile_id']);
        $this->db->update('profile_web', $params);
    }
}
