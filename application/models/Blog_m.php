<?php defined('BASEPATH') or exit('No direct script access allowed');

class Blog_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('blog');
        if ($id != null) {
            $this->db->where('blog_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'title'         => $post['title'],
            'image'         => $post['image'],
            'content'       => $post['content'],
            'writer'        => $post['writer']
        ];
        $this->db->insert('blog', $params);
    }

    public function edit($post)
    {
        $params = [
            'title'         => $post['title'],
            'image'         => $post['image'],
            'content'       => $post['content'],
            'writer'        => $post['writer'],
            'updated '      => date('Y-m-d  H:i:s')
        ];
        $this->db->where('blog_id', $post['id']);
        $this->db->update('blog', $params);
    }

    public function del($id)
    {
        $this->db->where('blog_id', $id);
        $this->db->delete('blog');
    }
}
