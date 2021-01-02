<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['Item_m', 'category_m', 'type_m']);
	}

	public function index()
	{
		$data['row'] = $this->Item_m->get();
		$this->template->load('template', 'dashboard', $data);
	}
}
