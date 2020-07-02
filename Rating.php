<!DOCTYPE html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Thessaloniki Waterfront Apartment rent flat cheap city centre customer rating comments critique">
    <meta name="author" content="Phoebe Mamaloukas">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <title> Rating </title>

    <link rel = "stylesheet" href = "Rating_css.css">

    <script src="Rating_js.js"> </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>

<body>
    <header>
            <a id = "language" href="RatingGreek.php"> GR</a>
            <form action = "homepage.php">
                <button id="backToHome"><i class="fa fa-home"></i> </button>
            </form>
            <h1 id="title"> Thessaloniki Waterfront Appartment </h1>
        </header>
        <div class = "menu">
            <form action = "Info.php" >
                <button id = "info" type = "submit"> Learn More About Us </button>
            </form>
            <form action = "Rating.php">
                <button id = "rating" type = "submit"> Customer Rating </button>
            </form>
            <form action = "Bookings.php">
                <button id = "bookings" type = "submit"> Make a Booking </button>
            </form>
            <form action = "Contact.php">
                <button id = "contact" type = "submit"> Contact Us</button>
            </form> 
        </div>

        <main>
            
            <h3>Rate us! </h3>
           <p id="start">Our mission is to cater to each guest's specific needs and make your experience the best it can be.<br> That's why we truly value any critique you might have for us.</p>
            <form method = "post" action="rating_action_page.php">
                <input type="text" name="name" id="name" placeholder="Name"></input>
                <textarea rows="9" cols="72" name="comment" id="comment" placeholder="Leave a comment to share your own experience"></textarea>
                <input class="submit" type="submit" value="Submit" id="submit"></input>
            </form>
            <div class="existingComments">
                <?php
                   include_once ('dbConnection.php');
                   
                   echo "<h3>" . "Comments:" . "</h3>" . "<br>";

                    $sql1 = "SELECT customer_name, customer_comment FROM customer_comments ORDER BY ID DESC";
                    $result1 = mysqli_query($conn,$sql1);

                    if (mysqli_num_rows($result1) > 0) {
                        while ($row = mysqli_fetch_assoc($result1)) {
                            echo "<b>" . $row["customer_name"] . "</b>" . "<br>" . $row["customer_comment"] . "<br>" ;
                        }
                    } else {
                        echo "There are no comments yet. Be the first to leave one!";
                    }

                    mysqli_close($conn);
                
                ?>
            </div>
        </main>

        <div id="footer">
            <tr>
                <th><h4> Contact Information :</h4> </th>
                <th> <p> Phone Number: +306938232377 | +306932290884<br> Email: olgaanagnostou@gmail.com <br> Facebook: <a href="https://www.facebook.com/profile.php?id=100014993130089"> Olga Anagnostou</a></p> </th>
            </tr>
            <tr>
                <p>You can also find us on the <a href = "https://www.airbnb.co.in/rooms/42009427?source_impression_id=p3_1590483273_LL8tf7gXJ3LVvmk1&guests=1&adults=1" > Airbnb</a> platform and on <a href="https://www.booking.com/hotel/gr/thessaloniki-waterfront-apartment.el.html"> Booking.com</a></p>
            </tr>
        </div>