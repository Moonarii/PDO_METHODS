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

    //Selecting only the info of patient with an id of 3

    $stmt = $pdo->prepare("SELECT * FROM patients WHERE patient_id = 3");

    //Once the data is executed then the data will be presented
     if($stmt->execute()) {
        print_r($stmt->fetch());
        
     }

    ?>
    </pre>

</body>
</html>
