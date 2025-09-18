// public/js/packages.js 

//Note Patron
(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    const patronBtn = document.querySelector(".btnm1");
    const patronNote = document.querySelector(".notepatron");

    console.log("packages.js: script loaded");

    if (!patronBtn) {
      console.warn("packages.js: .btnm1 (Patron button) not found in DOM.");
      return;
    }

    if (!patronNote) {
      console.warn("packages.js: .notepatron (Patron note) not found in DOM.");
      return;
    }

    // Make sure note is hidden initially (class-based)
    patronNote.classList.remove("show");

    patronBtn.addEventListener("click", function (e) {
      e.preventDefault();

      const isVisible = getComputedStyle(patronNote).display !== "none";
      if (isVisible) {
        patronNote.classList.remove("show");
      } else {
        patronNote.classList.add("show");
        // optional: smooth-scroll the note into view
        Note.scrollIntoView({ behavior: "smooth", block: "nearest" });
      }
    });
  });
})();

//Note Silver

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
      console.warn("packages.js: .notesilver (Silver note) not found in DOM.");
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

//Note Gold

(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    const goldBtn = document.querySelector(".btnm3");
    const goldNote = document.querySelector(".notegold");

    console.log("packages.js: script loaded");

    if (!goldBtn) {
      console.warn("packages.js: .btnm3 (Gold button) not found in DOM.");
      return;
    }

    if (!goldNote) {
      console.warn("packages.js: .notegold (Gold note) not found in DOM.");
      return;
    }

    // Make sure note is hidden initially (class-based)
    goldNote.classList.remove("show");

    goldBtn.addEventListener("click", function (e) {
      e.preventDefault();

      const isVisible = getComputedStyle(goldNote).display !== "none";
      if (isVisible) {
        goldNote.classList.remove("show");
      } else {
        goldNote.classList.add("show");
        // optional: smooth-scroll the note into view
        Note.scrollIntoView({ behavior: "smooth", block: "nearest" });
      }
    });
  });
})();

//Note Platinum

(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    const platinumBtn = document.querySelector(".btn1");
    const platinumNote = document.querySelector(".noteplatinum");

    console.log("packages.js: script loaded");

    if (!platinumBtn) {
      console.warn("packages.js: .btn1 (Platinum button) not found in DOM.");
      return;
    }

    if (!platinumNote) {
      console.warn("packages.js: .noteplatinum (Platinum note) not found in DOM.");
      return;
    }

    // Make sure note is hidden initially (class-based)
    platinumNote.classList.remove("show");

    platinumBtn.addEventListener("click", function (e) {
      e.preventDefault();

      const isVisible = getComputedStyle(platinumNote).display !== "none";
      if (isVisible) {
        platinumNote.classList.remove("show");
      } else {
        platinumNote.classList.add("show");
        // optional: smooth-scroll the note into view
        Note.scrollIntoView({ behavior: "smooth", block: "nearest" });
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
