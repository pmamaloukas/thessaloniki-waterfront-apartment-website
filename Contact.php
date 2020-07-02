<!DOCTYPE html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Thessaloniki Waterfront Apartment rent flat cheap city centre contact book booking">
    <meta name="author" content="Phoebe Mamaloukas">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


    <title> Contact </title>

    <link rel = "stylesheet" href = "contact_css.css">

    <script src="contact_js.js"> </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>

<body>
    <header>
            <a id = "language" href="contactGreek.php"> GR</a>
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

        <div class="form">
            <form method = "post" action="contact_action_page.php">
                <h2> Contact Form</h2>
                <p>You can contact us using the contact information at the bottom of the page, or you can complete the following form:</p>
                <input type="text" id="name" name="name" placeholder="Name">
                <input type="text" id="email" name="email" placeholder="Email">
                <input type="text" id="phone" name="phone" placeholder="Phone Number (optional)">
                <textarea rows="9" cols="75" id="message" name="message" placeholder="Type your Message"></textarea>
                <input type="submit" value="Submit" id="submit">
            </form> 
        </div>
        <br><br>
        <div class="dropdown">
            <h2>FAQ</h2>
            <button onclick="myFunction1()" class="dropbtn" id="question1">Are there any notable tourist attractions in the area?</button>
            <div  class="dropdown-content" id="answer1">
                <p>The Music Hall (Opera) of Thessaloniki as well as the public Sports Center and Swimming Pool "Poseidonio" is within 10 min walking distance. The Folklore Museum is also very close and it is a very interesting destination for tourists intrigued by the city's bygone era. You can reach the city centre and the most famous sights (Alexander the Great's statue, White Tower, Royal Theatre, State Theatre, YMCA, International Fair, Aristotle's Square, Archaelogical Museum, Byzantine Museum) on foot (walking along the waterfront) in 30-40 min or by bike or electric scooter in 15 min. Electric scooters for hire are scattered along the waterfront. You can also hire bikes and carriages with pedals in front of the Sailing Club wich is situated by the sea within 10 min walking distance. </p>
            </div>
        </div>
        <div class="dropdown" id="question2">
            <button onclick="myFunction2()" class="dropbtn">Are there any good restaurants / bars in the area?</button>
            <div  class="dropdown-content" id="answer2">
                <p>Near the appartment, along the waterfront, there are numerous high quality cafeterias and restaurants. In the appartment you will find a detailed catalog with highly recommended bars and restaurants within walking distance of the flat. Some of the most remarkable places are the gourmet restaurant <i> Thria</i> and the bar/restaurants <i>Marokkou Mansion</i> and <i> Casablanca</i> which are housed in converted neoclassical mansions, let alone the numerous traditional taverns offering a selection of seafood, meze and ouzo. </p>
            </div>
        </div>
        <div class="dropdown">
            <button onclick="myFunction3()" class="dropbtn" id="question3">What about the nightlife?</button>
            <div  class="dropdown-content" id="answer3">
                <p>The flat is located in a quiet neighborhood, which will suit those guests that crave peace and relaxation. For the rest, however, the epicenter of nightlife is located in the nearby Nea Krini and Ladadika in the city center.</p>
            </div>
        </div>
        <div class="dropdown">
            <button onclick="myFunction4()" class="dropbtn" id="question4">How easy is it to find parking space around the house?</button>
            <div  class="dropdown-content" id="answer4">
                <p>Even though it is not very easy to find free parking space in the wider region, there are several private parking lots; in the appartment you will find a detailed list of the nearest ones.</p>
            </div>
        </div>
        <div class="dropdown">
            <button onclick="myFunction5()" class="dropbtn" id="question5">I'm worried about corοna virus</button>
            <div  class="dropdown-content" id="answer5">
                <p>Epidemiological statistics are very positive in Greece at the moment, with very few new incidents every day. The appartment is always thoroughly cleaned after every visitor's departure. In the flat we provide antiseptic and medical alcohol (also regular alcohol ;P). At a 5-minute walking distance there is one of the biggest private hospitals in the city, EUROMEDICA general hospital.</p>
            </div>
        </div>
        
    </main>

        <div id="footer">
            <tr>
                <th><h3> Contact Information : </h3></th>
                <th> <p> Phone Number: +306938232377 | +306932290884<br> Email: olgaanagnostou@gmail.com <br> Facebook: <a href="https://www.facebook.com/profile.php?id=100014993130089"> Olga Anagnostou</a></p> </th>
            </tr>
            <tr>
                <p>You can also find us on the <a href = "https://www.airbnb.co.in/rooms/42009427?source_impression_id=p3_1590483273_LL8tf7gXJ3LVvmk1&guests=1&adults=1" > Airbnb</a> platform and on <a href="https://www.booking.com/hotel/gr/thessaloniki-waterfront-apartment.el.html"> Booking.com</a></p>
            </tr>
        </div>