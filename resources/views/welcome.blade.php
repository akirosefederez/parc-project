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

<!-- Top Bar -->
<div class="top-bar">
  <div class="container d-flex justify-content-between align-items-center">
    <div>(02) 8350 6350 | program.director@foundation.com.ph</div>
    <div class="d-none d-md-flex">
      <a href="#" class="btn btn-donate px-3">DONATE</a>
      <a href="#" class="btn btn-adopt px-3">ADOPT A SCHOLAR</a>
    </div>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="https://imgbb.com/">
      <img class="logo" src="https://i.ibb.co/spzX6bDX/logo2.png" alt="Logo">
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item"><a href="{{ url('/original') }}" class="nav-link active">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Causes</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pages</a></li>
        <li class="nav-item"><a href="#" class="nav-link">News</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
      </ul>
    </div>

    <!-- Social Icons -->
    <div class="social-icons d-none d-lg-block">
      <i class="bi bi-facebook"></i>
      <i class="bi bi-linkedin"></i>
      <i class="bi bi-youtube"></i>
      <i class="bi bi-instagram"></i>
    </div>
  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
