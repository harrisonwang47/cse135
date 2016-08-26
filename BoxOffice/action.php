<?php
	
	require_once 'config.inc';
	

	$action = $_REQUEST['action'];
	
	if ($action == 'Add') {
		
       $movie_title = $_REQUEST['movie_title'];
	   $studio = $_REQUEST['studio'];
	   $year = $_REQUEST['year'];
	   $box_office = $_REQUEST['box_office'];
	   
	   // SHOULD HAVE VALIDATION HERE!?
	   //if there are wrong inputs, show error
		
	
	   $sql = "INSERT INTO movies (movie_title,studio,year,box_office) VALUES ('$movie_title' , '$studio' , '$year' , '$box_office')";
	   $result = mysqli_query($conn, $sql);
		
		
	} else if ($action == "Update") {
		
	   $movie_title = $_REQUEST['movie_title'];
	   $studio = $_REQUEST['studio'];
	   $year = $_REQUEST['year'];
	   $box_office = $_REQUEST['box_office'];
	   $movie_id = $_REQUEST['movie_id'];
	
	   $sql = "UPDATE movies SET movie_title='" .$movie_title."' ,studio='".$studio."' ,year='".$year."' ,box_office='".$box_office."' WHERE user_id='".$movie_id."'";
       $result = mysqli_query($conn, $sql);
		
	}  else if ($action == "Delete") {
		
  		
       $sql = "DELETE FROM movies WHERE movie_id='".$_POST['movie_id']."'"; 
       $result = mysqli_query($conn, $sql);

		
	}

	header('Location: index.php');
	
?>