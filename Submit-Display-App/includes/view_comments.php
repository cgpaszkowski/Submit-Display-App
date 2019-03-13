<?php 

	$myquery = "SELECT * FROM mindfeed";
	$result = $conn->query($myquery);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo '<div class="comment-box" style="border: 1px solid #aaaaaa; border-radius: 5px;">
					<div class="card-header">
						<img src="img/profilePicture.png" name="profilepic" alt="profilepic" class="stylesmall" height="50px" width="50px" style="border-radius:50%;"/> <h4 style="display:inline">' . $row["m_name"] . "</h4> on <h6 style='display:inline'>" . $row["m_date"] . 
					'</h6></div>
					<div class="card-body">
						<blockquote class="blockquote mb-0">
							<p>' . $row["m_thought"] . '</p>
						</blockquote>
					</div>
				</div><br>';
		}
	}
	else {
		echo "Nothing here to display! Sorry!";
	}

?>