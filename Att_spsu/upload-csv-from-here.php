<?php
	require 'connection.php';
	session_start();
/* 	if(!isset($_SESSION['user']) && $_SESSION['type']!=0){
		header("location:index.php");
	} else {
		$type = $_SESSION['type'];
		if($type==0){
			header("location:home.php");
		}
 	} */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload by Ashwani Lakshkar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body> 
<div class="container">
	<div class="panel panel-primary" style="width:50%;margin:0 auto;margin-top:5%;">
      <div class="panel-heading">Developed By:- Ashwani Lakshkar<?php /* require 'head.php'; */?></div>
      <div class="panel-body">
		  <h2>Excel Upload</h2><br/>
		  <form class="form-horizontal" autocomplete="off" action="upload-csv.php" method="post" enctype="multipart/form-data" style="width:80%;margin:0 auto;">
			<div class="form-group">
			  <label for="branch">Type:</label>
			  <input type="text" class="form-control" list="br" id="type" placeholder="Select Type" name="type" required/>
			  <datalist id="br">
					<option value="Student">
					<option value="Teacher">
					<option value="Subject">
			  </datalist>
			</div>
			<div class="form-group">
			  <label for="timetable">Excel File:</label>     
			  <input type="file" class="form-control" id="timetable" name="csv_file" required/>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		  </form>
	  </div>
    </div>
</div>
<script>
	$(document).ready(function(){
		
	});
</script>
</body>
</html>
