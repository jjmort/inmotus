<?php

	require 'common.php';

	$jahraTrackList = get_List();

	$inmotusGenre = get_Genre();
	
?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var musicLists = [];
		<?php 

		foreach ($inmotusGenre as $value){
			echo "musicLists['".$value."'] = [];\n";
		}
			
		
		if (count($jahraTrackList) > 0) {
			foreach ($jahraTrackList as $k => $v) {
				echo "musicLists['".$v["track_genre"]."'].push({URL:\"".$v["track_url"]."\", name:\"".$v["track_name"]."\"});
				\n";

			}
		}

		?>
	</script>
</head>
 <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<body>

		<link rel="stylesheet" type="text/css" href="css/mystylep2.css">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<div class="control_div">

			<div class="top_banner"> 

				<div class="top_para_div">
					<p class="top_bannerwriting">in-Mōtus</p>
				</div>
				
				<div class="profile_pic"></div>

			</div>

			<div class="pick_genre">

			<button type="button" class="btn btn-default" id="all" onclick="musicAll()">All</button>
			
			<?php
		
			foreach ($inmotusGenre as $v) {
						echo "<button type=\"button\" class=\"btn btn-default btn-genre\" id=\"".$v."\" onclick=\"myMusicFrame(musicLists['".$v."'])\">".$v."</button>";
					}

			?>				
				<!--<button type="button" class="btn btn-default" id="all" onclick="listMusic('All')">all</button>
				<button type="button" class="btn btn-default" id="minimal" onclick="listMusic('Minimal')">minimal</button>
				<button type="button" class="btn btn-default" id="house" onclick="listMusic('House')">house</button>
				<button type="button" class="btn btn-default" id="deep" onclick="listMusic('Deep')">deep</button>
				<button type="button" class="btn btn-default" id="techno" onclick="listMusic('Techno')">techno</button>
				<button type="button" class="btn btn-default" id="downtempo" onclick="listMusic('DownTempo')">downtempo</button>
				<button type="button" class="btn btn-default" id="mixes" onclick="listMusic('Mixes')">mixes</button>-->

			</div>	


			<div class= "allsearch" style="position: relative;">

				<input class="searchhere_input" type="search" id="search_music" placeholder="Search...">
					
				<button class="btn btn-default btn-sm" onclick="mySearch()">GO</button>	

			</div>


			<div id="musicListsDiv">
			</div>
			
			<div>
				<p>
					<span id="myfooter">www.inmotus.net</span>
					<span id ="mydate"></span>
				</p>
			</div>

		</div>

		<script src="js/myscript.js"></script>

	</body>
</html>


