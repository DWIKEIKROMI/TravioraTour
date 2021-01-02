<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Blog extends REST_Controller 
{
    public function __construct($config = 'rest') 
	{
        parent::__construct($config);
        $this->load->model('BlogApi_model', 'blog');
    }

public function index_get() 
	{
        $id = $this->get('blog_id');
        if ($id === null) {
            $blog = $this->blog->getBlog();
        } else {
            $this->db->where('blog_id', $id);
            $blog = $this->blog->getBlog($id);
		}
		
        if ($blog) {
			$this->response([
				'status' => true,
				'data' => $blog
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
        $id = $this->delete('blog_id');
        if ($id === null) {
			$this->response([
				'status' => false,
				'message' => 'provide an id'
			], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->blog->deleteBlog($id) > 0) {
				$this->response([
					'status' => true,
					'blog_id' => $id,
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
            'blog_id' => $this->post('blog_id'),
            'title' => $this->post('title'),
            'isi' => $this->post('isi'),
            'image' => $this->post('image'),
            'writer' => $this->post('writer'),
            'created' => $this->post('created'),
            'updated' => $this->post('updated'),
		];

		if ($this->blog->createBlog($data) > 0) {
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
		$id = $this->put('blog_id');
		$data = [
			'blog_id' => $this->post('blog_id'),
            'title' => $this->post('title'),
            'isi' => $this->post('isi'),
            'image' => $this->post('image'),
            'writer' => $this->post('writer'),
            'created' => $this->post('created'),
            'updated' => $this->post('updated'),
		];
		if ($this->blog->updateBlog($data, $id) > 0) {
			$this->response([
				'status' => true,
				'message' => 'new blog has been updated'
			], REST_Controller::HTTP_OK);	
		} else {
			$this->response([
				'status' => false,
				'message' => 'failed to update data'
			], REST_Controller::HTTP_BAD_REQUEST);
		}
    }
}