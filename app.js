(function () {
  "use strict";

  window.addEventListener("load", init);

  function init() {
    document.getElementById("reset").addEventListener("click", reset);

    document.getElementById("form").addEventListener("submit", function (event) {
      var nameInput = document.querySelector('input[name="name"]');
      var emailInput = document.querySelector('input[name="email"]');
      var subjectInput = document.querySelector('input[name="subject"]');
      var messageInput = document.getElementById("message");

      if (!nameInput.value || !emailInput.value || !subjectInput.value || !messageInput.value) {
        document.querySelector(".alert").style.visibility = "visible";
        event.preventDefault();
      }
    });
  }

  function reset() {
    var formControls = document.querySelectorAll(".form-control");
    formControls.forEach((formControl) => {
      formControl.value = "";
    });
  }
})();
