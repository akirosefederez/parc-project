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
  <link rel="stylesheet" href="{{ asset('cssfolder/donate.css') }}">


</head>
<body>

  <!-- Top Bar -->
  <div class="top-bar">
    <div class="w-100 d-flex align-items-center justify-content-center" id="topbar">
      <div class="contactlink">(02) 8350 6350  |  program.director@foundation.com.ph</div>
    </div>
  </div>

  <!-- Logo  -->
            <img class="logo" src="./assets/logo/logo2.png" alt="" />

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container-fluid">
    <img class="logo1" src="./assets/logo/logo2.png" alt="Logo">

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item active"><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Causes</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Pages</a></li>
          <li class="nav-item"><a href="#" class="nav-link">News</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        </ul>
      </div>

      <!-- Social Icons -->
      <div class="social-icons d-none d-lg-block me-3">
        <i class="bi bi-facebook"></i>
        <i class="bi bi-linkedin"></i>
        <i class="bi bi-youtube"></i>
        <i class="bi bi-instagram"></i>
      </div>
    </div>
  </nav>

  
      <div class="d-none d-md-flex mainbuttons">
        <a href="#" class="btn btn-donate px-3">DONATE</a>
        <a href="#" class="btn btn-adopt px-3">ADOPT A SCHOLAR</a>
      </div>
  <!-- Main Content -->
   <div>
    <h1 class="text-center my-5">Donate Page</h1>
    <p class="text-center">This is where the donation information will be displayed.</p>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
