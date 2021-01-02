<?php defined('BASEPATH') or exit('No direct script access allowed');

class Customer_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('customer');
        if ($id != null) {
            $this->db->where('customer_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['customer_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['addr']
        ];
        $this->db->insert('customer', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['customer_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
            'updated ' => date('Y-m-d  H:i:s')
        ];
        $this->db->where('customer_id', $post['id']);
        $this->db->update('customer', $params);
    }

    public function del($id)
    {
        $this->db->where('customer_id', $id);
        $this->db->delete('customer');
    }

    public function getCart()
    {
        $this->db->get('t_cart');
    }

    public function index($post, $data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $params = [
            'name' => $post['name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'created ' => date('Y-m-d  H:i:s')
        ];
        $this->db->insert('customer', $params);
        $id_invoice = $this->db->insert_id();
        $id_user = $this->session->get_userdata($params);

        foreach ($data->result_array() as $item) {

            $sale = [
                'invoice' => $this->invoice_no(),
                'customer_id' => $id_invoice,
                'total_price' => $item['price'] * $item['qty'],
                'discount' => 0,
                'final_price' => ($item['price'] * $item['qty']),
                'cash' => $item['price'] * $item['qty'],
                'user_id' => $id_user['userid']
            ];
            $this->db->insert('t_sale', $sale);
            $cart = [
                // 'customer_id' => $id_invoice,
                'sale_id' => $this->db->insert_id(),
                'item_id' => $item['item_id'],
                'price' => $item['price'],
                'qty' => $item['qty'],
                'discount_item' => 0,
                'total' => $item['price'] * $item['qty']
            ];
            $this->db->insert('t_sale_detail', $cart);
            $this->db->where('cart_id', $item['cart_id']);
            $this->db->delete('t_cart');
        }


        return true;
    }

    public function invoice_no()
    {
        $sql    = "SELECT MAX(MID(invoice, 9, 4)) AS invoice_no
                FROM t_sale
                WHERE MID(invoice, 3, 6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query  = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $row    = $query->row();
            $n      = ((int) $row->invoice_no) + 1;
            $no     = sprintf("%'.04d", $n);
        } else {
            $no     = "0001";
        }
        $invoice    = "MP" . date('ymd') . $no;
        return $invoice;
    }
}
