var navLinks = document.getElementById("navLinks");

      function  showMenu() {
        var navLinks = document.getElementsByClassName("nav-links");
        navLinks[0].style.right = "0";
      }
      function  hideMenu() {
        var navLinks = document.getElementsByClassName("nav-links");
        navLinks[0].style.right = "-200px";
}

window.onload = function(){
  loadTable();
}

function loadTable(){
  var cells = document.getElementsByTagName('td');

  for( let i = 0; i < cells.length ; i++){
    cells[i].style.backgroundColor = 'green';
  }
}
function cerere(x, obj){
  obj.style.backgroundColor=x;
  var chosenInterval = obj.innerHTML;
  var chosenDay = obj.getAttribute('id').toString();
  var interval = document.getElementById('interval')
  var ziua = document.getElementById('ziua')
  if(chosenDay.includes('luni'))
      ziua.setAttribute('value', 1)
  else if(chosenDay.includes('marti'))
      ziua.setAttribute('value', 2)
  else if(chosenDay.includes('miercuri'))
      ziua.setAttribute('value', 3)
  else if(chosenDay.includes('joi'))
      ziua.setAttribute('value', 4)
  else if(chosenDay.includes('vineri'))
      ziua.setAttribute('value', 5)
  else if(chosenDay.includes('sambata'))
      ziua.setAttribute('value', 6)
  interval.setAttribute('value', chosenInterval);
  
}

