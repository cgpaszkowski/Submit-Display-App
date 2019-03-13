<?php include "includes/db.php"; ?>
<?php require "includes/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>MindFeed</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>	
</head>

<body>
	<header class="header">
		<nav class="navbar navbar-fixed-top" role="navigation">
  			<div class="container navbar-inverse">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="index.php"><?php echo getWebsiteName(); ?></a>
    			</div>
    			<ul class="nav navbar-nav">
			      <li><a href="theforce.php">TheForce</a></li>
			    </ul>
  			</div>
		</nav>			
	</header>