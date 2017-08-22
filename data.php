<?php 
	require 'common.php';

	save_Data();

	$inmotusGenre = get_Genre();
	
?>
<!DOCTYPE html>
<html>
 <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<body>

	<link rel="stylesheet" type="text/css" href="data.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
	<div class="container">
	
		<h3> add track. </h3>

		<form action="data.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2"> track name: </label>
				<div class="col-sm-6">
					<input type="text" name="trackname" id="trackname" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"> track url: </label>
				<div class="col-sm-6">
					<input type="text" name="trackurl" id="trackurl" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"> track genre: </label>
				<div class="col-sm-6">
					<select type="text" name="trackgenre" id="trackgenre" class="form-control">					 
					<?php

					foreach ($inmotusGenre as $v) {
								echo "<option>".$v."</option>";
							}
							
					?>
	  				</select>
				</div>
			</div>
			<div class="form-group">        
	      		<div class="col-sm-6">
					<input type="submit" id="submitbutton" class="btn btn-default">
				</div>
			</div>
		</form>

	</div>

	<script src="data.js"></script>

	</body>
</html>