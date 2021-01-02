<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Category extends REST_Controller 
{

	public function __construct($config = 'rest') 
	{
        parent::__construct($config);
        $this->load->model('CategoryApi_model', 'p_category');
    }

	public function index_get() 
	{
        $id = $this->get('category_id');
        if ($id === null) {
            $p_category = $this->p_category->getCategory();
        } else {
            $this->db->where('category_id', $id);
            $p_category = $this->p_category->getCategory($id);
		}
		
        if ($p_category) {
			$this->response([
				'status' => true,
				'data' => $p_category
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
    $id = $this->delete('category_id');
    if ($id === null) {
        $this->response([
            'status' => false,
            'message' => 'provide an category_id'
        ], REST_Controller::HTTP_BAD_REQUEST);
    } else {
        if ($this->p_category->deleteCategory($id) > 0) {
            $this->response([
                'status' => true,
                'category_id' => $id,
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
        'category_id' => $this->post('category_id'),
        'name' => $this->post('name'),
        'created' => $this->post('created'),
        'updated' => $this->post('updated'),
        'status' => $this->post('status'),
    ];


    
    if ($this->p_category->createCategory($data) > 0) {
        $this->response([
            'status' => true,
            'message' => 'new item has been created'
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
    $id = $this->put('category_id');
    $data = [
        'category_id' => $this->post('category_id'),
        'name' => $this->post('name'),
        'created' => $this->post('created'),
        'updated' => $this->post('updated'),
        'status' => $this->post('status'),
    ];
    if ($this->p_category->updateCategory($data, $id) > 0) {
        $this->response([
            'status' => true,
            'message' => 'new item has been updated'
        ], REST_Controller::HTTP_OK);	
    } else {
        $this->response([
            'status' => false,
            'message' => 'failed to update data'
        ], REST_Controller::HTTP_BAD_REQUEST);
    }
}


}