<?php 
    include_once ('dbConnection.php');

    $reply = $_POST["reply"];

    $sql = "INSERT INTO customer_comments(reply) VALUES ('$reply')";

    if(mysqli_query ($conn, $sql)) {
        echo "<script> 
        alert ('Your reply was uploaded successfully'); 
        window.location.href='Rating.php'; 
        </script>";
    } else {
        echo "Query error: " . mysqli_error();
    }

    mysqli_close($conn);

?>