<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-10">
                <h3><?= $heading; ?></h3> 
            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url('pagecontroller/addpost'); ?>" class="btn btn-primary">Add post</a>
             </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11">
            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tittle</th>
                    <th>Description</th>
                    <th>By</th>
                    <th>posted at</th>
                    <th width="100">Update</th>
                    <th width="100">Remove</th>
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
                            <td><a href="<?php echo base_url('pagecontroller/editpost/'.$allpost->pID); ?>" class="btn btn-info">Edit</a> </td>
                            <td><a href="<?php echo base_url('pagecontroller/deletepost/'.$allpost->pID);?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                        <?php else :?>
                            <tr>
                                <td colspan="7" style="text-align: center;">No records Found</td>
                            </tr>
                    <?php endif; ?>
                    </tbody>
                        
                </table>   
        </div>
        </div>
</div>