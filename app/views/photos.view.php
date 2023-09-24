<?php $this->view('includes/header', $data); ?>
    

	<div class="p-4"><h3>Photos</h3></div>
	<div class="row p-4 justify-content-center">
		
		<?php if (!empty($rows)) :?>
			<?php foreach($rows as $row) :?>
				<?php $this->view('includes/photo-card', ['row'=>$row,'image'=>$image]);?>
			<?php endforeach;?>
		<?php else:?>
			<div class="p-2 text-center alert alert-danger"> Error: No Images Found !</div>
		<?php endif;?>

	</div>

<?php $this->view('includes/footer', $data); ?>
    