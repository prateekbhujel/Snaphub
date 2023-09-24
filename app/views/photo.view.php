<?php $this->view('includes/header', $data); ?>
    

	<div class="p-4 text-center"><h3>Single Photo View</h3></div>
	<div class="row p-4 justify-content-center">
		
		<?php if (!empty($row)) :?>

			<div class="col-sm-12 m-2 text-center bg-light">
					<div class="card-header"> <h4> <?=esc($row->title); ?> </h4></div>
					<div class="card-header"> <i> By:<?=esc($row->user_id);?> </i></div>
					<img src="<?=get_image($row->image);?>" class="img-thumbnail">
					<br>
				<a href="<?=ROOT?>/photo/<?=$row->id?>">
					Delete Image
				</a>
			</div>

		<?php else:?>
			<div class="p-2 text-center alert alert-danger"> Error:Image Not Found !</div>
		<?php endif;?>

	</div>

<?php $this->view('includes/footer', $data); ?>
    