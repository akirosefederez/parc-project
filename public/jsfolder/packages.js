// public/js/packages.js
(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    const silverBtn = document.querySelector(".btnm2");
    const silverNote = document.querySelector(".notesilver");

    console.log("packages.js: script loaded");

    if (!silverBtn) {
      console.warn("packages.js: .btnm2 (Silver button) not found in DOM.");
      return;
    }

    if (!silverNote) {
      console.warn("packages.js: .note1 (Silver note) not found in DOM.");
      return;
    }

    // Make sure note is hidden initially (class-based)
    silverNote.classList.remove("show");

    silverBtn.addEventListener("click", function (e) {
      e.preventDefault();

      const isVisible = getComputedStyle(silverNote).display !== "none";
      if (isVisible) {
        silverNote.classList.remove("show");
      } else {
        silverNote.classList.add("show");
        // optional: smooth-scroll the note into view
        silverNote.scrollIntoView({ behavior: "smooth", block: "nearest" });
      }
    });
  });
})();


/**
 <!-- Inline JS for testing -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const silverBtn = document.querySelector(".btnm2");
      const silverNote = document.querySelector(".note1");

      console.log("✅ Script loaded");

      silverBtn.addEventListener("click", function (e) {
        e.preventDefault();
        console.log("👉 Silver button clicked");

        silverNote.classList.toggle("show");
      });
    });
  </script>
 **/
