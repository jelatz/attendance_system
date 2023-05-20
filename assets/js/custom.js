function forgotPass(){
  document.getElementById('login').style.display='none';
  document.getElementById('forgot').style.display='flex';
}

function login (){
    document.getElementById('login').style.display='flex';
  document.getElementById('forgot').style.display='none';
}

function toggleTheme() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}
