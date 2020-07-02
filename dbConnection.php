<?php
    $conn = mysqli_connect("localhost", "phoebe71_root", "Zezethex1!", "phoebe71_appartment_website");

    if(!$conn) {
        echo "Connection error: " . mysqli_connect_error();
    }

?>