function myFunction1() {
  document.getElementById("answer1").classList.toggle("show");
  document.getElementById("answer2").classList.remove("show");
  document.getElementById("answer3").classList.remove("show");
  document.getElementById("answer4").classList.remove("show");
  document.getElementById("answer5").classList.remove("show");
}

function myFunction2() {
    document.getElementById("answer2").classList.toggle("show");
    document.getElementById("answer1").classList.remove("show");
    document.getElementById("answer3").classList.remove("show");
    document.getElementById("answer4").classList.remove("show");
    document.getElementById("answer5").classList.remove("show");
  }

  function myFunction3() {
    document.getElementById("answer3").classList.toggle("show");
    document.getElementById("answer2").classList.remove("show");
    document.getElementById("answer1").classList.remove("show");
    document.getElementById("answer4").classList.remove("show");
    document.getElementById("answer5").classList.remove("show");
  }

  function myFunction4() {
    document.getElementById("answer4").classList.toggle("show");
    document.getElementById("answer2").classList.remove("show");
    document.getElementById("answer3").classList.remove("show");
    document.getElementById("answer1").classList.remove("show");
    document.getElementById("answer5").classList.remove("show");
  }

  function myFunction5() {
    document.getElementById("answer5").classList.toggle("show");
    document.getElementById("answer2").classList.remove("show");
    document.getElementById("answer3").classList.remove("show");
    document.getElementById("answer1").classList.remove("show");
    document.getElementById("answer4").classList.remove("show");
  }

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

