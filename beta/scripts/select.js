function btnToggle(evt, name) {

  select = document.getElementsByClassName("btn-select-pro");
  for (i = 0; i < select.length; i++) {
    select[i].className = select[i].className.replace(" active", "");
  }

  evt.currentTarget.className += " active";

} 

function otherOff() {
  document.getElementById('other').style.display = "none";
}

function otherOn() {
  document.getElementById('other').style.display = "block";
}

function btnMulti(evt) {
  evt.currentTarget.classList.toggle('active');
}

function btnToggleTwo(evt) {

  select = document.getElementsByClassName("btn-select-pay");
  for (i = 0; i < select.length; i++) {
    select[i].className = select[i].className.replace(" active", "");
  }

  evt.currentTarget.className += " active";

  
} 

function btnToggleThree(evt) {

  select = document.getElementsByClassName("btn-select-tip");
  for (i = 0; i < select.length; i++) {
    select[i].className = select[i].className.replace(" active", "");
  }

  evt.currentTarget.className += " active";

  
} 




document.getElementById("default-item").click();
document.getElementById("default-item-two").click();
document.getElementById("default-item-three").click();