<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('category_m');
        $this->load->model('Cetak_m');
    }

    public function index()
    {
        $data['row'] = $this->category_m->get();
        $this->template->load('template', 'product/category/category_data', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->category_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->category_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data has been successfully saved!!');
        }
        redirect('category');
    }

    public function add()
    {
        $category = new stdClass();
        $category->category_id = null;
        $category->name = null;
        $category->status = null;
        $data = [
            'page' => 'add',
            'row' => $category
        ];
        $this->template->load('template', 'product/category/category_form', $data);
    }

    public function edit($id)
    {
        $query = $this->category_m->get($id);
        if ($query->num_rows() > 0) {
            $category = $query->row();
            $data = [
                'page' => 'edit',
                'row' => $category
            ];
            $this->template->load('template', 'product/category/category_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            $this->session->set_flashdata('success', 'data not found');
            redirect('category');
        }
    }

    public function delete($id)
    {
        $this->category_m->del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data has been successfully deleted!!');
        }
        redirect('category');
    }
    public function laporan_pdf()
    {
        $data['title'] = 'Report Category';
        $data['category'] = $this->Cetak_m->viewCategory();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_category.pdf";
        $this->pdf->load_view('product/category/laporan', $data);
    }
}
