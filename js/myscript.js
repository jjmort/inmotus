function musicAll(){

	console.log(musicLists);

	var allSong =[];

	var arrayoneAll = [];

	for (j in musicLists) {

		console.log(musicLists[j]);	

		var songArray = musicLists[j];

		for (var i = songArray.length - 1; i >= 0; i--) {

			allSong.push(songArray[i]);

		}
	}	

	console.log(allSong);

	myMusicFrame(allSong);
}

function myMusicFrame(songs) {
		// alert("Minimal");
		//checking if list is present
		if(typeof songs == 'undefined' || typeof songs.length == 'undefined' )
			return;

		console.log(songs)
			//var musiclistDivAll = document.getElementById("musiclistDivAll");

			var musicListsDiv = document.getElementById("musicListsDiv");

			while (musicListsDiv.firstChild) {
    			musicListsDiv.removeChild(musicListsDiv.firstChild);
			}

			for (var i = songs.length - 1; i >= 0; i--) {

				var iframeAll = document.createElement('iframe');

				iframeAll.src = songs[i].URL;

				iframeAll.className = "musicFrame"; 

				musicListsDiv.appendChild(iframeAll);
		
			}
}

document.getElementById("mydate").innerHTML = Date();

//.i.name;
function mySearch(){

	var searchDiv, searchBox, music_div, search_div_music;

		searchDiv =  document.getElementById("musicListsDiv");

		searchBox = document.getElementById("search_music");
		//alert(searchBox.value);

		search_div_music = searchBox.value;

		music_div = searchDiv.getElementsByTagName("div");
		//console.log(music_div);


		for (var i=0;i<music_div.length; i++){
			var musictd = music_div[i].name;
			var musictext = musictd.innerText;
			//console.log(musictd);
			//musictd.innerHTML;
			if (search_div_music == musictext) {
				musictd.className = "backgroundgrey";
			}else {
				musictd.style.backgroundColor = "transparent";
			}
		} 
}


/* function deleted(event){
	//alert('hello');
	//console.log(event);
	var tr = event.target.parentNode.parentNode;
	//var mytable =  document.getElementById("table_rows");
	//console.log(tr);
	//console.log(mytable);
	tr.parentNode.removeChild(tr);
	//mytable.removeChild(tr);

}

function showmyID(){

	var	mytext, mytable, count, mytr, btn, mytd;

		mytext = document.getElementById("text_transfer");

		mytable =  document.getElementById("table_rows");

		count = mytable.rows.length;

		mytr = mytable.insertRow(-1);

			btn = document.createElement('input');
			btn.type = "button";
			btn.value = "delete";
			btn.className = "btn btn-danger btn-xs"
			btn.style.marginLeft = "10px";
			//btn.class.fontcolor = "black";
			//btn.onclick = remove.rows
			btn.addEventListener('click', deleted);


			if(count % 2 === 0){ 
			   //alert('I am even '+count);
			   mytr.style.textAlign = "right";
			}else{
			   //alert('I am odd '+count);
			   mytr.style.textAlign = "left";
			}


		mytd = mytr.insertCell(0);

		mytd.innerHTML = mytext.value;

		mytd.appendChild(btn);

} */

listMusic('All');