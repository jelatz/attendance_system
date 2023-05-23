function forgotPass(){
  document.getElementById('login').style.display='none';
  document.getElementById('forgot').style.display='flex';
}

function login (){
    document.getElementById('login').style.display='flex';
  document.getElementById('forgot').style.display='none';
}
//DARK MODE
function themeChange() {
  var body = document.body;
  var themeLink = document.querySelector(".nav-link[name='themeChange']");
  var welcome = document.getElementsByClassName('welcome-message');
  var tables = document.getElementsByClassName("table");
  var navbar = document.getElementsByClassName('navbar');
  var nav = document.getElementsByClassName('nav-link');
  
  if (body.classList.contains("dark-mode")) {
    body.classList.remove("dark-mode");
    themeLink.textContent = "Dark Mode";   
    for (var i = 0; i < tables.length; i++) {
      tables[i].style.color = 'black';
    }  
    for (var i = 0; i < nav.length; i++) {
      nav[i].style.color = "black";
    }
    for (var i = 0; i < navbar.length; i++) {
      navbar[i].style.backgroundColor = "white";
    }
  } else {
    body.classList.add("dark-mode");
    themeLink.textContent = "Light Mode";
    // for (var i = 0; i < welcome.length; i++) {
    //   welcome[i].style.color = 'black';
    // }
    for (var i = 0; i < tables.length; i++) {
      tables[i].style.color = 'white';
    }
    for (var i = 0; i < navbar.length; i++) {
      navbar[i].style.backgroundColor = "black";
    }
    for (var i = 0; i < nav.length; i++) {
      nav[i].style.color = "white";
    }
    
  }
}

var account = document.getElementById("account");
var children = account.children;
for (var i = 0; i < children.length; i++) {
  if (children[i].classList.contains("active")) {
    account.classList.add('show');
  }
}
