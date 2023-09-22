<?php $this->view('includes/header', $data); ?>
    

<?php $this->view('includes/hero', $data); ?>

	<div class="p-4"><h3> Featured Photos</h3></div>
	<div class="row p-4 justify-content-center">
		
		<?php if (!empty($rows)) :?>
			<?php foreach($rows as $row) :?>
				<div class="col-sm-4 col-md-3 col-lg-2 m-2 text-center bg-light">
					<a href="<?=ROOT?>/photo/">
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
    