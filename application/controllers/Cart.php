<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('cart_m');
	}

	public function index()
	{
	}

	public function proses()
	{
		check_not_login();
		$post = $this->input->post(null, TRUE);
		$post['total'] = $post['price'] * $post['qty'];
		$post['user_id'] = $this->session->userdata("userid");

		$this->cart_m->add($post);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data has been successfully saved!!');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function add()
	{
	}

	public function edit($id)
	{
	}

	public function delete($id)
	{
		$this->cart_m->del($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data has been successfully deleted!!');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
}
