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
  <link rel="stylesheet" href="{{ asset('cssfolder/donate.css') }}" />
  <link rel="stylesheet" href="{{ asset('cssfolder/parcform.css') }}">

  
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

  <!-- Include Parcform -->
  @include('layouts.donateform')
          

        </div>
      </div>

    </div>
  </div>

  <!-- Include Footer -->
  @include('layouts.footer')
  
  <!-- JS -->
  <script src="{{ asset('jsfolder/donatepayment.js') }}"></script>
  <script src="{{ asset('jsfolder/donate.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://js.stripe.com/clover/stripe.js"></script>
  <script>
  var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
  </script> <!-- Stripe JS -->
  
<!--For Monthly and Mount-->
  <script>
document.querySelector('.btnm1').onclick = (e) => {
    e.preventDefault();
    document.getElementById('monthly_amount').value = 10;
};

document.querySelector('.btnm2').onclick = (e) => {
    e.preventDefault();
    document.getElementById('monthly_amount').value = 15;
};

document.querySelector('.btnm3').onclick = (e) => {
    e.preventDefault();
    document.getElementById('monthly_amount').value = 20;
};

document.querySelector('.btnm4').onclick = (e) => {
    e.preventDefault();
    document.getElementById('monthly_amount').value = 25;
};

document.querySelector('.btnm5').onclick = (e) => {
    e.preventDefault();
    document.getElementById('monthly_amount').value = 50;
};

document.querySelector('.btnm6').onclick = (e) => {
    e.preventDefault();
    let other = prompt("Enter monthly amount:");
    if(other) document.getElementById('monthly_amount').value = other;
};


  </script>
</body>
</html>

