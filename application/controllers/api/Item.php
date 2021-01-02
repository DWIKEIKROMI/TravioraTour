<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Item extends REST_Controller 
{

	public function __construct($config = 'rest') 
	{
        parent::__construct($config);
        $this->load->model('ItemApi_model', 'p_item');
    }

	public function index_get() 
	{
        $id = $this->get('item_id');
        if ($id === null) {
            $p_item = $this->p_item->getItem();
        } else {
            $this->db->where('item_id', $id);
            $p_item = $this->p_item->getItem($id);
		}
		
        if ($p_item) {
			$this->response([
				'status' => true,
				'data' => $p_item
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
        $id = $this->delete('item_id');
        if ($id === null) {
			$this->response([
				'status' => false,
				'message' => 'provide an id'
			], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->p_item->deleteItem($id) > 0) {
				$this->response([
					'status' => true,
					'item_id' => $id,
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
            'item_id' => $this->post('item_id'),
            'barcode' => $this->post('barcode'),
            'name' => $this->post('name'),
            'address' => $this->post('address'),
            'image' => $this->post('image'),
            'duration' => $this->post('duration'),
            'groupsize' => $this->post('groupsize'),
            'language' => $this->post('language'),
            'overview' => $this->post('overview'),
            'type_id' => $this->post('type_id'),
            'category_id' => $this->post('category_id'),
            'stock' => $this->post('stock'),
            'price' => $this->post('price'),
            'created' => $this->post('created'),
            'updated' => $this->post('updated'),
		];

		if ($this->p_item->createItem($data) > 0) {
			$this->response([
				'status' => true,
				'message' => 'new Item has been created'
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
		$id = $this->put('item_id');
		$data = [
			'item_id' => $this->post('item_id'),
            'barcode' => $this->post('barcode'),
            'name' => $this->post('name'),
            'address' => $this->post('address'),
            'image' => $this->post('image'),
            'duration' => $this->post('duration'),
            'groupsize' => $this->post('groupsize'),
            'language' => $this->post('language'),
            'overview' => $this->post('overview'),
            'type_id' => $this->post('type_id'),
            'category_id' => $this->post('category_id'),
            'stock' => $this->post('stock'),
            'price' => $this->post('price'),
            'created' => $this->post('created'),
            'updated' => $this->post('updated'),
		];
		if ($this->p_item->updateItem($data, $id) > 0) {
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
?>
