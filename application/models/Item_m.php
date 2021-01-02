<?php defined('BASEPATH') or exit('No direct script access allowed');

class Item_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('p_item.*, p_category.name as category_name, p_type.name as type_name, p_unit.name as unit_name');
        $this->db->from('p_item');
        $this->db->join('p_category', 'p_category.category_id = p_item.category_id');
        $this->db->join('p_type', 'p_type.type_id = p_item.type_id');
        $this->db->join('p_unit', 'p_unit.unit_id = p_item.unit_id');
        // $this->db->from('p_item');
        if ($id != null) {
            $this->db->where('item_id', $id);
        }
        $this->db->order_by('barcode', 'asc');
        $query = $this->db->get();
        return $query;
    }

    public function getunit($id = null)
    {
        $this->db->select('p_item.*, p_category.name as category_name, p_type.name as type_name, p_unit.name as unit_name');
        $this->db->from('p_item');
        $this->db->join('p_category', 'p_category.category_id = p_item.category_id');
        $this->db->join('p_type', 'p_type.type_id = p_item.type_id');
        $this->db->join('p_unit', 'p_unit.unit_id = p_item.unit_id');
        // $this->db->from('p_item');
        if ($id != null) {
            $this->db->where('p_item.unit_id', $id);
        }
        $this->db->order_by('barcode', 'asc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'barcode'       => $post['barcode'],
            'name'          => $post['item_name'],
            'address'       => $post['item_address'],
            'image'         => $post['image'],
            'image2'         => $post['image2'],
            'image3'         => $post['image3'],
            'duration'      => $post['item_duration'],
            'groupsize'     => $post['item_grupsize'],
            'type_id'       => $post['type'],
            'category_id'   => $post['category'],
            'unit_id'       => $post['unit'],
            'language'      => $post['item_language'],
            'overview'      => $post['item_overview'],
            'price'         => $post['price'],
            'stock'         => $post['stock']
        ];
        $this->db->insert('p_item', $params);
    }

    public function edit($post)
    {
        $params = [
            'barcode'       => $post['barcode'],
            'name'          => $post['item_name'],
            'address'       => $post['item_address'],
            'duration'      => $post['item_duration'],
            'groupsize'     => $post['item_grupsize'],
            'type_id'       => $post['type'],
            'category_id'   => $post['category'],
            'unit_id'       => $post['unit'],
            'language'      => $post['item_language'],
            'overview'      => $post['item_overview'],
            'price'         => $post['price'],
            'stock'         => $post['stock'],
            'updated '      => date('Y-m-d  H:i:s')
        ];
        if ($post['image'] != null) {
            $params['image'] = $post['image'];
        }
        if ($post['image2'] != null) {
            $params['image2'] = $post['image2'];
        }
        if ($post['image3'] != null) {
            $params['image3'] = $post['image3'];
        }
        $this->db->where('item_id', $post['id']);
        $this->db->update('p_item', $params);
    }

    function check_barcode($code, $id = null)
    {
        $this->db->from('p_item');
        $this->db->where('barcode', $code);
        if ($id != null) {
            $this->db->where('item_id !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('item_id', $id);
        $this->db->delete('p_item');
    }

    public function update_stock_in($data)
    {
        $qty    = $data['qty'];
        $id     = $data['item_id'];
        $sql    = "UPDATE p_item SET stock = stock + '$qty' WHERE item_id = '$id' ";
        $this->db->query($sql);
    }

    public function update_stock_out($data)
    {
        $qty    = $data['qty'];
        $id     = $data['item_id'];
        $sql    = "UPDATE p_item SET stock = stock - '$qty' WHERE item_id = '$id' ";
        $this->db->query($sql);
    }

    public function find($id)
    {
        $result = $this->db->where('item_id', $id)
            ->limit(1)
            ->get('p_item');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
