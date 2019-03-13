<?php
	
	/*
	 * This file is to be used as is - DO NOT MODIFY THE CONTENTS OF OR SOURCE CODE IN THIS FILE.
	 *
	 * Download this file into the "A2" folder on your computer and test to see 
	 * if the comment posting and viewing functions work as described in the assignment
	 * document.
	 *
	 */

	/*
	 * The content for this file has been generated through https://www.lipsum.com
	 * on 02 February 2019.
	 */

	require "includes/db.php";
	require "includes/functions.php"; 

?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>The Force</title>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS / CDN -->
		<!-- Used from https://www.getbootstrap.com, 29 January 2019 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

		<!-- Custom CSS styles -->
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>

		<header>
			<div class="container">
				<nav class="navbar navbar-dark bg-dark">
					<a class="navbar-brand" href="index.php"><?php echo getWebsiteName(); ?></a>
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="theforce.php">The Force</span></a>
						</li>
					</ul>
				</nav>


					<!-- jQuery and Bootstrap JavaScript links -->
					<!-- Used from https://www.getbootstrap.com, 29 Januay=ry 2019 -->
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
			</div>

			<div class="container">
				<div class="jumbotron">
					<h1 class="display-3 text-center">One with the Force.</h1>
				</div>
			</div>
		</header>

		<main class="container">
			
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod, elit sed euismod tempor, enim elit lacinia lectus, ac gravida lectus justo ut lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut massa pulvinar, lobortis nisi eget, malesuada nisi. Etiam vitae tortor ligula. Aliquam erat volutpat. Sed ac pellentesque nisi, nec lobortis nisi. Vestibulum id turpis aliquam erat rutrum efficitur. Curabitur aliquam rutrum tempus. Fusce auctor, risus at porttitor lobortis, quam libero dapibus turpis, quis consectetur tellus risus et magna. Aliquam nec vestibulum velit. Nulla varius eget velit finibus vestibulum. Nam bibendum magna et sem lobortis luctus. Donec vel lorem varius mauris pretium tempor. Ut luctus, libero sed viverra eleifend, lorem ex laoreet nibh, vitae bibendum felis lectus sit amet diam. Suspendisse maximus elementum dolor eget consectetur. Sed lobortis malesuada sem, a ultricies sem dictum sit amet.</p>

			<!-- 
				Image used from https://www.fillmurray.com
				Image URL: https://www.fillmurray.com/200/300
				Date accessed: 02 February 2019
			 -->
			<img src="https://www.fillmurray.com/200/300" style="width: 200px; float: left; margin: 0 20px 20px 0;">
			<p>Etiam aliquet elit nec tristique sagittis. Donec id lectus eu arcu sollicitudin venenatis. Nam auctor suscipit convallis. Etiam tristique leo nisl, id tincidunt nibh rutrum at. Curabitur elementum odio et sem mattis egestas. Nulla facilisi. Proin condimentum, nisl vitae mollis vulputate, leo tortor pharetra justo, a scelerisque tortor leo sollicitudin enim. Pellentesque ut consectetur nisl, quis eleifend ligula. In feugiat, quam eu imperdiet vehicula, enim ipsum ultrices enim, quis condimentum ligula enim eu est. Aliquam vel est vehicula, imperdiet nunc sed, blandit neque.</p>

			<p>Pellentesque id semper dui, quis blandit mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam auctor commodo maximus. Morbi interdum odio eget vulputate tempus. Phasellus eu urna erat. Sed imperdiet elit non commodo fringilla. Suspendisse mollis neque mauris, vitae mollis ante luctus id. Etiam eu facilisis ipsum. Suspendisse potenti. Proin convallis dictum odio sed rhoncus. Nulla dapibus turpis non velit rhoncus, non scelerisque orci varius.</p>

			<p>Sed et elit vitae nunc consectetur auctor at congue turpis. In hac habitasse platea dictumst. Sed varius posuere orci, hendrerit faucibus nunc pharetra vitae. Pellentesque ut orci dui. Donec hendrerit sagittis enim at aliquet. Donec sed ultricies lacus, eget dapibus velit. Phasellus vitae odio ac velit suscipit ornare ac sit amet turpis. Maecenas semper nunc et felis tempor interdum. Praesent ligula tortor, laoreet sit amet libero et, vestibulum laoreet est. Vivamus et sem eget libero venenatis molestie. Suspendisse lacinia sit amet dui eu pretium.</p>

			<p>Morbi ut malesuada nunc, ut mollis mauris. Nulla odio velit, ultrices ut fermentum placerat, aliquam et nulla. Cras vel tempor ipsum. Phasellus auctor felis turpis, at egestas dui ultricies id. Aliquam commodo nunc sit amet sem blandit, sit amet consequat diam faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus maximus, magna vel euismod porta, nisi sapien aliquam sapien, eget scelerisque ipsum nunc ac arcu. Curabitur tincidunt arcu non sapien bibendum dapibus. Donec at maximus urna, in mattis mi.</p>

			<p>Pellentesque commodo eget lacus eget porta. Aliquam consectetur tincidunt neque quis vehicula. Nulla vitae posuere lacus. Nam pulvinar tortor sed consequat dictum. Suspendisse sit amet mattis ante. Nullam scelerisque erat purus, tincidunt aliquam ligula consectetur eget. Duis a justo a sem consectetur fringilla commodo vel nisi. Proin eu quam vestibulum, auctor eros tempus, cursus dolor.</p>

			<p>Donec porta ex ipsum, gravida dignissim nunc convallis nec. Donec tortor dolor, finibus nec mauris sit amet, finibus consectetur odio. Sed eu ultricies risus. Integer pellentesque quis magna pellentesque maximus. Vivamus vitae semper tellus. Suspendisse pulvinar faucibus sapien, eget accumsan velit sollicitudin ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam dignissim malesuada magna sed maximus. Etiam id arcu viverra, mattis ipsum at, vestibulum enim.</p>

			<p>Curabitur condimentum venenatis blandit. Proin consectetur rutrum posuere. Etiam dignissim turpis augue, eu luctus est bibendum eu. Aenean efficitur, turpis ac dictum sodales, libero purus varius lorem, sit amet condimentum erat eros a orci. In justo ante, faucibus non iaculis sit amet, tempor sit amet lacus. Maecenas quis libero non est viverra facilisis. Integer quis turpis a sem aliquet aliquet. Duis varius urna et malesuada eleifend. Sed pulvinar libero placerat diam elementum, eu gravida lectus elementum. Sed iaculis egestas erat id finibus. Cras nulla turpis, pretium eu vestibulum ut, iaculis ut tellus. In condimentum, sem eget malesuada eleifend, felis tortor malesuada augue, fermentum malesuada nunc nunc non mi. Donec nec tristique quam. Aenean eget placerat odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>

			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In cursus sapien non ligula tempor, eu auctor dui vulputate. Pellentesque sit amet nisi eget dolor ultricies facilisis ut sit amet lacus. Integer sed lorem eget eros sagittis commodo a quis urna. Donec laoreet, magna eget condimentum lacinia, ligula nisi accumsan risus, vel posuere enim quam eget velit. Integer purus enim, sagittis ac tincidunt sit amet, faucibus sit amet ex. Fusce ac sodales magna.</p>

			<?php include "includes/post_comment.php"; ?>

			<h3 class="h4 mb-3 font-weight-normal">Rules for posting comments</h3>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In cursus sapien non ligula tempor, eu auctor dui vulputate. Pellentesque sit amet nisi eget dolor ultricies facilisis ut sit amet lacus. Integer sed lorem eget eros sagittis commodo a quis urna. Donec laoreet, magna eget condimentum lacinia, ligula nisi accumsan risus, vel posuere enim quam eget velit.</p>

			<?php include "includes/view_comments.php"; ?>

		</main>

		<footer>
			<div class="container py-5">
				<div class="footer py-5">
					<span class="text-muted">&copy; One with the Force.</span>
				</div>
			</div>
		</footer>

	</body>
</html>