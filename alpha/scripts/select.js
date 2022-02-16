function btnToggle(evt) {

  select = document.getElementsByClassName("btn-select-pro");
  for (i = 0; i < select.length; i++) {
    select[i].className = select[i].className.replace(" active", "");
  }

  evt.currentTarget.className += " active";
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

document.getElementById("default-item").click();
document.getElementById("default-item-two").click();