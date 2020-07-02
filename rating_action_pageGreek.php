<?php

    include_once ('dbConnection.php');

    $name = $_POST["name"];
    $comment = $_POST["comment"];

    if (empty($name)) {
        $name = "Anonymous";
    }

    $error = false;

    if(empty($comment)) {
        $error = true;
    }

    if ($error) {
        echo "<script> 
        alert ('Το πεδίο με το σχόλιό σας δεν μπορεί να είναι κενό. Πατήστε ΟΚ για να επιστρέψετε στη σελίδα μας.'); 
        window.location.href='RatingGreek.php'; 
        </script>";
    } else {
        
        $sql = "INSERT INTO customer_comments(customer_name, customer_comment) VALUES ('$name', '$comment')";
        
        if(mysqli_query ($conn, $sql)) {
            echo "<script> 
            alert ('Το σχόλιό σας ανέβηκε επιτυχώς. Πατήστε ΟΚ για να επιστρέψετε στη σελίδα μας.'); 
            window.location.href='RatingGreek.php'; 
            </script>";
        } else {
            echo "Query error: " . mysqli_error();
        }
    }

    mysqli_close($conn);

?>