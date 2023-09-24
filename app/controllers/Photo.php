<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Model\Image;

/**
 * Photo class
 */
class Photo
{
	use MainController;

	public function index($id = null)
	{
		$data['title'] = "Photo";
		
		$photo 		   = new \Model\Photo;


		$data['row']  = $photo->first(['id'=>$id]);

		$data['image'] = new Image;

		$this->view('photo', $data);
	}

}
