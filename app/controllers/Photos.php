<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Model\Photo;
use \Model\Image;
use \Core\Pager;

/**
 * Photos class
 */
class Photos
{
	use MainController;

	public function index()
	{
		$photo 		   = new Photo;

		$limit 		   = 24;
		$pager 		   = new Pager($limit);
		$offset 	   = $pager->offset;

		$photo->limit  = $limit; 
		$photo->offset  = $offset; 
		
		$data['title'] = "All Photos";
		$data['rows']  = $photo->findAll();
		$data['image'] = new Image;
		$data['pager'] = $pager;
		
		$this->view('photos', $data);
	}

}
