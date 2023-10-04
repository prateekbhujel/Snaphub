<?php $this->view('includes/header', $data); ?>
    

<?php $this->view('includes/hero', $data); ?>

	<div class="p-4"><h3> Featured Photos</h3></div>
	<div class="row p-4 justify-content-center">
		
		<?php if (!empty($rows)) :?>
			<?php foreach($rows as $row) :?>
				<?php $this->view('includes/photo-card', ['row'=>$row,'image'=>$image,'like'=>$like]);?>
			<?php endforeach;?>
		<?php else:?>
			<div class="p-2 text-center alert alert-danger"> Error: No Images Found !</div>
		<?php endif;?>

	</div>

<?php $this->view('includes/footer', $data); ?>


<script>
	var root = '<?=ROOT?>';
</script>

<script src="<?=ROOT?>/assets/js/like.js?v1"></script>