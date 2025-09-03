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
  <!-- Include Navbar -->
  @include('layouts.navbar')

  <!-- Donate Main Content -->


<div class="container donatesection">
  <div class="row row-cols-2">

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
    </div>

    <div class="col col2">
           <div class="donateform">

            <div class="center-btn"> 
               <button class="btn1">Give Once</button>
               <button class="btn2">Give Monthly</button>
            </div>

            <div class="note">
              <p class="p1">Thank you for making a difference.</p>
              <p class="p2">Monthly giving is a simple, impactful way to support PARCaralan Scholars</p>
            </div>  
            
            <div class="btn-monthly">
            <div class="center-btn"> 
               <button class="btnm1">$10/mo</button>
               <button class="btnm2">$15/m0</button>
               <button class="btnm3">$20/mo</button>
            </div>            
            <div class="center-btn"> 
               <button class="btnm4">$25/mo</button>
               <button class="btnm5">$50/m0</button>
               <button class="btnm6">$Other/mo</button>
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
