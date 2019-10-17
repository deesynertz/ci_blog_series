<div class="container">
	<h3><?= $heading; ?></h3>
	<hr>
	<a href="<?php echo base_url('pagecontroller/addpost'); ?>" class="btn btn-primary">Add post</a>
	<br>
        <table class="table table-bordered table-responsive">
        	<thead>
        		<tr>
        			<th>ID</th>
        			<th>Tittle</th>
        			<th>Description</th>
        			<th>By</th>
        			<th>posted at</th>
        			<th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
        	<?php if($allposts) : ?>
        		<?php foreach($allposts as $allpost) : ?>
	        		<tr>
	        			<td><?php echo $allpost->pID; ?></td>
	        			<td><?php echo $allpost->tittle; ?></td>
	        			<td><?php echo $allpost->description; ?></td>
	        			<td><?php echo $allpost->username; ?></td>
	        			<td><?php echo $allpost->cr_at; ?></td>
	        			<td>
	        				<a href="<?php echo base_url(); ?>" class="btn btn-info">Edit</a>
	        				<a href="<?php echo base_url(); ?>" class="btn btn-danger">Delete</a>
	        			</td>
	        		</tr>
        		<?php endforeach; ?>
        	<?php endif; ?>
        	</tbody>
        </table>
</div>