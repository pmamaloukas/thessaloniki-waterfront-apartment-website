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
            alert ('Όλα τα πεδία πρέπει να έχουν συμπληρωθεί για να σταλεί το μήνυμα. Πατήστε ΟΚ για να επιστρέψετε στη σελίδα μας.'); 
            window.location.href='contactGreek.php'; 
            </script>";
    }
    else {
            
        $sql = "INSERT INTO customer_messages(customer_name, customer_email, customer_phone, customer_message) VALUES ('$name', '$email', '$phone', '$message')";
        if (mysqli_query($conn, $sql)) {
            echo "<script type='text/javascript'> 
                alert ('Το μήνυμά σας εστάλη επιτυχώς. Πατήστε ΟΚ για να επιστρέψετε στη σελίδα μας.'); 
                window.location.href='contactGreek.php'; 
                </script>";
        }
        else {
            echo "Query error: " . mysqli_error();
        }
    }

    mysqli_close($conn);

?>