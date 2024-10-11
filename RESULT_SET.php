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

	$query = "SELECT  first_name, last_name FROM doctors WHERE doctor_id = 1234 and 35619 ";

	 $stmt = $pdo->prepare($query);

//If the query is executed then the data must be presented
    If($executeQuery) {
        $doctorsId = $stmt->fetchAll();
    }
    else {
        echo"Query failed";
    }

    ?>
    <table>
        <tr>
            <th>First_Name</th>
            <th>Last_Name</th>
        </tr>
        <?php foreach($doctorsId as $row){ ?>
        <tr>
            <td><?php echo $row['First_Name']; ?></td>
            <td><?php echo $row['Last_Name']; ?></td>
        </tr>
    <?php } ?>
    
    </pre>

</body>
</html>
