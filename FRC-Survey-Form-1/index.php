<!DOCTYPE html>
<html>
<head>
	<title>FRC Survey Form</title>
</head>
<body>
  <div id="clouds">
  <div class="cloud x1"></div>
  <!-- Time for multiple clouds to dance around -->
  <div class="cloud x2"></div>
  <div class="cloud x3"></div>
  <div class="cloud x4"></div>
  <div class="cloud x5"></div>
</div>
	<h1>Team Registration Form</h1>
	<form method="post" action="submit.php">
		<label for="teamName">Team Name:</label>
		<input type="text" id="teamName" name="teamName" required><br><br>
		<label for="teamNumber">Team Number:</label>
		<input type="number" id="teamNumber" name="teamNumber" required><br><br>
		<label for="schoolDistrict">School District:</label>
		<input type="text" id="schoolDistrict" name="schoolDistrict" required><br><br>
		<label for="teamExpectation">Team Expectation:</label>
		<textarea id="teamExpectation" name="teamExpectation" required></textarea><br><br>
		<input type="submit" value="Submit">
	</form>
	<h2>Previous Submissions:</h2>
	<ul>
    
    	<style>
        /*Lets start with the cloud formation rather*/

/*The container will also serve as the SKY*/

*{ margin: 0; padding: 0;}



#clouds{
  padding: -100px 0;
  background: #c9dbe9;
  background: -webkit-linear-gradient(top, darkred 0%, #fff 100%);
  background: -linear-gradient(top, darkred #c9dbe9 0%, #fff 100%);
  background: -moz-linear-gradient(top, darkred 0%, #fff 100%);
}

/*Time to finalise the cloud shape*/
.cloud {
  width: 200px; height: 60px;
  background: #fff;
  
  border-radius: 200px;
  -moz-border-radius: 200px;
  -webkit-border-radius: 200px;
  
  position: relative; 
}

.cloud:before, .cloud:after {
  content: '';
  position: absolute; 
  background: #fff;
  width: 100px; height: 80px;
  position: absolute; top: -15px; left: 10px;
  
  border-radius: 100px;
  -moz-border-radius: 100px;
  -webkit-border-radius: 100px;
  
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
  -moz-transform: rotate(30deg);
}

.cloud:after {
  width: 120px; height: 120px;
  top: -55px; left: auto; right: 15px;
}

/*Time to animate*/
.x1 {
  -webkit-animation: moveclouds 15s linear infinite;
  -moz-animation: moveclouds 15s linear infinite;
  -o-animation: moveclouds 15s linear infinite;
}

/*variable speed, opacity, and position of clouds for realistic effect*/
.x2 {
  left: 200px;
  
  -webkit-transform: scale(0.6);
  -moz-transform: scale(0.6);
  transform: scale(0.6);
  opacity: 0.6; /*opacity proportional to the size*/
  
  /*Speed will also be proportional to the size and opacity*/
  /*More the speed. Less the time in 's' = seconds*/
  -webkit-animation: moveclouds 25s linear infinite;
  -moz-animation: moveclouds 25s linear infinite;
  -o-animation: moveclouds 25s linear infinite;
}

.x3 {
  left: -250px; top: -200px;
  
  -webkit-transform: scale(0.8);
  -moz-transform: scale(0.8);
  transform: scale(0.8);
  opacity: 0.8; /*opacity proportional to the size*/
  
  -webkit-animation: moveclouds 20s linear infinite;
  -moz-animation: moveclouds 20s linear infinite;
  -o-animation: moveclouds 20s linear infinite;
}

.x4 {
  left: 470px; top: -250px;
  
  -webkit-transform: scale(0.75);
  -moz-transform: scale(0.75);
  transform: scale(0.75);
  opacity: 0.75; /*opacity proportional to the size*/
  
  -webkit-animation: moveclouds 18s linear infinite;
  -moz-animation: moveclouds 18s linear infinite;
  -o-animation: moveclouds 18s linear infinite;
}

.x5 {
  left: -150px; top: -150px;
  
  -webkit-transform: scale(0.8);
  -moz-transform: scale(0.8);
  transform: scale(0.8);
  opacity: 0.8; /*opacity proportional to the size*/
  
  -webkit-animation: moveclouds 20s linear infinite;
  -moz-animation: moveclouds 20s linear infinite;
  -o-animation: moveclouds 20s linear infinite;
}

@-webkit-keyframes moveclouds {
  0% {margin-left: 1000px;}
  100% {margin-left: -1000px;}
}
@-moz-keyframes moveclouds {
  0% {margin-left: 1000px;}
  100% {margin-left: -1000px;}
}
@-o-keyframes moveclouds {
  0% {margin-left: 1000px;}
  100% {margin-left: -1000px;}
}

		h1 {
			text-align: center;
			margin-top: 20px;
      margin-bottom: 20px;
		}
		form {
			max-width: 600px;
			margin: 0 auto;
      padding-right: 40px;
			padding: 20px;
			background-color: #f2f2f2;
			box-shadow: 0px 0px 10px #ccc;
			border-radius: 10px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input, textarea {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			border: none;
			border-radius: 5px;
			background-color: #fff;
			box-shadow: 0px 0px 5px #ccc;
		}
		input[type="submit"] {
			background-color: darkred;
			color: #fff;
			font-weight: bold;
			cursor: pointer;
			transition: all 0.3s ease-in-out;
		}
		input[type="submit"]:hover {
			background-color: red;
		}

    form input[type=text], form textarea {
  margin-right: 10px;
}
		h2 {
			text-align: center;
			margin-top: 50px;
		}
		.card {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px #ccc;
			border-radius: 10px;
			margin-top: 20px;
		}
		.card h3 {
			margin-top: 0;
			margin-bottom: 10px;
		}
		.card p {
			margin-top: 0;
			margin-bottom: 5px;
			font-weight: bold;
		}
	</style>
  <?php
  	// Read the contents of the text file and display each submission as a card
  	$file = fopen("submissions.txt", "r");
  	if ($file) {
  		while (($line = fgets($file)) !== false) {
  			$submission = json_decode($line, true);
  			echo "<div class='card'>";
  			echo "<h3>" . $submission['teamName'] . "</h3>";
  			echo "<p>Team Number: " . $submission['teamNumber'] . "</p>";
  			echo "<p>School District: " . $submission['schoolDistrict'] . "</p>";
  			echo "<p>Team Expectation:</p>";
  			echo "<p>" . $submission['teamExpectation'] . "</p>";
  			echo "</div>";
  		}
  		fclose($file);
  	} else {
  		echo "No previous submissions.";
  	}
  ?>

	</ul>
</body>
</html>
