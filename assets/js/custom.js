function forgotPass(){
  document.getElementById('login').style.display='none';
  document.getElementById('forgot').style.display='flex';
}

function login (){
    document.getElementById('login').style.display='flex';
  document.getElementById('forgot').style.display='none';
}

function themeChange() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}

var account = document.getElementById("account");
var children = account.children;
for (var i = 0; i < children.length; i++) {
  if (children[i].classList.contains("active")) {
    account.classList.add('show');
  }
}
