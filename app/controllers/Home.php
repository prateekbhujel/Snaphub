<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Model\Photo;
use \Model\Image;

/**
 * home class
 */
class Home
{
	use MainController;

	public function index()
	{
		$title = 'Home';
		               
		$photo         = new Photo;
                       
		$photo->limit  = 12;
		$rows  = $photo->findAll();
		$image = new Image;

		$this->view('home', compact('title','rows','image'));
	}

}
