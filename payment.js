document.addEventListener("DOMContentLoaded", function () {
  var dropdownButton = document.getElementById("dropdown-button");
  var dropdownMenu = document.getElementById("dropdown-menu");
  var selectedPaymentSpan = document.getElementById("selected-payment");
  var selectedLogo = document.getElementById("selected-logo");
  var inputPaymentId = document.getElementById("paymentIdInput");

  var paymentLogos = {
    gopay: "https://via.placeholder.com/20?text=GoPay", // Replace with actual logo URLs
    ovo: "https://static.vecteezy.com/system/resources/previews/028/766/360/large_2x/ovo-ewallet-payment-icon-symbol-free-png.png", // Replace with actual logo URLs
    dana: "https://static.vecteezy.com/system/resources/previews/028/766/365/non_2x/dana-payment-icon-symbol-free-png.png", // Replace with actual logo URLs
    linkaja: "https://via.placeholder.com/20?text=LinkAja", // Replace with actual logo URLs
  };

  dropdownButton.addEventListener("click", function () {
    dropdownMenu.classList.toggle("hidden");
  });

  dropdownMenu.addEventListener("click", function (event) {
    if (event.target.closest("div[data-value]")) {
      var selectedPayment = event.target
        .closest("div[data-value]")
        .getAttribute("data-value");
      const selectedPaymentMethod = paymentMethods.find(
        (paymentMethod) => paymentMethod.name === selectedPayment
      );
      selectedPaymentSpan.innerHTML = `
                  <img src="img/logopayment/${
                    selectedPaymentMethod.gambar
                  }" alt="Payment Logo" class="h-5 mr-2">
                  ${event.target.textContent.trim()}
              `;
      selectedLogo.src = paymentLogos[selectedPayment];
      dropdownMenu.classList.add("hidden");
      inputPaymentId.value = selectedPaymentMethod.id;
    }
  });

  document.addEventListener("click", function (event) {
    if (
      !dropdownButton.contains(event.target) &&
      !dropdownMenu.contains(event.target)
    ) {
      dropdownMenu.classList.add("hidden");
    }
    document
      .getElementById("phone")
      .addEventListener("input", function (event) {
        var phoneInput = event.target;
        var phoneNumber = phoneInput.value.replace(/\D/g, ""); // Menghapus karakter non-numerik
        phoneInput.value = phoneNumber; // Mengganti nilai input dengan versi yang sudah divalidasi
      });
  });
});
