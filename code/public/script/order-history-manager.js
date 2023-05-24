//add new order form
var addOrderBtn = document.querySelector(".add-order");
addOrderBtn.addEventListener("click", function () {
  var addOrderForm = document.querySelector(".add-order-form");
  addOrderForm.classList.remove("hidden");
  addOrderBtn.classList.add('hidden');
});

//hide add order form
var hideOrderFormBtn = document.querySelector(".cancel-order");
hideOrderFormBtn.addEventListener("click", function () {
  var addOrderForm = document.querySelector(".add-order-form");
  addOrderForm.classList.add("hidden");
  addOrderForm.reset();
  addOrderBtn.classList.remove('hidden');
});

//increment quantity in add order form
var incrementQuantityBtn = document.querySelectorAll(
  ".add-order-form .item-quantity .quantity-btns .add"
);
for (var i = 0; i < incrementQuantityBtn.length; i++) {
  incrementQuantityBtn[i].addEventListener("click", function (event) {
    var incrementQuantityBtnClicked = event.target;
    var quantity = incrementQuantityBtnClicked.parentElement.parentElement.querySelector(
      ".inputbox.quantity-input input"
    );
    // console.log(quantity.value);
    quantity.value = parseInt(quantity.value) + 1;
  });
}

//decrement quantity in add order form
var decrementQuantityBtn = document.querySelectorAll(
  ".add-order-form .item-quantity .quantity-btns .subtract"
);
for (var i = 0; i < decrementQuantityBtn.length; i++) {
  decrementQuantityBtn[i].addEventListener("click", function (event) {
    var decrementQuantityBtnClicked = event.target;
    var quantity = decrementQuantityBtnClicked.parentElement.parentElement.querySelector(
      ".inputbox.quantity-input input"
    );
    // console.log(quantity.value);
    if((quantity.value - 1)>=0)
      quantity.value = parseInt(quantity.value) - 1;
  });
}

//expand details section
var expandThis = document.querySelectorAll(".wrap-item");
var orderDetails = document.querySelectorAll(".orderDetails");

for (var i = 0; i < expandThis.length; i++) {
  var expandSec = expandThis[i];

  (function (index) {
    expandSec.addEventListener("click", function (event) {
      orderDetails[index].classList.toggle("hidden");
    });
  })(i);
}

//edit details button
var editDetails = document.querySelectorAll(".edit-details");

for (var i = 0; i < editDetails.length; i++) {
  var editBtn = editDetails[i];
  editBtn.addEventListener("click", function (event) {
    var editBtnClicked = event.target;
    var pElement = editBtnClicked.parentElement.parentElement;
    var allMinus = pElement.querySelectorAll(".minus");
    var allPlus = pElement.querySelectorAll(".plus");
    var saveChanges = pElement.querySelectorAll(".save-changes");
    var statuses = pElement.querySelectorAll(".statuses-dropdown");

    for (var j = 0; j < allMinus.length; j++) {
      allMinus[j].classList.remove("hidden");
    }
    for (var j = 0; j < allPlus.length; j++) {
      allPlus[j].classList.remove("hidden");
    }
    for (var j = 0; j < saveChanges.length; j++) {
      saveChanges[j].classList.remove("hidden");
    }
    for (var j = 0; j < statuses.length; j++) {
      statuses[j].disabled = false;
    }

    editBtnClicked.classList.add("hidden");
  });
}

//increment and decrement button
var incrementBtn = document.querySelectorAll(".plus");
var decrementBtn = document.querySelectorAll(".minus");
var maxLimit = document.querySelectorAll(".total-quantity");

for (var i = 0; i < incrementBtn.length; i++) {
  var btn = incrementBtn[i];
  var limit = parseInt(maxLimit[i].innerHTML);
  btn.addEventListener("click", function (event) {
    var btnClicked = event.target;
    var input = btnClicked.parentElement.children[1];
    var inputValue = input.innerHTML;
    if (inputValue < limit) {
      var newValue = parseInt(inputValue) + 1;
      input.innerHTML = newValue;
    }
  });
}

for (var i = 0; i < decrementBtn.length; i++) {
  var btn = decrementBtn[i];
  btn.addEventListener("click", function (event) {
    var btnClicked = event.target;
    var input = btnClicked.parentElement.children[1];
    var inputValue = input.innerHTML;
    if (inputValue > 0) {
      var newValue = parseInt(inputValue) - 1;
      input.innerHTML = newValue;
    }
  });
}
