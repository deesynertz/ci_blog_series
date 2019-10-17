<div class="container">
	<h3><?= $heading; ?></h3>
	<hr>
	<a href="<?php echo base_url('pagecontroller'); ?>" class="btn btn-primary">Back</a>
	<br>

	<form class="" method="POST" action="<?php echo base_url('pagecontroller/creatpost'); ?>">
		<div class="form-group">
		    <label>Tittle</label>
		    <input type="text" class="form-control" placeholder="Tittle" required>
		</div>
		<div class="form-group">
		    <label>description</label>
		    <textarea class="form-control" name="description" placeholder="Write anything" required></textarea>
		 </div>

		 <div class="form-group">
		 	<input type="submit" value="Submit" class="btn btn-default">
		 </div>
	</form>
        
</div>