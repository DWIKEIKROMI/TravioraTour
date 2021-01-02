<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('Profile_m');
        $this->load->library('form_validation');
        $this->load->model('Cetak_m');
    }

    public function index()
    {
        $data['row'] = $this->Profile_m->get();
        $this->template->load('template', 'profile/profile_data', $data);
    }

    public function proses()
    {
        $config['upload_path']      = './assets/img/profile/';
        $config['allowed_types']    = 'gif|jpg|jpeg|png';
        $config['max_size']         = 5120;
        $config['file_name']       = 'profile-' . date('dmy') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['edit'])) {
            if (@$_FILES['logo']['name'] != null) {
                if ($this->upload->do_upload('logo')) {
                    $profile = $this->Profile_m->get($post['profile_id'])->row();
                    if ($profile->logo != null) {
                        $target_file = './assets/img/profile/' . $profile->logo;
                        unlink($target_file);
                    }
                    $post['logo']       =   $this->upload->data('file_name');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('profile/edit');
                }
            } else {
                $post['logo']  = $post['oldLogo'];
            }

            // banner utama
            if (@$_FILES['bannerutama']['name'] != null) {
                if ($this->upload->do_upload('bannerutama')) {
                    $profile = $this->Profile_m->get($post['profile_id'])->row();
                    if ($profile->banner_utama != null) {
                        $target_file = './assets/img/profile/' . $profile->banner_utama;
                        unlink($target_file);
                    }
                    $post['bannerutama']       =   $this->upload->data('file_name');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('profile/edit');
                }
            } else {
                $post['bannerumum']  = $post['oldBUT'];
            }

            // banner umum
            if (@$_FILES['bannerumum']['name'] != null) {
                if ($this->upload->do_upload('bannerumum')) {
                    $profile = $this->Profile_m->get($post['profile_id'])->row();
                    if ($profile->banner_umum != null) {
                        $target_file = './assets/img/profile/' . $profile->banner_umum;
                        unlink($target_file);
                    }
                    $post['bannerumum']       =   $this->upload->data('file_name');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('profile/edit');
                }
            } else {
                $post['bannerumum']  = $post['oldBUM'];
            }

            $this->Profile_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data has been successfully saved!!');
            }
            redirect('profile');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('webname', 'WebName', 'required');
        $this->form_validation->set_rules('statusname', 'StatusName', 'required');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('address1', 'Address1', 'required');
        $this->form_validation->set_rules('email1', 'Email1', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('whatsapp', 'Whatsapp', 'required');
        $this->form_validation->set_rules('webversion', 'WebVersion', 'required');

        $this->form_validation->set_message('required', 'The %s has not been filled');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->Profile_m->get($id);
            if ($query->num_rows() > 0) {
                $profile = $query->row();
                $data = [
                    'page' => 'edit',
                    'row' => $profile
                ];
                $this->template->load('template', 'profile/profile_form', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan');";
                echo "window.location='" . site_url('profile') . "'</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->profile_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil diupdate')</script>";
            }
            echo "<script>window.location='" . site_url('profile') . "'</script>";
        }
    }
}
