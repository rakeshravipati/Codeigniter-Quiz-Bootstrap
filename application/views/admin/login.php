<div>
	<h1 class="text-primary text-center text-capitalize"><?=$title;?></h1>
</div>
<div class="container form control-group row">
	<form action="" method="post" role="form" name="lgn_frm" id="lgn_frm" class="col-xs-12 col-md-6 col-md-offset-5">
		<div class="form-group">
			<label for="email" class="">Email
				<input type="email" name="username" id="username" class="form-control" required> 
			</label>
		</div>
		<div>
			<label for="password">Password
				<input type="password" name="password" id="password" class="form-control" required>
			</label>
		</div>
			<input type="submit" id="login" value="login" class="btn btn-primary">
			<!-- <input type="button" id="clear" value="Clear" class="btn btn-md" onclick="javascript: document.getElementById('lgn_frm').reset(); "> -->
			<input type="button" id="clear" value="Clear" class="btn btn-md" onclick="javascript: document.forms[0].reset(); ">
	</form>
</div>
<script>
	

</script>