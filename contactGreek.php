<!DOCTYPE html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Thessaloniki Waterfront Apartment Θεσσαλονίκη διαμέρισμα ενοικίαση πόλη κέντρο παραλία Γενική Κλινική φθηνά επικοινωνία κρατήσεις">
    <meta name="author" content="Phoebe Mamaloukas">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <title> Επικοινωνία </title>

    <link rel = "stylesheet" href = "contact_css.css">

    <script src="contact_js.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>

<body>
    <header>
            <a id = "language" href="Contact.php"> EN</a>
            <form action = "homepageGreek.php">
                <button id="backToHome"><i class="fa fa-home"></i> </button>
            </form>
            <h1 id="title"> Thessaloniki Waterfront Appartment </h1>
        </header>
        <div class = "menu">
            <form action = "InfoGreek.php" >
                <button id = "info" type = "submit"> Μάθετε Περισσότερα Για Εμάς </button>
            </form>
            <form action = "RatingGreek.php">
                <button id = "rating" type = "submit"> Κριτικές Πελατών </button>
            </form>
            <form action = "BookingsGreek.php">
                <button id = "bookings" type = "submit"> Κρατήσεις </button>
            </form>
            <form action = "ContactGreek.php">
                <button id = "contact" type = "submit"> Επικοινωνήστε Μαζί Μας</button>
            </form> 
        </div>

        <main>

        <div class="form">
            <form method = "post" action="contact_action_pageGreek.php">
                <h2> Φόρμα Επικοινωνίας</h2>
                <p>Μπορείτε να μας βρείτε χρησιμοποιώντας τις πληροφορίες επικοινωνίας στο κάτω μέρος της σελίδας, ή συμπληρώνοντας την παρακάτω φόρμα:</p>
                <input type="text" id="name" name="name" placeholder="Όνομα">
                <input type="text" id="email" name="email" placeholder="Email">
                <input type="text" id="phone" name="phone" placeholder="Τηλέφωνο (προαιρετικά)">
                <textarea rows="9" cols="75" id="message" name="message" placeholder="Γράψτε το μήνυμά σας"></textarea>
                <input type="submit" value="Υποβολή" id="submit">
            </form> 
        </div>
        <br><br>
        <div class="dropdown">
            <h2>FAQ</h2>
            <button onclick="myFunction1()" class="dropbtn" id="question1">Υπάρχουν αξιοσημείωτοι τουριστικοί προορισμοί στην περιοχή;</button>
            <div  class="dropdown-content" id="answer1">
                <p>Το Μέγαρο Μουσικής Θεσσαλονίκης, όπως και το δημοτικό αθλητικό κέντρο "Ποσειδώνιο", βρίσκονται σε απόσταση δέκα λεπτών με τα πόδια. Το λαογραφικό μουσείο είναι επίσης πολύ κοντά και είναι ενδιαφέρων προορισμός για τουρίστες που θέλουν να μάθουν για το παρελθόν της πόλης. Μπορείτε να επισκεφθείτε το κέντρο της πόλης για τα πιο γνωστά αξιοθέατα (άγαλμα Μεγάλου Αλεξάνδρου, Λευκός Πύργος, Βασιλικό Θέατρο, ΚΘΒΕ, ΧΑΝΘ, ΔΕΘ, Πλατεία Αριστοτέλους, Αρχαιολογικό Μουσείο, Βυζαντινό Μουσείο). Όλα αυτά απέχουν 30-40 λεπτά με τα πόδια (περπατώντας κατά μήκος της παραλίας) ή 15 λεπτά με ποδήλατο ή ηλεκτρικό πατίνι. Πατίνια για ενοικίαση υπάρχουν σε πολλά σημεία κατά μήκος της παραλίας. Μπορείτε επίσης να νοικιάσετε ατομικά ή οικογενειακά ποδήλατα μπροστά από τον Ιστιοπλοϊκό Όμιλο, ο οποίος βρίσκεται δέκα λεπτά περπάτημα από το διαμέρισμα.</p>
            </div>
        </div>
        <div class="dropdown" id="question2">
            <button onclick="myFunction2()" class="dropbtn">Υπάρχουν καλά εστιατόρια / μπαρ στην περιοχή;</button>
            <div  class="dropdown-content" id="answer2">
                <p>Κοντά στο διαμέρισμα, κατά μήκος της παραλίας, υπάρχουν πολλές καφετέριες και εστιατόρια υψηλής ποιότητας. Μέσα στο διαμέρισμα θα βρείτε έναν λεπτομερή κατάλογο με προτεινόμενα μπαρ και εστιατόρια σε κοντινή απόσταση. Κάποια από τα πιο αξιοσημείωτα μέρη είναι το γκουρμέ εστιατόριο Thria και τα μπαρ/εστιατόρια Έπαυλη Μαρόκκου και Casablanca που στεγάζονται σε διατηρητέες νεοκλασικές επαύλεις, χώρια οι παραδοσιακές ταβέρνες που προσφέρουν ποικιλία θαλασσινών, μεζέδες και ούζο.</p>
            </div>
        </div>
        <div class="dropdown">
            <button onclick="myFunction3()" class="dropbtn" id="question3">Και από νυχτερινή ζωή;</button>
            <div  class="dropdown-content" id="answer3">
                <p>Το διαμέρισμα βρίσκεται σε ήσυχη γειτονιά, πράγμα που είναι καλό για τους επισκέπτες μας που επιζητούν γαλήνη και χαλάρωση. Για τους υπόλοιπους, ωστόσο, το επίκεντρο της νυχτερινής ζωής βρίσκεται στην κοντινή Νέα Κρήνη και στα Λαδάδικα στο κέντρο.</p>
            </div>
        </div>
        <div class="dropdown">
            <button onclick="myFunction4()" class="dropbtn" id="question4">Πόσο εύκολα μπορώ να βρω πάρκινγκ κοντά στο σπίτι;</button>
            <div  class="dropdown-content" id="answer4">
                <p>Παρόλο που δεν είναι εύκολο να βρείτε ελεύθερο πάρκινγκ στην ευρύτερη περιοχή, υπάρχουν αρκετά ιδιωτικά πάρκινγκ - στο διαμέρισμα θα βρείτε μια λίστα με τα κοντινότερα από αυτά.</p>
            </div>
        </div>
        <div class="dropdown">
            <button onclick="myFunction5()" class="dropbtn" id="question5">Ανησυχώ σχετικά με τον κορωναϊό</button>
            <div  class="dropdown-content" id="answer5">
                <p>Τα επιδημιολογικά δεδομένα είναι πολύ θετικά στη Θεσσαλονίκη αυτήν τη στιγμή, με πολύ λίγα νέα κρούσματα κάθε μέρα. Το διαμέρισμα καθαρίζεται πάντα επιμελώς μετά την αποχώρηση προηγούμενου πελάτη. Μέσα στο διαμέρισμα θα βρείτε αντισηπτικό και οινόπνευμα. Σε πέντε λεπτά με τα πόδια απόσταση βρίσκεται μία από τις μεγαλύτερες ιδιωτικές κλινικές της πόλης, η EUROMEDICA γενική κλινική. </p>
            </div>
        </div>
        
    </main>
    
        <div id="footer">
            <tr>
                <th><h3> Πληροφορίες Επικοινίας : </h3></th>
                <th> <p> Τηλέφωνο: +306938232377 | +306932290884<br> Email: olgaanagnostou@gmail.com <br> Facebook: <a href="https://www.facebook.com/profile.php?id=100014993130089"> Olga Anagnostou</a></p> </th>
            </tr>
            <tr>
                <p>Μπορείτε να μας βρείτε και στην πλατφόρμα του <a href = "https://www.airbnb.co.in/rooms/42009427?source_impression_id=p3_1590483273_LL8tf7gXJ3LVvmk1&guests=1&adults=1" > Airbnb</a> και στο <a href="https://www.booking.com/hotel/gr/thessaloniki-waterfront-apartment.el.html"> Booking.com</a></p>
            </tr>
        </div>