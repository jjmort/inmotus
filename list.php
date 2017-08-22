<?php 
	require 'common.php';

	$jahraTrackList = get_List();

	tableline_Delete();

?>
<!DOCTYPE html>
<html>
 <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<body>

		<link rel="stylesheet" type="text/css" href="/liststyle.css">

		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

	<div id="heading">

		<h3> tracks. </h3>

	</div>

	<div class="table" id="list">

<?php 

	if (count($jahraTrackList) > 0) {

		echo "<table class=\"table table-hover table-bordered\" id=\"dataTable\"><thead><tr><th scope=\"row\">id</th><th scope=\"row\"> track name </th><th scope=\"row\"> track url </th><th scope=\"row\"> track genre </th><th>action</th></tr></thead><tbody>";

	foreach ($jahraTrackList as $k => $v) {
			echo "<tr><td>" . $v["idtrack"]. "</td><td>" . $v["track_name"]. "</td><td>" . $v["track_url"]. "</td><td>" . $v["track_genre"]. "</td><td><a class=\"button alert\" href=\"list.php?del=".$v["idtrack"]."\">x</a></td></tr>";
		}
	    echo "</tbody></table>";
	}else {
	    echo "no results";
		}

 ?>

 	</div>

</body>