<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Model\Photo;
use \Model\Image;

/**
 * Photos class
 */
class Photos
{
	use MainController;

	public function index()
	{
		$data['title'] = "Photos";

		$photo 		   = new Photo;

		$photo->limit  = 24;
		$data['rows']  = $photo->findAll();
		$data['image'] = new Image;
		
		$this->view('photos', $data);
	}

}
