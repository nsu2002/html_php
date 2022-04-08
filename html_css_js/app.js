function validation(){
    var Name = document.getElementById("name").value;
    var Email = document.getElementById("email").value;
    var Subject = document.getElementById("subject").value;             
    var Message = document.getElementById("message").value;
 
    alert(" Thành công rồi đếy !!!!!!!");
    return true;
 
}

//click to the top
var mybutton = document.getElementById("myBtn");

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


function validateForm() {
    let x = document.forms["myForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }