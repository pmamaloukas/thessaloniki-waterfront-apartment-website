<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <meta name="description" content="Thessaloniki Waterfront Apartment rent flat cheap city centre">
    <meta name="author" content="Phoebe Mamaloukas">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


    <title> Info </title>

    <link rel = "stylesheet" href = "Info_css.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>

    <script src="Info_js.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
            <a id = "language" href="InfoGreek.php"> GR</a>
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
        <table>
            <h2 class="rooms">Amenities</h2>
            <tr>
                <td>Central Heating</td>
                <td>SAT TV</td>
                <td>Washing Machine</td>
                <td>Linen</td>
                <td>Oven / Stove</td>
            </tr>
            <tr>
                <td>Air Conditioning</td>
                <td>Stereo</td>
                <td>Hairdryer</td>
                <td>Towels</td>
                <td>Fridge</td>
            </tr>
            <tr>
                <td>Hot Water at All Times</td>
                <td>     </td>
                <td>Iron / Ironing Board</td>
                <td>Beach Essentials</td>
                <td>Microwave</td>
            </tr>
            <tr>
                <td>Free Wifi</td>
                <td>    </td>
                <td>Hygiene Products</td>
                <td>Extra Bedding</td>
                <td>Dishwasher</td>
            </tr>
            <tr>
                <td>First Aid Kit</td>
                <td>    </td>
                <td>    </td>
                <td>    </td>
                <td>Kettle / Coffee Maker</td>
            </tr>
            <tr>
                <td>Fire Extinguisher</td>
                <td>    </td>
                <td>    </td>
                <td>    </td>
                <td>Cooking Essentials</td>
            </tr>
            <tr>
                <td>Antiseptic</td>
                <td>    </td>
                <td>    </td>
                <td>    </td>
                <td>    </td>
            </tr>

        </table>
        <br><br>
        <img id = "endOfChapter" src="endOfChapter.png">
        <h1 class="rooms">Sherlock's Mind Palace</h1>
        <div class="images">
        <img class="LivingRoomPics" id ="first" src="photos/livingRoomPanoramic.JPG">
            <img class="LivingRoomPics" src="photos/telescope1.jpg">
            <img class="LivingRoomPics" src="photos/pianoLandscape.JPG">
            <img class="LivingRoomPics" src="photos/bookcaseCropped.jpg">
            <img class="LivingRoomPics" src="photos/bookcaseRoomLandscape.jpg">
            <img class="LivingRoomPics" src="photos/rixtari.jpg">
            <button class="left" onclick="plusDivsLR(-1)"><i class="fa fa-angle-left"></i></button>
            <button class="right" onclick="plusDivsLR(1)"><i class="fa fa-angle-right"></i></button>
        </div>
        <p class="description">A large, airy <b>living room</b> for socializing and spending time together during the day. We provide many options to pass the time, like <b>satellite TV</b>, a vintage <b>stereo</b> with a plethora of CDs to choose from, as well as a shiny wooden Cherny <b>piano</b> to elevate your experience. If you're still not satisfied, don't worry, you can always take up stargazing using a brand new <b>telescope</b>, or immerse yourself in the world of literature by choosing from a large selection of old and new <b>books</b>. Finally, for our younger guests, we offer a variety of <b>board and card games</b>, as well as <b>drawing equipment</b> to let them unleash their inner artist. All embroideries and knittings are traditional, hand-made family heirlooms.</p>

        <h1 class="rooms">Jessica Rabbit's Master Bedroom</h1>
        <div class="images">
            <img class="BedroomPics" id ="first" src="photos/bedroomLandscape.JPG">
            <img class="BedroomPics" src="photos/bedroomArtistic.JPG">

            <button class="left" onclick="plusDivsBeR(-1)"><i class="fa fa-angle-left"></i></button>
            <button class="right" onclick="plusDivsBeR(1)"><i class="fa fa-angle-right"></i></button>
        </div>
        <p class="description"> Done for the day? Make your way to the <b>master bedroom</b>, where a large double bed with a <b>comfortable latex mattress </b> and <b>soft linen</b> awaits you to offer you the best night's sleep you can get. The room is equipped with plenty of <b>closet space</b> and a <b>dresser with clean bedding</b> and <b>towels</b> so that you never run out. </p>
        
        <h1 class="rooms">Pooh's Thoughtful Spot</h1>
        <div class="images">
        <img class="SittingRoomPics" id ="first" src="photos/sittingRoomLandscape1.jpg">
        <img class="SittingRoomPics"  src="photos/sittingRoomLandscape.JPG">
            <img class="SittingRoomPics" src="photos/sittingRoomLamp.JPG">
            <button class="left" onclick="plusDivsSR(-1)"><i class="fa fa-angle-left"></i></button>
            <button class="right" onclick="plusDivsSR(1)"><i class="fa fa-angle-right"></i></button>
        </div>
        <p class="description">This bright, sunny room is a pleasant space that can be used as a <b>sitting room during the day</b>, as well as an <b>extra bedroom during the night</b>, as in it there are two <b>collapsible beds</b>. The fragrance of freshly cut grass from the nearby park and the light sea breeze from the waterfront seep through the <b>wide french windows</b> - a great advantage for the hot days of summer.</p>
        
        <h1 class="rooms">Little Mermaid's Spa Corner</h1>
        <div class="images">
        <img class="BathroomPics" id ="first" src="photos/bathroomCandles.JPG">
            <img class="BathroomPics" src="photos/bathtub.JPG">
            <img class="BathroomPics" src="photos/bathroomLandscape1.jpg">
            <img class="BathroomPics" src="photos/bathroomBathtub.jpg">
            <button class="left" onclick="plusDivsBaR(-1)"><i class="fa fa-angle-left"></i></button>
            <button class="right" onclick="plusDivsBaR(1)"><i class="fa fa-angle-right"></i></button>
        </div>
        <p class="description"> The <b>bathroom</b> invites you to a unique experience of relaxation. Enjoy a warm bath in the <b>bathtub</b>, accompanied by <b>scented candles</b>, carefully selected <b>cosmetic products</b> and <b>seashell decorations</b> all the way from the beautiful beaches of Chalkidiki. <b>A hairdryer, washing machine, iron and ironing board</b> complete our provisions for your clean and convenient stay.</p>
        
        <h1 class="rooms">Ratatouille's Larder</h1>
        <div class="images">
        <img class="KitchenPics" id ="first" src="photos/kitchenLandscape.JPG">
            <img class="KitchenPics" src="photos/kitchenCupboards.JPG">
            <img class="KitchenPics" src="photos/kitchenCupboardOpen.JPG">
            <img class="KitchenPics" src="photos/coffeeArtistic.jpg">
            <button class="left" onclick="plusDivsK(-1)"><i class="fa fa-angle-left"></i></button>
            <button class="right" onclick="plusDivsK(1)"><i class="fa fa-angle-right"></i></button>
        </div>
        <p class="description"> Come along to the <b>kitchen</b>, the kettle's boiling! It combines traditional and modern elements. We provide a full selection of <b> crockery </b> and <b>cooking equipment</b> for all your meals. You will also have <b>an oven, stove, microwave, kettle, as well as a Tassimo coffee maker</b>, so that you can bring with you all your favorite flavors - don't be loath to experiment, the <b>dishwasher</b> will clean up for you. After all, our goal is to make you feel at home every day of your stay. </p>
        <img src="endOfChapter.png" id="endOfChapter">
        <div class="hostDetails">
            <img src="photos/host.jpg" id="hostPhoto">
            <p> <br>Your host, Olga, is always at your disposal and willing to help you with anything you might need. She lives very close to the appartment, so it's no trouble for her to come over and provide her assistance in person, should you require it. No matter what you need, don't hesitate to ask!</p>
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
</body>