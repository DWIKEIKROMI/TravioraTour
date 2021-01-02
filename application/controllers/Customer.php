<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('customer_m');
        $this->load->model('Cetak_m');
    }

    public function index()
    {
        $data['row'] = $this->customer_m->get();
        $this->template->load('template', 'customer/customer_data', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->customer_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->customer_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data has been successfully saved!!');
        }
        redirect('customer');
    }

    public function add()
    {
        $customer = new stdClass();
        $customer->customer_id = null;
        $customer->name = null;
        $customer->gender = null;
        $customer->phone = null;
        $customer->address = null;
        $data = [
            'page' => 'add',
            'row' => $customer
        ];
        $this->template->load('template', 'customer/customer_form', $data);
    }

    public function edit($id)
    {
        $query = $this->customer_m->get($id);
        if ($query->num_rows() > 0) {
            $customer = $query->row();
            $data = [
                'page' => 'edit',
                'row' => $customer
            ];
            $this->template->load('template', 'customer/customer_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            $this->session->set_flashdata('success', 'Data Not Found!!');
            redirect('customer');
        }
    }

    public function delete($id)
    {
        $this->customer_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil di Hapus')</script>";
        }
        echo "<script>window.location='" . site_url('customer') . "'</script>";
    }
    public function laporan_pdf()
    {
        $data['title'] = 'Report Customer';
        $data['customer'] = $this->Cetak_m->viewCustomer();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_customer.pdf";
        $this->pdf->load_view('customer/laporan', $data);
    }
}
