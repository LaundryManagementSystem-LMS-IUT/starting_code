
//expand details section
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

