<?php

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "inmotus";
	$conn = false;

function connect_Database(){

	global $servername, $username, $password, $dbname, $conn;
		// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
}

function save_Data(){

	global $conn;

	if ($_POST["trackname"] && $_POST["trackurl"] != "") {
		connect_Database();
		$trackname = $_POST["trackname"];
		$trackurl = $_POST["trackurl"];
		$trackgenre = $_POST["trackgenre"];

		$sql = "INSERT INTO track (track_name, track_url, track_genre)
				VALUES ('$trackname', '$trackurl','$trackgenre')";

		if ($conn->query($sql) === TRUE) {
		echo "track added";
		}else {
		echo "error: " . $sql . "<br>" . $conn->error;
		}

	}
}

function get_Genre(){

	global $conn;
	$genreList = [];
	connect_Database();

	if ($conn == false) {
		connect_Database();
	}

	$sql = "SELECT DISTINCT track_genre FROM track";

	$result = $conn->query($sql);


	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
		array_push($genreList, $row["track_genre"]);
		}
	}
	
	return $genreList;
	
}

function get_List(){
	
	global $conn;
	$list = [];

	if ($conn == false) {
		connect_Database();
	}

	$sql = "SELECT idtrack, track_name, track_url, track_genre FROM track";

	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
		array_push($list, $row);
		}
	}
	
	return $list;

}

function tableline_Delete(){

	global $conn;

	if(isset($_GET["del"])){
	        $id = $_GET["del"];
	        if($conn->query("DELETE FROM track WHERE idtrack=$id")){
	        } else { 
	            echo "error";
	        }    
	    }
}

function shutdown(){

	global $conn;

    if ($conn){
    	$conn->close();
    }
}

register_shutdown_function('shutdown');

?>