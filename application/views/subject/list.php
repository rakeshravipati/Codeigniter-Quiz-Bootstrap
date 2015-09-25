<div>
		<h1>List Of Subjects</h1>
		<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th>Sno</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($subjects as $key=>$subject):
				?>
				<tr>
					<td><?=$key+1;?></td>
					<td><?=$subject->name;?></td>
					<td><?="Edit";?></td>
				</tr>
				<?php
					endforeach;
				?>
			</tbody>
		</table>
	</div>
</div>	