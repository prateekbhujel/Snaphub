<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Model\Like;
use \Core\Request;
use \Core\Session;

/**
 * Ajax class
 */
class Ajax
{
	use MainController;

	public function index()
	{
		$ses = New Session;
		$req = New Request;
		$like = new Like;

		$info['error'] = "";


		if($req->posted())
		{
			$post_data = $req->post();
			$info['data_type'] = $post_data['data_type'];

			if(!Session::isLoggedIn())
			{
				$info['error'] = "Error: You need to be Logged In !" ;
				echo json_encode($info);
				die;

			}

			$post_data['user_id'] = $ses->user('id');

			if($post_data['data_type'] == 'like')
			{
				if($row = $like->first(['user_id'=>$post_data['user_id'], 'post_id'=>$post_data['post_id']]))
				{
					$disabled = 1;
					$info['liked'] = false;
					if($row->disabled) {
						$disabled = 0;
						$info['liked'] = true;
					}

					$like->update($row->id,['disabled'=>$disabled]);				
				}else {

					$post_data['disabled'] = 0;
					$like->insert($post_data);

					$info['liked'] = true;
				}

				$info['total_likes'] = $like->getLikes($post_data['post_id']);
			}
		}

		echo json_encode($info);
	}







}
