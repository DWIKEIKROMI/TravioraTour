<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cetak_m');
        $this->load->model('Customer_m');
        $this->load->model(['Item_m', 'category_m', 'type_m', 'cart_m']);
        $this->load->helper('text');
    }

    public function home()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template_c', 'client/home', $data);
    }

    public function java()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template_c', 'client/java', $data);
    }

    public function bali()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template_c', 'client/bali', $data);
    }

    public function lombok()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template_c', 'client/lombok', $data);
    }

    public function tour_unit($id)
    {
        $data['row'] = $this->Item_m->getunit($id);
        $this->template->load('template_c', 'client/item_detail_byunit', $data);
    }

    public function blog()
    {
        $this->load->model('Blog_m');
        $data['row'] = $this->Blog_m->get();
        $this->template->load('template_c', 'client/blog', $data);
    }

    public function blog_detail($id)
    {
        $this->load->model('Blog_m');
        $query = $this->Blog_m->get($id);
        if ($query->num_rows() > 0) {
            $blog = $query->row();
            $data = [
                'row' => $blog
            ];
            $this->template->load('template_c', 'client/blog_detail', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='" . site_url('client/blog') . "'</script>";
        }
    }

    public function privacyPolicy()
    {
        $this->template->load('template_c', 'client/privacy_policy');
    }

    public function termsAndCondition()
    {
        $this->template->load('template_c', 'client/terms_and_condition');
    }

    public function howToBook()
    {
        $this->template->load('template_c', 'client/how_to_book');
    }

    public function chart()
    {
        $data['cart'] = $this->cart_m->get($this->session->userdata("userid"));
        $this->template->load('template_c', 'client/chart', $data);
    }

    public function about_us()
    {
        $this->load->model('Profile_m');
        $data['row'] = $this->Profile_m->get();
        $this->template->load('template_c', 'client/about_us', $data);
    }
    public function contact_us()
    {
        $this->load->model('Contact_m');
        $data['row'] = $this->Contact_m->get();
        $this->template->load('template_c', 'client/contact_us', $data);
    }

    public function item_detail($id)
    {
        $query = $this->Item_m->get($id);
        if ($query->num_rows() > 0) {
            $item = $query->row();
            $data = [
                'row' => $item
            ];
            $this->template->load('template_c', 'client/item_detail', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='" . site_url('client/item') . "'</script>";
        }
    }

    public function tambah_keranjang($id)
    {
        $barang = $this->Item_m->find($id);

        $data = array(
            'id'      => $barang->item_id,
            'qty'     => 1,
            'price'   => $barang->price,
            'name'    => $barang->name
        );

        $this->cart->insert($data);

        redirect('client/home', 'refresh');
    }
    public function hapus_keranjang($id)
    {
        $data = array(
            'rowid'   => $id,
            'qty'     => 0
        );

        $this->cart->update($data);
        redirect('client/chart');
    }
    public function pembayaran()
    {
        $this->template->load('template_c', 'client/pembayaran');
    }
    public function proses_bayar()
    {
        $post = $this->input->post(null, TRUE);
        $data = $this->cart_m->get();
        $is_processed = $this->Customer_m->index($post, $data);
        if ($is_processed) {
            $this->load->view('client/proses_bayar');
        } else {
            echo  "maaf pesanan gagal diproses";
        }
    }

    public function logout()
    {
        $params = ['userid', 'level'];
        $this->session->unset_userdata($params);
        redirect('client/home');
    }
}
/* End of file Controllername.php */
