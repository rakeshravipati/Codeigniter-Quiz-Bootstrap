<div class="form-group">
	<label for="">Q<?=$key+1;?>)</label>
		<?=$question->question;?>
		<div><input type="radio" name='<?=$question->id;?>' value='1'><?=$question->option1;?></div>
		<div><input type="radio" name='<?=$question->id;?>' value='2'><?=$question->option2;?></div>
		<div><input type="radio" name='<?=$question->id;?>' value='3'><?=$question->option3;?></div>
		<div><input type="radio" name='<?=$question->id;?>' value='4'><?=$question->option4;?></div>
	
</div>