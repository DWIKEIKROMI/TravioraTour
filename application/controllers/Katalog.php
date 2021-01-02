<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Katalog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['Item_m', 'category_m', 'type_m']);
        $this->load->model('Cetak_m');
    }


    public function index()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template_c', 'client\katalog', $data);
    }


    public function detail($id)
    {
        $query = $this->Item_m->get($id);
        $this->template->load('template_c', 'client\detail');
    }

}

/* End of file Katalog.php */
