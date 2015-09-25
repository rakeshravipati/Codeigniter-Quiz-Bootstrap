<div class="jumbotron">
	<div class="alert alert-info ">
		<div class="btn btn-info">
			<strong class="label label-info lable-large">Total Questions!</strong>&nbsp;<span class="label label-info badge"><?=$correct+$wrong+$unanswered;?></span>
		</div>
		<div class="btn btn-primary">
			<strong class="label label-success lable-large">Correct!</strong>&nbsp;<span class="badge"> <?=$correct;?></span>
		</div>
		<div class="btn btn-warning">
			<strong class="label label-warning lable-large">Wrong!</strong>&nbsp;<span class="badge"> <?=$wrong;?></span>
		</div>
		<div class="btn btn-danger">
			<strong class="label label-danger lable-large">Unanswered!</strong>&nbsp;<span class="badge"> <?=$unanswered;?></span>
		</div>
	</div>
</div>	