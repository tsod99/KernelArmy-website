<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/strapdown.css">
<link rel="stylesheet" href="themes/united.min.css">
<link rel="stylesheet" href="themes/bootstrap-responsive.min.css">

<?php

require __DIR__ . "/includes/conn.php";

if (isset($_GET["id"]) && filter_var($_GET["id"], FILTER_VALIDATE_INT)) {
	
	$writeup = getWriteupByIdFromDB(htmlspecialchars($_GET["id"]));

	$title = $writeup['title'];
	$ctf = $writeup['ctf'];

	echo "<title> ". htmlspecialchars($title) ." Writeup - ". htmlspecialchars($ctf) ." - K3RN3L4RMY</title>";
} else
	header("location: /writeup?id=1");

?>
		
<?php include __DIR__ . "/includes/footer.php"; ?>


</head>
<body class="bg-dark">

<!--<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-9">
			<div class="card">
			  <div class="card-body" id="content">
				
			  </div>
			</div>
		
		</div>
		<div class="col-md-3">
		<div style="position:fixed; width: 300px;">
			<div class="card mb-2">
			  <div class="card-body text-center">
					Ad Goes Here - Add some length
			  </div>
			</div>
			<div class="card mb-2">
			  <div class="card-body text-center">
					Ad Goes Here - It will go to a certain length and then wrap around
			  </div>
			</div>
			<div class="card mb-2">
			  <div class="card-body text-center">
					Ad Goes Here
			  </div>
			</div>
		</div>
		
		
		</div>
	</div>
</div>-->

<xmp theme="united" style="display:none;">
<?php
	
	echo file_get_contents("./uploads/" . htmlspecialchars($_GET["id"]) . "/readme.md");

?>
</xmp>

<script src="./js/strapdown.js"></script>

<style>
  h1, h2   {color: #1ea78d;}
  </style>

  
</body>
</html>