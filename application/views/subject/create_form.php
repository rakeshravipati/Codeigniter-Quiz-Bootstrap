<form class="form" role="form" action="<?=base_url('admin/subject/create')?>" method="post">
	<div class="form-group">
		<label for="name">Subject</label>
		<input type="text" name="name" class="form-control" id="name" pattern="[a-zA-Z]{3,100}"  title="Subject field accepts only alphabets, Min-lenth:3 & Max-length: 100" required>
	</div>
	<input type="submit" id="create" class="btn btn-primary" value="Create">
</form>