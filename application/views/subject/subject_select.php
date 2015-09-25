<div class="form-group">
	<label for="" class="control-label">Subject
		<select name="subject_id" id="subject_id" class="form-control selectpicker">	
			<option value="">Select Subject</option>
			<?php foreach ($subjects as $key => $subject): ?>
				<option  value="<?=$subject->id;?>"><?=$subject->name;?></option>
			<?php endforeach; ?>
		</select>
	</label>
</div>	