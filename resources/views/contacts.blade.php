<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PARC Foundation</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('cssfolder/mainnavbar.css') }}" />
  <link rel="stylesheet" href="{{ asset('cssfolder/contacts.css') }}" />
</head>
<body>
  <footer class="footer">
    <div class="footer-container">
      <!-- Left Links Section -->
      <div class="footer-links">
        <div class="footer-column">
          <h4>SUPPORT</h4>
          <ul>
            <li><a href="#">Donate now</a></li>
            <li><a href="#">Adopt a Scholar</a></li>
            <li><a href="#">Volunteer</a></li>
            <li><a href="#">Be a PARCner</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>CONNECT</h4>
          <ul>
            <li><a href="#">Take action</a></li>
            <li><a href="#">Get involved</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>DISCOVER</h4>
          <ul>
            <li><a href="#">Who we are</a></li>
            <li><a href="#">Latest stories</a></li>
            <li><a href="#">Our work</a></li>
            <li><a href="#">Newsroom</a></li>
          </ul>
        </div>
      </div>

      <!-- Right Sign-up Form -->
      <div class="footer-form">
        <h4 class="highlight">GET THE LATEST UPDATES</h4>
        <form>
          <label>First Name <span class="required">*required</span></label>
          <input type="text" required>

          <label>Last Name <span class="required">*required</span></label>
          <input type="text" required>

          <label>Email Address <span class="required">*required</span></label>
          <input type="email" required>

          <h4 class="highlight">BE A PART OF OUR COMMUNITY</h4>
          <p>
            Stay updated on how you can help empower youth through music. From inspiring stories to events and ways to give - we'll keep you in the loop. You can unsubscribe at any time.
          </p>

          <p>I would like to get email updates:</p>
          <label><input type="radio" name="email-updates" value="yes"> Yes</label>
          <label><input type="radio" name="email-updates" value="no"> No</label>

          <p>I would like to get PARC text messages:</p>
          <label><input type="radio" name="text-updates" value="yes"> Yes</label>
          <label><input type="radio" name="text-updates" value="no"> No</label>

          <button type="submit" class="btn">Sign Up</button>
        </form>

        <p class="small-text">
          We will keep your information safe and secure. Please see our Privacy Policy for details of how we use your information.
        </p>
        <p class="small-text">
          This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.
        </p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
