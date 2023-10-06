<style>

	.heart:hover{
		transform: scale(1.2);
	}
</style>

<div style="position:relative;" class="col-sm-6 col-md-4 col-lg-3 m-2 text-center bg-light">
	<?php
		
		$heart_color = $like->userLiked(user('id'), $row->id) ? 'rgb(255, 48, 64)' : 'rgb(245, 245, 245)' ;

		$likes = $like->getLikes($row->id);
		if($likes == 0)
			$likes = "";

		$comments = $comment->getComments($row->id);
		if($comments == 0)
			$comments = "";
	?>
	<div onclick="post.like('<?=$row->id?>',this)" class="heart p-2 bg-info border border-light" style="width:60px;transition: all 0.3s cubic-bezier(.68,-0.55,.27,1.55);position: absolute;right: 10px;cursor: pointer;">
		
		<svg style="font-size: 12px;" fill="<?=$heart_color?>" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.435c-1.989-5.399-12-4.597-12 3.568 0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-8.118-10-8.999-12-3.568z"/></svg>
		
		<span class="js-likes-count"><?=$likes?></span>
	</div>

	<div onclick="window.location='<?=ROOT?>/photo/<?=$row->id?>'" class="heart p-2 bg-info border border-light" style="width:60px;transition: all 0.3s cubic-bezier(.68,-0.55,.27,1.55);position: absolute;top: 48px;right: 10px;cursor: pointer;">
		
		<svg style="font-size: 12px;" fill="#fff"width="24" height="24" viewBox="0 0 24 24"><path d="M.054 23c.971-1.912 2.048-4.538 1.993-6.368-1.308-1.562-2.047-3.575-2.047-5.625 0-5.781 5.662-10.007 12-10.007 6.299 0 12 4.195 12 10.007 0 6.052-6.732 11.705-15.968 9.458-1.678 1.027-5.377 2.065-7.978 2.535z"/></svg>
		
		<span class="js-likes-count"><?=$comments?></span>
	</div>

	<a href="<?=ROOT?>/photo/<?=$row->id?>">

		<?php if(imageCount($row) == 4) :?>
			<div style="display:flex; flex-wrap: wrap;" class="img-thumbnail">
				<img src="<?=get_image($image->getThumbnail($row->image,250,251))?>" class="" style="width: 50%; object-fit: cover;" >
				<img src="<?=get_image($image->getThumbnail($row->image1,250,251))?>" class="" style="width: 50%; object-fit: cover;" >
				<img src="<?=get_image($image->getThumbnail($row->image2,250,251))?>" class="" style="width: 50%; object-fit: cover;" >
				<img src="<?=get_image($image->getThumbnail($row->image3,250,251))?>" class="" style="width: 50%; object-fit: cover;" >
			</div>
		
		<?php elseif(imageCount($row) == 3) :?>
			<div style="display:flex; flex-wrap: wrap;" class="img-thumbnail">
				<img src="<?=get_image($image->getThumbnail($row->image,250,251))?>" class="" style="width: 100%; height: 151px; object-fit: cover;" >
				<img src="<?=get_image($image->getThumbnail($row->image1,250,251))?>" class="" style="width: 50%; object-fit: cover;" >
				<img src="<?=get_image($image->getThumbnail($row->image2,250,251))?>" class="" style="width: 50%; object-fit: cover;" >
			</div>
		
		<?php elseif(imageCount($row) == 2) :?>
			<div style="display:flex" class="img-thumbnail">
				<img src="<?=get_image($image->getThumbnail($row->image,250,251))?>" class="" style="width: 50%; height: 350px; object-fit: cover; flex: 1"  >
				<img src="<?=get_image($image->getThumbnail($row->image1,250,251))?>" class="" style="width: 50%; height: 350px; object-fit: cover; flex: 1"  >
			</div>
		
		<?php else:?>
			<img src="<?=get_image($image->getThumbnail($row->image,250,251))?>" class="img-thumbnail" style="width: 100%;"  >
			
		<?php endif;?>
		
		<div class="card-header"><?=esc($row->title)?></div>
	</a>
</div>