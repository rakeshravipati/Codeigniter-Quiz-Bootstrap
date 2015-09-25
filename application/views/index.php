<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CodeIgniter Shopping Cart</title>
 
<link href="<?php echo base_url(); ?>assets/css/style.css" media="screen" rel="stylesheet" type="text/css" />
 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
</head>
<body>
 
<div id="wrap">
 
    <?php 
    	echo "<pre>";
    	print_r($this->session->all_userdata());
    	print_r($_SESSION);
    	$this->view($content);
    ?>
    <div class="cart_list">
        <h3>Your shopping cart</h3>
        <div id="cart_content">
            <?php echo $this->view('cart/cart.php'); ?>
            <?php echo $this->benchmark->elapsed_time('start', 'end'); ?>
        </div>
    </div>
</div>
 	<?php
 		$this->benchmark->mark("end");
 		echo $this->benchmark->elapsed_time();
 	?>
 	{memory_usage}
</body>
</html>