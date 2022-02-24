// Get the modal
const modal = document.getElementById("addcart-modal");
const modalAcc = document.getElementById("checkout-modal");
const modalCreate = document.getElementById("create-modal");


// Get the button that opens the modal
const btn = document.getElementById("addcart");
const checkout = document.getElementById("checkout");
const create = document.getElementById("create-acc");


// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

checkout.onclick = function() {
  modalAcc.style.display = "block";
  modal.style.display = "none";
}

create.onclick = function() {
  modalAcc.style.display = "none";
  modalCreate.style.display = "block";
}




