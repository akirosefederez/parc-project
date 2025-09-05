<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PARC Foundation</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('cssfolder/main.css') }}">
  <link rel="stylesheet" href="{{ asset('cssfolder/donate.css') }}">
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
          <img src="{{ asset('./assets/image/dimg1.png') }}" alt="Donate Image" class="img-fluid mb-4 img1">
          
          <p class="text-left desc1">
            By pledging donors will provide essential <br>
            financial support for training expenses, allowing <br>
            these aspiring artist to refine their skills and <br>
            pursue thier dreams in the arts.
          </p>

          <p class="text-left desc1">
            Make your donation to PARCaralan today and <br>
            empower the next genaration pf artist through <br>
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
                <img src="{{ asset('assets/icons/Music.png') }}" alt="Music">
              </div>
              <p>Provide free training in music, dance, and theater to artistically gifted children.</p>
            </div>
            <hr>
            <div class="detail-item">
              <div class="detail-icon">
                <img src="{{ asset('assets/icons/Flute.png') }}" alt="Instrument">
              </div>
              <p>Equip scholars with musical instruments, ensuring they have the tools they need to learn and grow.</p>
            </div>
            <hr>
            <div class="detail-item">
              <div class="detail-icon">
                <img src="{{ asset('assets/icons/Car.png') }}" alt="Bus">
              </div>
              <p>Cover transportation costs so scholars can access training and opportunities without barriers.</p>
            </div>
            <hr>
            <div class="detail-item">
              <div class="detail-icon">
                <img src="{{ asset('assets/icons/Apple.png') }}" alt="Apple">
              </div>
              <p>Provide meal allowances to keep young minds and bodies nourished.</p>
            </div>
            <hr>
            <div class="detail-item">
              <div class="detail-icon">
                <img src="{{ asset('assets/icons/Globe.png') }}" alt="Globe">
              </div>
              <p>Give underserved children the chance to shine, express themselves, and build a brighter future.</p>
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
          <div class="note">
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
            </div>           

            <div class="center-btn"> 
              <a href="#" class="btnm4">$25/mo</a>
              <a href="#" class="btnm5">$50/mo</a>
              <a href="#" class="btnm6">$Other/mo</a>
            </div>  
          </div>

        </div>    
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
