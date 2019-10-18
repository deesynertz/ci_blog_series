<!DOCTYPE html>
<html>
<head>
	<title><?= $tittle; ?></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap_3_3_7/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap_3_3_7/css/bootstrap-theme.min.css'); ?>">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    	<div class="container">
    		<h2><span class="glyphicon glyphicon-home"></span>&nbsp; Welcome to my blog</h2>
    	</div>
    </nav>

    <?php if ($this->session->set_flashdata('success_msg')) { ?>
                <div class="alert alert-success">
                        <?php echo $this->session->set_flashdata('success_msg'); ?>
                </div>
        <?php } ?>
        

	
