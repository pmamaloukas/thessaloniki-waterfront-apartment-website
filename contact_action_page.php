<?php

    include_once ('dbConnection.php');

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $required = array($name, $email, $message);
    $error = false;

    foreach($required as $field) {
        if (empty($field)) {
            $error = true;
            break;
        }
    }

    if ($error) {
        echo "<script type='text/javascript'> 
            alert ('All fields must be filled out before the message can be sent. Press OK to be redirected to our page.'); 
            window.location.href='Contact.php'; 
            </script>";
    }
    else {
            
        $sql = "INSERT INTO customer_messages(customer_name, customer_email, customer_phone, customer_message) VALUES ('$name', '$email', '$phone', '$message')";
        if (mysqli_query($conn, $sql)) {
            echo "<script type='text/javascript'> 
                alert ('Your message was sent successfully. Press OK to be redirected to our page.'); 
                window.location.href='Contact.php'; 
                </script>";
        }
        else {
            echo "Query error: " . mysqli_error();
        }
    }

    mysqli_close($conn);

?>