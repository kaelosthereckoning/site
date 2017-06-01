// JavaScript Document

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function selection() {
	"use strict";
    var x = document.getElementById("actual-navbar");
    if (x.className === "navbar-nav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function navdrop() {
	"use strict";
    document.getElementById("topics-dropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
	"use strict";
  if (!event.target.matches('.dropdown-toggle')) {
    var dropdowns = document.getElementsByClassName("dropdown-menu");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
};
