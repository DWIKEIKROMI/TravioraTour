<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['unit_m']);
        $this->load->model('Cetak_m');
    }

    public function index()
    {
        $data['row'] = $this->unit_m->get();
        $this->template->load('template', 'product/unit/unit_data', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->unit_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->unit_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data has been successfully saved!!');
        }
        redirect('unit');
    }

    public function add()
    {
        $unit           = new stdClass();
        $unit->unit_id  = null;
        $unit->name     = null;
        $unit->status     = null;

        $data = array(
            'page'      => 'add',
            'row'       =>  $unit
        );
        $this->template->load('template', 'product/unit/unit_form', $data);
    }

    public function edit($id)
    {
        $query = $this->unit_m->get($id);
        if ($query->num_rows() > 0) {
            $unit = $query->row();
            $data = [
                'page'  => 'edit',
                'row'   => $unit
            ];
            $this->template->load('template', 'product/unit/unit_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            $this->session->set_flashdata('success', 'Data Not Found!!');
            redirect('unit');
        }
    }

    public function delete($id)
    {
        $this->unit_m->del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data has been successfully deleted!!');
        }
        redirect('unit');
    }

    public function laporan_pdf()
    {
        $data['title']  = 'Report unit';
        $data['unit']   = $this->Cetak_m->viewUnit();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_unit.pdf";
        $this->pdf->load_view('product/unit/laporan', $data);
    }
}
