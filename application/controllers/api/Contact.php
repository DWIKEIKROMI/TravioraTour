<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class Contact extends REST_Controller
{

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('ContactApi_model', 'contact');
	}

	public function index_get()
	{
		$id = $this->get('contact_id');
		if ($id === null) {
			$contact = $this->contact->getContact();
		} else {
			$this->db->where('contact_id', $id);
			$contact = $this->contact->getContact($id);
		}

		if ($contact) {
			$this->response([
				'status' => true,
				'data' => $contact
			], REST_Controller::HTTP_OK);
		} else {
			$this->response([
				'status' => true,
				'data' => 'id not found'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}

	// Delete
	public function index_delete()
	{
		$id = $this->delete('contact_id');
		if ($id === null) {
			$this->response([
				'status' => false,
				'message' => 'provide an id'
			], REST_Controller::HTTP_BAD_REQUEST);
		} else {
			if ($this->contact->deleteContact($id) > 0) {
				$this->response([
					'status' => true,
					'contact_id' => $id,
					'message' => 'deleted'
				], REST_Controller::HTTP_OK);
			} else {
				$this->response([
					'status' => false,
					'message' => 'id not found!'
				], REST_Controller::HTTP_BAD_REQUEST);
			}
		}
	}

	// post
	public function index_post()
	{
		$request = [
			'name' => $this->post('name'),
			'email' => $this->post('email'),
			'subject' => $this->post('subject'),
			'pesan' => $this->post('pesan')
		];

		if ($this->contact->createContact($request) > 0) {
			$this->response([
				'status' => true,
				'message' => 'new Contact has been created'
			], REST_Controller::HTTP_CREATED);
		} else {
			$this->response([
				'status' => false,
				'message' => 'failed to create new data'
			], REST_Controller::HTTP_BAD_REQUEST);
		}
	}

	// Put
	public function index_put()
	{
		$id = $this->put('contact_id');
		$data = [
			'contact_id' => $this->post('contact_id'),
			'name' => $this->post('name'),
			'email' => $this->post('email'),
			'subject' => $this->post('subject'),
			'pesan' => $this->post('pesan'),
			'answer' => $this->post('answer'),
			'created' => $this->post('created'),
			'updated' => $this->post('updated'),
		];
		if ($this->contact->updateContact($data, $id) > 0) {
			$this->response([
				'status' => true,
				'message' => 'new contact has been updated'
			], REST_Controller::HTTP_OK);
		} else {
			$this->response([
				'status' => false,
				'message' => 'failed to update data'
			], REST_Controller::HTTP_BAD_REQUEST);
		}
	}
}
