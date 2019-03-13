<form action="index.php" method="post">
	
	<div class="form-group">
		<label for="comment"><h3>Type and save. You know the drill.</h3></label>
		<textarea class="form-control" rows="5" name="message" id="comment" maxlength="254" placeholder="Do not enter more than 254 characters!" required></textarea>
	</div>

	<input type="submit" name="submit" class="btn btn-primary" value="Save">
	<input type="reset" name="reset" class="btn btn-warning" value="Clear">

</form>

<?php

	if (isset($_POST['submit'])){

		if (preg_replace('/\s+/', '', $_POST['message']) == ""){
			echo "<p style='color:red;'>Invalid: Cannot submit empty comment </p>";
		}
		else {
			$message = validateFormData($_POST['message']);
			
			$statement = "INSERT INTO mindfeed (m_name, m_thought, m_date) VALUES ('C3PO', '" . $message . "'," . "'" . date("d F Y") . "');";
			$conn->query($statement);
		}
	}

?>

