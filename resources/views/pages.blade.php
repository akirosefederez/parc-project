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
          Our <span class="highlight">Events</span>
        </h2>
        <p class="subtitle">Check it out!</p>
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
        <img src="{{ asset('assets/image/page67.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2022">
        <img src="{{ asset('assets/image/page66.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2022">
        <img src="{{ asset('assets/image/page65.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2021">
        <img src="{{ asset('assets/image/page64.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2020">
        <img src="{{ asset('assets/image/page63.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2020">
        <img src="{{ asset('assets/image/page62.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2020">
        <img src="{{ asset('assets/image/page61.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2020">
        <img src="{{ asset('assets/image/page60.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2020">
        <img src="{{ asset('assets/image/page59.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page58.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page57.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page56.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page55.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page54.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page53.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page52.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page51.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page50.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page49.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page48.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page47.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page46.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page45.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page44.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page43.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page42.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2019">
        <img src="{{ asset('assets/image/page41.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page40.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page39.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page38.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page37.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page36.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page35.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page34.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page33.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page32.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page31.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page30.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page29.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2018">
        <img src="{{ asset('assets/image/page28.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page27.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page26.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page25.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page24.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page23.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page22.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page21.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page20.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page19.webp') }}" class="img-fluid">
      </div>
 
      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page18.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page17.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page16.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2017">
        <img src="{{ asset('assets/image/page15.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page14.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page13.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page12.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page11.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page10.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page9.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page8.webp') }}" class="img-fluid">
      </div>     

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page7.webp') }}" class="img-fluid">
      </div>

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page6.webp') }}" class="img-fluid">
      </div>  

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page5.webp') }}" class="img-fluid">
      </div>  

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page4.webp') }}" class="img-fluid">
      </div>  

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page3.webp') }}" class="img-fluid">
      </div>  

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page2.webp') }}" class="img-fluid">
      </div>  

      <div class="col-md-3 col-sm-6 event-card" data-year="2016">
        <img src="{{ asset('assets/image/page1.webp') }}" class="img-fluid">
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
          card.style.display =
            year === 'all' || card.dataset.year === year ? 'block' : 'none';
        });
      });
    });

    // Image Preview Modal Script
    document.addEventListener('DOMContentLoaded', () => {
      const modal = document.createElement('div');
      modal.id = 'imageModal';
      modal.innerHTML = `
        <div class="modal-overlay"></div>
        <img class="modal-content" id="previewImage">
        <span class="close">&times;</span>
      `;
      document.body.appendChild(modal);

      const previewImage = document.getElementById('previewImage');
      const closeBtn = modal.querySelector('.close');
      const overlay = modal.querySelector('.modal-overlay');

      // Show modal when image clicked
      document.querySelectorAll('.event-card img').forEach(img => {
        img.addEventListener('click', () => {
          previewImage.src = img.src;
          modal.style.display = 'flex';
        });
      });

      // Close modal on click
      [closeBtn, overlay].forEach(el => {
        el.addEventListener('click', () => (modal.style.display = 'none'));
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
