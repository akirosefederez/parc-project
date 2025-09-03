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
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
          
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
