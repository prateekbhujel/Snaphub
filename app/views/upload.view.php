
 <?php $this->view('includes/header', $data); ?>
    
<div class= "mx-auto col-md-4 bg-light shadow m-4 p-4 border ">
	
	<h1>Upload Image</h1>

	<form method="post">

		<input type ="email" class="my-3 form-control" value="<?=old_value('title')?>" name="title" placeHolder="example@email.com">
		<div><small class="text-danger"><?=$user->getError('title')?></small></div>

		<input type ="password" class="my-3 form-control" value="<?=old_value('password')?>" name="password" placeHolder="Type Your Password">
		<div><small class="text-danger"><?=$user->getError('password')?></small></div>
		
		<button class="my-3 btn btn-primary">Login</button>
	</form>

		
</div>

<?php $this->view('includes/footer', $data); ?>
