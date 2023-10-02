<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Model\Image;

/**
 * Profile class
 */
class Profile
{
	use MainController;

	public function index($id = null)
	{	
		$data['title'] = 'User Profile';

		$user 		   = new \Model\User;
		$data['ses']   = $ses = new \Core\Session;

		$id            = $id ?? $ses->user('id');
		$data['row']   = $user->first(['id'=>$id]);

		$this->view('profile', $data);
	}

}
