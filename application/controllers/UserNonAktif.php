<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserNonAktif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('userNonAktif_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row'] = $this->userNonAktif_m->get();
        $this->template->load('template', 'userNonAktif/userNonAktif_data', $data);
    }

    public function edit()
    {
        $this->load->helper('security');
        $id = $this->input->post('user_id');

        $this->userNonAktif_m->edit($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'User has been successfully activated!!');
        }
        echo "<script>window.location='" . site_url('userNonAktif') . "'</script>";
    }
}
