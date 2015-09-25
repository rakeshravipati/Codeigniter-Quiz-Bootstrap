<?php
	$subjectid = (int)$this->uri->segment(4); 
?>
<div class="row">
	<div class="container-fluid">
		<?php $this->load->view('subject/subject_buttons', array('subjectid'=>$subjectid)); ?>
	</div>
</div>
<br>
<?php if($questions && count($questions) > 0): ?>
<div class="container-fluid form">
	<form action="<?=base_url('subject/submit').'/'.$subjectid;?>" role="form" method="post">
		<?php 
			foreach ($questions as $key => $value){
				$data = ['question'=>$value,'key'=>$key];
		 		switch ($value->type) {
		 			case 'radio':
		 				$this->load->view(RADIO_HTML,$data);
		 				break;
		 			case 'checkbox':
		 				echo "radio";
		 				$this->load->view(CHECKBOX_HTML, $data);
		 				break;
		 			case 'select':
		 				echo "radio";
		 				$this->load->view(SELECT_HTML, $data);
		 				break;	
		 			default:
		 				# code...
		 				break;
		 		}
			}
		?>
			<input type="submit" value="Submit" class="btn btn-primary">
	</form>
</div>
<?php else: ?>
	<div class="alert alert-info ">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Info!</strong> There are no questions added to this subject.<br/>Please visit back..<br>Thanks for visiting..
	</div>
<?php endif; ?>