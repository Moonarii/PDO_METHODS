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


    <!-- Selecting a patients from the database -->
    <?php

    //prepare the data that will be used
	 $stmt = $pdo->prepare("SELECT * FROM patients");

     if($stmt->execute()) {
        print_r($stmt->fetchAll());
        
     }

    ?>
    </pre>

</body>
</html>
