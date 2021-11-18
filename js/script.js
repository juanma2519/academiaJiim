

function myFunction() {
  var x = document.getElementById("myTopnav");
  const body = document.getElementById("burger");

  body.classList.toggle("nav-open");
  
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  } 
}


