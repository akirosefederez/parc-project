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
  <link rel="stylesheet" href="{{ asset('cssfolder/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('cssfolder/donate.css') }}" />
</head>
<body>
  <!-- Include Navbar -->
  @include('layouts.navbar')

  <!-- Donate Main Content -->
  <div class="container donatesection">
    <div class="row row-cols-2">
      
      <!-- Left Column -->
      <div class="col col1">
        <div>
          <h1 class="text-left my-5 title">Donate to PARC</h1>
          <img src="{{ asset('./assets/image/dimg1.png') }}" alt="Donate Image" class="img-fluid mb-4 img1" />
          
          <p class="text-left desc1">
            By pledging, donors will provide essential <br />
            financial support for training expenses, allowing <br />
            these aspiring artist to refine their skills and <br />
            pursue their dreams in the arts.
          </p>

          <p class="text-left desc1">
            Make your donation to PARCaralan today and <br />
            empower the next genaration of artist through <br />
            training and resources.
          </p>
        </div>

        <!-- Details Section -->
        <div class="details">
          <div class="pdt">
            <p>Your support will help PARCaralan:</p>
          </div>

          <div class="details-list">
            <div class="detail-item">
              <div class="music-icon">
                <img src="{{ asset('assets/icons/Music.png') }}" alt="Music" />
              </div>
              <p>Provide free training in music, <br/>
              dance, and theater to artistically gifted <br/>
              children.</p>
            </div>
            <hr />

            <div class="detail-item">
              <div class="detail-icon">
                <img src="{{ asset('assets/icons/Flute.png') }}" alt="Instrument" />
              </div>
              <p>Equip scholars with musical <br/>
              instruments, ensuring they have the <br/>
              tools they need to learn and grow.</p>
            </div>
            <hr />

            <div class="detail-item">
              <div class="detail-icon">
                <img src="{{ asset('assets/icons/Car.png') }}" alt="Bus" />
              </div>
              <p>Cover transportation costs so scholars <br/>
              can access training and opportunities <br/>
              without barriers.</p>
            </div>
            <hr />

            <div class="detail-item">
              <div class="detail-icon">
                <img src="{{ asset('assets/icons/Apple.png') }}" alt="Apple" />
              </div>
              <p>Provide meal allowances to keep <br/>
              young minds and bodies nourished.</p>
            </div>
            <hr />

            <div class="detail-item">
              <div class="detail-icon">
                <img src="{{ asset('assets/icons/Globe.png') }}" alt="Globe" />
              </div>
              <p>Give underserved children the chance <br/>
              to shine, express themselves, and build <br/>
              a brighter future.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col col2">
        <div class="donateform">

          <!-- One-time / Monthly -->
          <div class="center-btn">
            <a href="#" class="btn1">Give Once</a>
            <a href="#" class="btn2">Give Monthly</a>
          </div>

          <!-- Note -->
          <div class="note1">
            <p class="p1">Thank you for making a difference.</p>
            <p class="p2">
              Monthly giving is a simple, impactful way to support PARCaralan Scholars
            </p>
          </div>

          <!-- Monthly Options -->
          <div class="btn-monthly">
            <div class="center-btn">
              <a href="#" class="btnm1">$10/mo</a>
              <a href="#" class="btnm2">$15/mo</a>
              <a href="#" class="btnm3">$20/mo</a>
              <a href="#" class="btnm4">$25/mo</a>
              <a href="#" class="btnm5">$50/mo</a>
              <a href="#" class="btnm6"><b class="dollar">$</b>Other/mo</a>
            </div>
          </div>

          <hr class="break" />

          
          <!-- Personal Info Form -->
          <div>
            <h3 class="formtitle">Your Information</h3>
            <form action="/action_page.php" class="personalinfo">
              <label for="fname">First name</label>
              <input type="text" id="fname" name="fname" />

              <label for="lname">Last name</label>
              <input type="text" id="lname" name="lname" />

              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" />

              <label for="country">Country</label>
              <input type="text" id="country" name="country" />

              <label for="street">Street Address</label>
              <input type="text" id="street" name="street" />

              <label for="city">City</label>
              <input type="text" id="city" name="city" />

              <label for="postal">Postal</label>
              <input type="text" id="postal" name="postal" />

              <p class="p1form">BE PART OF OUR COMMUNITY</p>
              <p class="p2from">
                Stay updated on how you can help empower youth through music. From inspiring stories to events and ways to give - we'll keep you in the loop. You can unsubscribe at any time.
              </p>

            <!-- Radio Buttons -->
              <b><p>I would like to get email updates:</p></b>
              <fieldset class="radio-group">
                <input class="form-check-input" type="radio" name="emailUpdates" id="emailYes" value="yes" />
                <label class="form-check-label" for="emailYes">Yes</label>

                <input class="form-check-input" type="radio" name="emailUpdates" id="emailNo" value="no" />
                <label class="form-check-label" for="emailNo">No</label>
              </fieldset>

              <b><p>I would like to get PARC text messages:</p></b>
              <fieldset class="radio-group">
                <input class="form-check-input" type="radio" name="textUpdates" id="textYes" value="yes" />
                <label class="form-check-label" for="textYes">Yes</label>

                <input class="form-check-input" type="radio" name="textUpdates" id="textNo" value="no" />
                <label class="form-check-label" for="textNo">No</label>
              </fieldset>

          <!-- Note -->
          <div class="note2">
            <p class="p3">
            We will keep your information safe and secure. Please see our<b class="privacy"> Privacy Policy </b>for details of how we use your information.            </p>
          </div>

          <!--Payment Method-->
          <h3 class="formtitle">Payment Method</h3>

          <div class="center-btn pay-btn">
            <a href="#" class="btnm7"><img src="{{ asset('assets/icons/visa.png') }}" alt="Visa" class="visaicon" /></a>
            <a href="#" class="btnm8"><img src="{{ asset('assets/icons/paypal.png') }}" alt="paypal" class="paypalicon" /></a>
          </div>

          <a href="#" class="btnm9">Bank Account</a>

              <label for="postal">Card Number</label>
              <input type="text" id="postal" name="postal" />

            <div class="bankcard">
              <label for="postal">Expiration Date</label>
              <input type="text" id="exp" name="exp" />
              <label for="postal">/</label>
              <input type="text" id="exp" name="exp" />
              <label for="postal">CVV</label>
              <input type="text" id="cvv" name="cvv" />
            </div>

            <div class="last">
              <input type="checkbox" id="checkparc" name="checkparc" value="">
              <label for="vehicle1">I want PARC to receive 100% of my donation. I'll cover processing fees ($0.30).</label><br>
            </div>
              <input type="submit" value="DONATE" />

              
            </form>
          </div>

        </div>
      </div>

    </div>
  </div>

  <!-- Include Footer -->
  @include('layouts.footer')

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
