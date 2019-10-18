<div class="container">
	<div class="row">
	<h3><?= $heading; ?></h3>
        <div class="col-md-6">
			<a href="<?php echo base_url('pagecontroller'); ?>" class="btn btn-primary">Back</a>
			<br>
			<form class="" method="POST" action="<?php echo base_url('pagecontroller/addpost'); ?>">
				<div class="form-group">
				    <label>Tittle</label>
				    <input type="text" name="tittle" value="<?php echo set_value('tittle'); ?>" class="form-control" placeholder="Tittle">
				    <?php echo form_error('tittle')?>
				</div>
				<div class="form-group">
				    <label>description</label>
				    <textarea class="form-control" value="<?php echo set_value('description'); ?>" name="description" placeholder="Write anything"></textarea>
				    <?php echo form_error('description')?>
				 </div>

				 <div class="form-group">
				 	<input type="submit" value="Submit" class="btn btn-default">
				 </div>
			</form>
        </div>
    </div>      
</div>