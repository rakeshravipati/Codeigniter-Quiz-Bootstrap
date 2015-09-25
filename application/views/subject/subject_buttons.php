<?php 
	foreach ($subjects as $key => $subject):
?>
	<a href="<?=base_url('subject/index').'/'.$subject->name.'/'.$subject->id;?>" class="btn <?php if($subjectid === (int)$subject->id){?> btn-default <?php }else{?> btn-primary <?php } ?>">
	<?=$subject->name;?>
	</a>
<?php 
	endforeach;
?>