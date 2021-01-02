<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Armada extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();

        $this->load->model('armada_m');
        $this->load->model('Cetak_m');
    }

    public function index()
    {
        $data['row'] = $this->armada_m->get();
        $this->template->load('template', 'armada/armada_data', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->armada_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->armada_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data has been successfully saved!!');
        }
        redirect('armada');
    }

    public function add()
    {
        $armada = new stdClass();
        $armada->armada_id  = null;
        $armada->name       = null;
        $armada->address    = null;
        $armada->phone      = null;
        $armada->email      = null;
        $armada->bus        = null;
        $armada->minibus    = null;
        $armada->hiace      = null;
        $armada->note       = null;
        $data               = [
            'page' => 'add',
            'row' => $armada
        ];
        $this->template->load('template', 'armada/armada_form', $data);
    }

    public function edit($id)
    {
        $query = $this->armada_m->get($id);
        if ($query->num_rows() > 0) {
            $armada = $query->row();
            $data = [
                'page' => 'edit',
                'row' => $armada
            ];
            $this->template->load('template', 'armada/armada_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='" . site_url('armada') . "'</script>";
        }
    }

    public function delete()
    {
        $id = $this->input->post('armada_id');
        $this->armada_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil di Hapus')</script>";
        }
        echo "<script>window.location='" . site_url('armada') . "'</script>";
    }
    public function laporan_pdf()
    {
        $data['title'] = 'Report armada';
        $data['armada'] = $this->Cetak_m->viewArmada();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan_armada.pdf";
        $this->pdf->load_view('armada/laporan', $data);
    }
}
