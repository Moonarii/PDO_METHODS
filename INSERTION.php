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

    //Inserting a new doctors to the table
    
    $query = "INSERT INTO doctors (Doctor_id, First_Name, Email, Contact_Number, Specialization) VALUES (?,?,?,?,?)";

    $stmt = $pdo->prepare($query);
    //If the query is executed then the data must be presented
    $executeQuery = $stmt->execute(
            [1234, 'Blair', 'Warldof', 'bwarldof@discovery.com', '123-456-7891', 'Neurology']
    );

     if ($executeQuery) {
        echo "Query successful!";
     }
     else {
        echo "Query failed";
     }

    ?>
    </pre>

</body>
</html>
