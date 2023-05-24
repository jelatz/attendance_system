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
// FOR ADMIN DASHBOARD CHART
  // Get the canvas element
  var ctx = document.getElementById('myChart').getContext('2d');

  // Define the data for the bar graph
  var data = {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  };

  // Initialize the bar graph
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

