<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Like class
 */
class Like
{
	
	use Model;

	protected $table = 'likes';
	protected $primaryKey = 'id';
	protected $loginUniqueColumn = 'id';

	protected $allowedColumns = [

		'user_id',
		'post_id',
		'disabled',

	];
	

	public function userLiked(int|string $user_id, int $post_id)
	{
		if($this->first(['user_id'=>$user_id, 'post_id'=>$post_id, 'disabled'=>0]))
		{
			return true;
		}

		return false;
	}


	public function getLikes(int|string $post_id)
	{
		
		$query = "SELECT COUNT(id) AS total from likes WHERE post_id = :post_id && disabled = 0";

		$row   = $this->query($query,['post_id'=>$post_id]);

		return $row[0]->total;
	}













}
