<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Type extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('type_m');
        $this->load->model('Cetak_m');
    }


    public function index()
    {
        $data['row'] = $this->type_m->get();
        $this->template->load('template', 'product/type/type_data', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->type_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->type_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data has been successfully saved');
        }
        redirect('type');
    }

    public function add()
    {
        $type = new stdClass();
        $type->type_id = null;
        $type->name = null;
        $type->status = null;
        $data = [
            'page' => 'add',
            'row' => $type
        ];
        $this->template->load('template', 'product/type/type_form', $data);
    }

    public function edit($id)
    {
        $query = $this->type_m->get($id);
        if ($query->num_rows() > 0) {
            $type = $query->row();
            $data = [
                'page' => 'edit',
                'row' => $type
            ];
            $this->template->load('template', 'product/type/type_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            $this->session->set_flashdata('success', 'data not found');
            redirect('type');
        }
    }

    public function delete()
    {
        $id = $this->input->post('type_id');
        $this->type_m->del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'data has been successfully deleted');
        }
        redirect('type');
    }
    public function laporan_pdf()
    {
        $data['title'] = 'Report Type';
        $data['type'] = $this->Cetak_m->viewType();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_type.pdf";
        $this->pdf->load_view('product/type/laporan', $data);
    }
}
