<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Model\Photo;
use \Model\Image;
use \Model\Comment;
use \Model\Like;

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
		$comment  = new Comment;
		$like  = new Like;

		$this->view('home', compact('title','rows','image','like','comment'));
	}

}
