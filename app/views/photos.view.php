<?php $this->view('includes/header', $data); ?>
    

	<div class="p-4"><h3>Photos</h3></div>
	<div class="row p-4 justify-content-center">
		
		<?php if (!empty($rows)) :?>
			<?php foreach($rows as $row) :?>
				<div class="col-sm-2 m-2 text-center bg-light">
					<a href="">
						<img src="<?=get_image($image->getThumbnail($row->image, 251, 250));?>" class="img-thumbnail" sstyle="object-fit: cover;width: 250px; height: 250px;">
						<div class="card-header"> <?=esc($row->title); ?> </div>
					</a>
				</div>
			<?php endforeach;?>
		<?php else:?>
			<div class="p-2 text-center alert alert-danger"> Error: No Images Found !</div>
		<?php endif;?>

	</div>

<?php $this->view('includes/footer', $data); ?>
    