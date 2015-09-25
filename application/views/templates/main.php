<?php 
   
    $this->load->view('templates/header.php');
    
	if($this->session->flashdata('success') != FALSE):
?> 
	<div class="alert alert-success fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Success!</strong><?=$this->session->flashdata('success');?>
	</div>
<?php 
endif;
if($this->session->flashdata('info') != FALSE):
?>
	<div class="alert alert-info ">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Info!</strong> Indicates a neutral informative change or action.
	</div>
<?php 
endif;
if($this->session->flashdata('warning') != FALSE):
?>
	<div class="alert alert-warning">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Warning!</strong> Indicates a warning that might need attention.
	</div>
<?php 
endif;
if($this->session->flashdata('warning') != FALSE):
?>
	<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Danger!</strong> Indicates a dangerous or potentially negative action.
	</div>
<?php 
endif;
	if(isset($data) == false)
		$data = [];

	$this->load->view($view, $data);

 
	$this->load->view('templates/footer.php');
?>