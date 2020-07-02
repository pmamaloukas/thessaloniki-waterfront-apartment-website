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
        alert ('The comment field cannot be empty. Press OK to be redirected to our page.'); 
        window.location.href='Rating.php'; 
        </script>";
    } else {
        
        $sql = "INSERT INTO customer_comments(customer_name, customer_comment) VALUES ('$name', '$comment')";
        
        if(mysqli_query ($conn, $sql)) {
            echo "<script> 
            alert ('Your comment was uploaded successfully. Press OK to be redirected to our page.'); 
            window.location.href='Rating.php'; 
            </script>";
        } else {
            echo "Query error: " . mysqli_error();
        }
    }

    mysqli_close($conn);

?>