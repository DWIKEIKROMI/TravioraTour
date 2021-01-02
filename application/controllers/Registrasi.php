<?php

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_m');
    }
    public function index()
    {
        $this->form_validation->set_rules('fullname', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules(
            'passconf',
            'Password Confirmation',
            'required|matches[password]',
            ['matches' => '
            Confirm password does not match with password']
        );
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_message('required', 'The %s has not been filled');
        $this->form_validation->set_message('is_unique', 'This %s has already been used');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('Registrasi');
            $this->load->view('templates/footer');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->addRegister($post);

            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Registration is successfull, if you are user lets do login. If you are admin, Please wait for confirmation from Admin via email to login :)')</script>";
            }
            echo "<script>window.location='" . site_url('auth/login') . "'</script>";
        }
    }
}
