<?php 

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

use \Core\Request;
use  \Core\Session;
use	  \Model\Model;


/**
 * Upload class
 */
class Upload
{
	use MainController;

	public function index()
	{
		$data['title'] = "Upload";

		$req 	= new Request;
		$ses 	= new Session;
		$photo 	= new Model;

		if ($req->posted())
		{
			$data = $req->post();

			if($photo->validate($data))
			{

					$data['date_created']	= date("Y-m-d H:i:s");
					$data['user_id'] 		= $ses->user('id');
					$data['image'] 			= "";

					$files = $req->files();
					if(!empty($files['image']['name']))
					{
						$folder = 'uplaods/';
						if(!file_exists($folder))
						{
							mkdir($folder, 077, true);
							file_put_contents($folder.'index.php', '');
						}
						$allowed = ['images/jpeg', 'image/png', 'image/webp'];
						
						if(in_array($files['image']['type'], $allowed))
						{

							$data['image'] = $folder . time() . $files['image']['tmp_name'];  
							
							move_uploaded_file($files['image']['tmp_name'], $data['image']);

							$image = new \Model\Image; 
							$image->resize($data['image'], 1000);
						}

					$photo->insert($data);
					redirect('photos');
				}
			}

			$data['errors'] = $photo->errors;
		}
		
		$this->view('upload', $data);
	}

}
