<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PARC Foundation</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('cssfolder/main.css') }}">
</head>
<body>

  <!-- Include Navbar -->
  @include('layouts.navbar')
  
  <!-- carousel -->
  <div class="container-fluid">
    <div class="carousel-container">
      <div class="carousel-wrapper">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          
          <!-- Slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/slider/Property 1=1.png" class="d-block w-100" alt="Mountain">
            </div>
            <div class="carousel-item">
              <img src="./assets/slider/Property 1=2.png" class="d-block w-100" alt="Ocean">
            </div>
            <div class="carousel-item">
              <img src="./assets/slider/Property 1=3.png" class="d-block w-100" alt="Forest">
            </div>
          </div>

<!-- Carousel Indicators -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>


          <!-- Custom Controls -->
          <button class="carousel-control custom-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="circle-btn"><i class="bi bi-arrow-left"></i></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control custom-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="circle-btn"><i class="bi bi-arrow-right"></i></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>
      </div>
    </div>
  </div>
  <!-- carousel ends here -->

  <!-- PARCaralan starts here -->
    <div class="container parcaralan">
        <h1 class="title partitle">PARCaralan</h1>
        <p class="paragraph parcdetails">
            We harness the power of performing arts to transform the lives of
            underprivileged children & youth through our flagship program.
        </p>
        <button class="cta-button">Learn More</button>
    </div>
  <!-- PARCaralan ends here -->

<div class="main-flex">
  <div class="image-container">
    <img src="assets\image\groupphoto.png" alt="Orchestra" class="main-image">
  </div>
  <div class="info-section">
    <h2>Who we serve?</h2>
    <p class="info-title"><b class="emoji">🧑‍🎤Who We Help:</b> Artistically gifted children (ages 7-12) from<br> underserved communities, accepted as scholars.</p>
    <p class="info-title"><b class="emoji">📚What They Receive:</b> Free training in music, dance, and theater, plus<br> school supplies, transportation, and meal allowances.</p>
    <p class="info-title"><b class="emoji">🌱Beyond the Arts:</b> Values formation, character-building, and cultural<br> immersions to nurture ambition and appreciation for the arts.</p>
    <p class="info-title"><b class="emoji">🚀Future-Ready:</b> By age 17, we connect them with top art schools,<br> mentors, and career opportunities—on stage, behind the scenes, or in<br> other fields where they can apply their skills.</p>
  </div>
</div>

<!-- second section starts here -->
<div class="second-section">
<div class="row justify-content-center">
  <div class="col-auto">
    <img src="assets/image/PARC SOG Event-6879 1.png" alt="img1" class="img1">
    <div class="sectitle">
    <p class="p1">STORY</p>
    <p class="p2">Changing the Tune of Tomorrow</p><hr class>
    <p>We partner with communities to<br> uplift lives and build brighter futures<br> through music and education.</p>
    </div>
  </div>
  <div class="col-auto">
    <img src="assets/image/PARC SOG Event-6879 2.png" alt="img2" class="img2">
    <div class="sectitle">
    <p class="p1">FEATURE</p>
    <p class="p2">Where Impact comes to Life</p><hr>
    <p>We partner with communities to<br> uplift lives and build brighter futures<br> through music and education.</p>
    </div>
  </div>
  <div class="col-auto">
    <img src="assets/image/PARC SOG Event-6879 3.png" alt="img3" class="img3">
    <div class="sectitle">
    <p class="p1">EXPLORE</p>
    <p class="p2">Changing Lives, One Note at a Time</p><hr>
    <p>We partner with communities to<br> uplift lives and build brighter futures<br> through music and education.</p>
    </div>
  </div>
</div>
</div>

<!-- second section ends here -->

<!-- third section starts here -->
<div class="container main-tsection">
  <div class="row third-section">
    <div class="col col1">
      <h1>Beyond the Arts</h1>
      <p class="tpg">We empower underprivileged children and youth through<br>
      PARCaralan, our flagship program blending the performing arts<br> 
      with education and career development.</p>

          <div class="center-btn">
            <a href="#" class="btn1">Donate now&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;></a>
            <a href="#" class="btn2">Moreways you can help</a>
          </div>
  </div>
    <div class=" col col2">
      <p>.col-6 .col-sm-3</p>
    </div>
  </div>
</div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
