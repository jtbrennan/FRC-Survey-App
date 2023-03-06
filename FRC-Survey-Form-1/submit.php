<?php
// Get form data and create a new submission array
$submission = array(
	"teamName" => $_POST["teamName"],
	"teamNumber" => $_POST["teamNumber"],
	"schoolDistrict" => $_POST["schoolDistrict"],
	"teamExpectation" => $_POST["teamExpectation"]
);

// Open the text file for appending and save the new submission as a JSON string
$file = fopen("submissions.txt", "a");
fwrite($file, json_encode($submission) . "\n");
fclose($file);

// Redirect back to the form page
header("Location: index.php");
exit;
?>
