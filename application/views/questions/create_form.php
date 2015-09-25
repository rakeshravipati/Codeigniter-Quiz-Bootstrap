<div class="container">
	<form role="form" action="<?=base_url('/admin/question/create')?>" class="form" method="post">
		<?php $this->load->view('subject/subject_select'); ?>
		<div class="form-group">
			<label for="" class="control-label">Question type
				<select name="type" id="type" class="form-control">	
					<option value="">Select Question Type</option>
					<option value="radio">Radio</option>
					<option value="checkbox">Checkbox</option>
					<option value="Select">Select</option>
				</select>
			</label>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Question
				<input type="text" name="question"  class="form-control">
			</label>
		</div>	
		<div class="form-group">
			<label for="" class="control-label">Option1
				<input type="text" name="option1"  class="form-control">
			</label>
		</div>	
		<div class="form-group">
			<label for="" class="control-label">Option2
				<input type="text" name="option2" class="form-control">
			</label>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Option3
				<input type="text" name="option3" class="form-control">
			</label>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Option4
				<input type="text" name="option4" class="form-control">
			</label>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Answer
				<input type="text" name="answer" class="form-control">
			</label>
		</div>		
		<input type="submit" id="bttn-create" value="Create" class="btn btn-primary">		
	</form>
</div>