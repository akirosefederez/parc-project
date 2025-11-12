document.addEventListener("DOMContentLoaded", function () {
  const visaBtn = document.querySelector(".btnm7");
  const paypalBtn = document.querySelector(".btnm8");
  const bankBtn = document.querySelector(".btnm9");
  const paymentField = document.querySelector("#payment_method");

  // Group all buttons for easy reset
  const buttons = [visaBtn, paypalBtn, bankBtn];

  // Utility: remove 'active' class from all buttons
  function clearActive() {
    buttons.forEach(btn => btn.classList.remove("active"));
  }

  // Utility: set active button and update hidden field
  function setPayment(method, clickedButton) {
    clearActive();
    clickedButton.classList.add("active");
    paymentField.value = method;
    console.log("Selected payment method:", method);
  }

  // Add click events
  visaBtn.addEventListener("click", function (e) {
    e.preventDefault();
    setPayment("Visa", this);
  });

  paypalBtn.addEventListener("click", function (e) {
    e.preventDefault();
    setPayment("PayPal", this);
  });

  bankBtn.addEventListener("click", function (e) {
    e.preventDefault();
    setPayment("Bank Account", this);
  });
});
