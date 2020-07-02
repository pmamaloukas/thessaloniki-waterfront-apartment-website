

var slideIndex = 1;
showDivs(slideIndex);

function plusDivsLR(n) {
  showDivsLR(slideIndex += n);
}

function plusDivsSR(n) {
  showDivsSR(slideIndex += n);
}

function plusDivsBaR(n) {
  showDivsBaR(slideIndex += n);
}

function plusDivsBeR(n) {
  showDivsBeR(slideIndex += n);
}

function plusDivsK(n) {
  showDivsK(slideIndex += n);
}

function showDivsLR(n) {
  var i;
  var x = document.getElementsByClassName("LivingRoomPics");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function showDivsSR(n) {
  var i;
  var x = document.getElementsByClassName("SittingRoomPics");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function showDivsBeR(n) {
  var i;
  var x = document.getElementsByClassName("BedroomPics");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function showDivsBaR(n) {
  var i;
  var x = document.getElementsByClassName("BathroomPics");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function showDivsK(n) {
  var i;
  var x = document.getElementsByClassName("KitchenPics");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}