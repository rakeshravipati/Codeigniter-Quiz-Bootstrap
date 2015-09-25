<div>
	<h1>List Of Questions</h1>
	<table class="table table-striped table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Sno</th>
				<th>Question</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($questions as $key=>$question):
			?>
			<tr>
				<td><?=$key+1;?></td>
				<td><?=$question->question;?></td>
				<td><?="Edit";?></td>
			</tr>
			<?php
				endforeach;
			?>
		</tbody>
	</table>
</div>	