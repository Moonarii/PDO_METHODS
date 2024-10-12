<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare System</title>
</head>
<body>
    <pre> 
    <?php

// Updating a doctors from the database

	$query = "UPDATE doctors SET first_name = ?, last_name = ? WHERE doctor_id = 35619";

	 $stmt = $pdo->prepare($query);

//If the query is executed then the data must be presented
	 $executeQuery = $stmt->execute(
	 	["Rhaenys", "Ive"]
	 );

	if ($executeQuery) {
	 	echo "Update successful!";
	 }
	else {
		echo "Query failed";
	 }

    ?>
    </pre>

</body>
</html>
