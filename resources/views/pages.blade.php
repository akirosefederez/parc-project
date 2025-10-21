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
  <link rel="stylesheet" href="{{ asset('cssfolder/mainnavbar.css') }}">
  <link rel="stylesheet" href="{{ asset('cssfolder/pages.css') }}" />
</head>

<body>
  <!-- Include Navbar -->
  @include('layouts.navbar')

  <section class="pages-section">
    <div class="container text-center">
      <!-- Section Header -->
      <div class="pages-header text-center">
        <h2 class="fw-bold">
          Latest <span class="highlight">News</span>
        </h2>
        <p class="subtitle">latest posts</p>
      </div>

    <!-- Filter Buttons -->
    <div class="filter-buttons text-center mb-4">
      <label><input type="radio" name="year" value="all" checked> ALL EVENTS</label>
      <label><input type="radio" name="year" value="2022"> 2022</label>
      <label><input type="radio" name="year" value="2021"> 2021</label>
      <label><input type="radio" name="year" value="2020"> 2020</label>
      <label><input type="radio" name="year" value="2019"> 2019</label>
      <label><input type="radio" name="year" value="2018"> 2018</label>
      <label><input type="radio" name="year" value="2017"> 2017</label>
      <label><input type="radio" name="year" value="2016"> 2016</label>
    </div>

    <!-- Events Grid -->
    <div class="row g-4" id="eventGrid">
      <!-- Example Event Cards -->
      <div class="col-md-3 col-sm-6 event-card" data-year="2022">
        <img src="{{ asset('assets/image/page1.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2022">
        <img src="{{ asset('assets/image/page2.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2022">
        <img src="{{ asset('assets/image/page3.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2021">
        <img src="{{ asset('assets/image/page4.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2020">
        <img src="{{ asset('assets/image/page5.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2020">
        <img src="{{ asset('assets/image/page6.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page7.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page8.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page9.webp') }}" class="img-fluid">
      </div>     

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page10.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page11.webp') }}" class="img-fluid">
      </div>  

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page12.webp') }}" class="img-fluid">
      </div>  

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page13.webp') }}" class="img-fluid">
      </div>  

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page14.webp') }}" class="img-fluid">
      </div>  

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page15.webp') }}" class="img-fluid">
      </div>  

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page16.webp') }}" class="img-fluid">
      </div>  

    </div>
    </div>
  </section>

  <script>
    // Year Filter Script
    const buttons = document.querySelectorAll('input[name="year"]');
    const cards = document.querySelectorAll('.event-card');

    buttons.forEach(btn => {
      btn.addEventListener('change', () => {
        const year = btn.value;
        cards.forEach(card => {
          if (year === 'all' || card.dataset.year === year) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  </script>

  <!-- Include Footer -->
  @include('layouts.footer')

  <!-- JS -->
  <script src="{{ asset('jsfolder/packages.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
