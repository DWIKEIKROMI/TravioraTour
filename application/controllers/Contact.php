<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Contact_m');
        $this->load->model('Cetak_m');
    }

    public function index()
    {
        $data['row'] = $this->Contact_m->get();
        $this->template->load('template', 'contact/contact_data', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->contact_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->contact_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data has been successfully saved!!');
        }
        redirect('contact');
    }

    public function add()
    {
        $contact = new stdClass();
        $contact->contact_id    = null;
        $contact->name          = null;
        $contact->email         = null;
        $contact->subject       = null;
        $contact->pesan         = null;
        $contact->answer        = null;
        $data = [
            'page' => 'add',
            'row' => $contact
        ];
        $this->load->library('form_validation');

        $this->form_validation->set_rules('emailto','Email To:','required');
        $this->form_validation->set_rules('subject','Subject','required');

        if($this->form_validation->run() == FALSE){
            $this->template->load('template', 'contact/contact_form_answer',$data);
        }else{
            echo"Proses simpan data contact";
        }
        
    }

    public function edit($id)
    {
        $query = $this->Contact_m->get($id);
        if ($query->num_rows() > 0) {
            $contact = $query->row();
            $data = [
                'page' => 'edit',
                'row' => $contact
            ];
            $this->template->load('template', 'contact/contact_form_answer', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            $this->session->set_flashdata('success', 'Data Not Found!!');
            redirect('contact');
        }
    }

    public function del()
    {
        $id = $this->input->post('contact_id');
        $this->Contact_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil di Hapus')</script>";
        }
        echo "<script>window.location='" . site_url('contact') . "'</script>";
    }

    public function send_email()
    {
    }

    public function laporan_pdf()
    {
        $data['title'] = 'Report contact';
        $data['contact'] = $this->Cetak_m->viewcontact();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_contact.pdf";
        $this->pdf->load_view('contact/laporan', $data);
    }

}
