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

    //Deleting a new doctor from the database
    
    $query = "DELETE FROM doctors WHERE patient_id = -1234";
    
    $stmt = $pdo->prepare($query);

    //If the query is executed then the data must be presented
    $executeQuery = $stmt->execute();

    if ($executeQuery) {
        echo "Deletion successful!";
    }
    else {
        echo "Deletion failed";
    }

    ?>
    </pre>

</body>
</html>
