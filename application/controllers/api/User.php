<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class User extends REST_Controller 
{

	public function __construct($config = 'rest') 
	{
        parent::__construct($config);
        $this->load->model('UserApi_model', 'user');
    }

	public function index_get() 
	{
        $id = $this->get('user_id');
        if ($id === null) {
            $user = $this->user->getUser();
        } else {
            $this->db->where('user_id', $id);
            $user = $this->user->getUser($id);
		}
		
        if ($user) {
			$this->response([
				'status' => true,
				'data' => $user
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
        $id = $this->delete('user_id');
        if ($id === null) {
			$this->response([
				'status' => false,
				'message' => 'provide an id'
			], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->user->deleteUser($id) > 0) {
				$this->response([
					'status' => true,
					'user_id' => $id,
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
		$data = [
            'user_id' => $this->post('user_id'),
            'name' => $this->post('name'),
            'username' => $this->post('username'),
            'gender' => $this->post('gender'),
            'email' => $this->post('email'),
            'password' => $this->post('password'),
            'address' => $this->post('address'),
            'level' => $this->post('level'),
            'status' => $this->post('status'),

		];

		if ($this->user->createUser($data) > 0) {
			$this->response([
				'status' => true,
				'message' => 'new Useer has been created'
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
		$id = $this->put('user_id');
		$data = [
			'user_id' => $this->post('user_id'),
            'name' => $this->post('name'),
            'username' => $this->post('username'),
            'gender' => $this->post('gender'),
            'email' => $this->post('email'),
            'password' => $this->post('password'),
            'address' => $this->post('address'),
            'level' => $this->post('level'),
            'status' => $this->post('status'),

		];
		if ($this->user->updateUser($data, $id) > 0) {
			$this->response([
				'status' => true,
				'message' => 'new User has been updated'
			], REST_Controller::HTTP_OK);	
		} else {
			$this->response([
				'status' => false,
				'message' => 'failed to update data'
			], REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	public function login_post()
    {
        $uname = $this->post('username');
        $pass = $this->post('password');
        if (!empty($uname) && !empty($pass)) {
            $user = $this->user->login($uname, $pass);
            if ($user) {
                $this->response([
                    'status' => true,
                    'data' => $user
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'data' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'provide a data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
?>
