const passwordField = document.querySelector("#password");
const confirmPasswordField = document.querySelector("#confirm-password");
const showBtns = document.querySelectorAll(".show");

showBtns.forEach(function(btn) {
  btn.addEventListener("click", function() {
    if (passwordField.type === "password") {
      passwordField.type = "text";
      confirmPasswordField.type = "text";
      btn.textContent = "Tutup";
    } else {
      passwordField.type = "password";
      confirmPasswordField.type = "password";
      btn.textContent = "Lihat";
    }
  });
});