<!DOCTYPE html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Thessaloniki Waterfront Apartment Θεσσαλονίκη διαμέρισμα ενοικίαση πόλη κέντρο παραλία Γενική Κλινική φθηνά κριτικές πελατών σχόλια">
    <meta name="author" content="Phoebe Mamaloukas">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


    <title> Κριτικές </title>

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
            <a id = "language" href="Rating.php"> ΕΝ</a>
            <form action = "homepageGreek.php">
                <button id="backToHome"><i class="fa fa-home"></i> </button>
            </form>
            <h1 id="title"> Thessaloniki Waterfront Appartment </h1>
        </header>
        <div class = "menu">
            <form action = "InfoGreek.php" >
                <button id = "info" type = "submit"> Μάθετε Περισσότερα για Εμάς </button>
            </form>
            <form action = "RatingGreek.php">
                <button id = "rating" type = "submit"> Κριτικές Πελατών </button>
            </form>
            <form action = "BookingsGreek.php">
                <button id = "bookings" type = "submit"> Κρατήσεις </button>
            </form>
            <form action = "contactGreek.php">
                <button id = "contact" type = "submit">Επικοινωνείστε Μαζί Μας</button>
            </form> 
        </div>

        <main>
            
            <h3>Προσθέστε την κριτική σας! </h3>
            <p id="start"> Στόχος μας είναι να εξυπηρετήσουμε τις ιδιαίτερες ανάγκες κάθε επισκέπτη μας και να σας προσφέρουμε την καλύτερη δυνατή εμπειρία. <br>Γι' αυτό εκτιμάμε ιδιαίτερα την όποια κριτική σας.</p>
            <form method = "post" action="rating_action_pageGreek.php">
                <input type="text" name="name" id="name" placeholder="Όνομα"></input>
                <textarea rows="9" cols="72" name="comment" id="comment" placeholder="Κάντε ένα σχόλιο για να μοιραστείτε την εμπειρία σας"></textarea>
                <input class="submit" type="submit" value="Υποβολή" id="submit"></input>
            </form>
            <div class="existingComments">
                <?php
                   include_once ('dbConnection.php');
                   
                   echo "<h3>" . "Σχόλια:" . "</h3>" . "<br>";

                    $sql1 = "SELECT customer_name, customer_comment FROM customer_comments ORDER BY ID DESC";
                    $result1 = mysqli_query($conn,$sql1);

                    if (mysqli_num_rows($result1) > 0) {
                        while ($row = mysqli_fetch_assoc($result1)) {
                            echo "<b>" . $row["customer_name"] . "</b>" . "<br>" . $row["customer_comment"] . "<br><br>";
                        }
                    } else {
                        echo "Δεν υπάρχουν σχόλια ακόμα. Κάντε το πρώτο!";
                    }

                    mysqli_close($conn);
                
                ?>
            </div>
        </main>

        <div id="footer">
            <tr>
                <th><h4> Πληροφορίες Επικοινωνίας : </h4></th>
                <th> <p> Τηλέφωνο: +306938232377 | +306932290884<br> Email: olgaanagnostou@gmail.com <br> Facebook: <a href="https://www.facebook.com/profile.php?id=100014993130089"> Olga Anagnostou</a></p> </th>
            </tr>
            <tr>
                <p>Μπορείτε να μας βρείτε και στην πλατφόρμα του <a href = "https://www.airbnb.co.in/rooms/42009427?source_impression_id=p3_1590483273_LL8tf7gXJ3LVvmk1&guests=1&adults=1" > Airbnb</a> και στο <a href="https://www.booking.com/hotel/gr/thessaloniki-waterfront-apartment.el.html"> Booking.com</a></p>
            </tr>
        </div>