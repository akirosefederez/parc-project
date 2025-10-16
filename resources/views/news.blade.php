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
  <link rel="stylesheet" href="{{ asset('cssfolder/news.css') }}" />
</head>

<body>
  <!-- Include Navbar -->
  @include('layouts.navbar')

  <!-- Latest News Section -->
  <section class="latest-news-section">
    <div class="container text-center">
      <!-- Section Header -->
      <div class="news-header text-center">
        <h2 class="fw-bold">
          Latest <span class="highlight">News</span>
        </h2>
        <p class="subtitle">latest posts</p>
      </div>

      <!-- News Card -->
      <div class="news-card shadow-sm">
        <div class="row align-items-center g-0">
          <!-- Image -->
          <div class="col-md-5 news-image">
            <img src="{{ asset('./assets/image/WTG2.webp') }}" 
                 alt="Globaltronics Award" 
                 class="img-fluid rounded-start">
          </div>

          <!-- Content -->
          <div class="col-md-7 p-4 text-start">
            <h4 class="fw-bold text-highlight mb-3">
              Chairman and CEO of Globaltronics was awarded the KDR Icon of Music and
              Philanthropy during the 9th WISH Music Awards.
            </h4>

            <p class="date mb-2">January 14, 2024</p>

            <p class="text-dark mb-2">
              Mr. William Guido, the Chairman and CEO of Globaltronics, was awarded the
              KDR Icon of Music and Philanthropy during the 9th WISH Music Awards.
            </p>

            <p class="text-dark mb-4">
              The 9th Wish Music Awards happened on January 14, 2024 at the Araneta Coliseum.
            </p>

            <a href="#" class="btn btn-learn">LEARN MORE</a>
          </div>
        </div>
      </div>

      <!-- 3 News Cards Section -->
      <div class="section-container">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('./assets/image/card1.webp') }}">
          </div>
          <div class="card-content">
            <h3>Experience the Spirit of Giving at the Corey Koh – Incurably Romantic Concert</h3>
            <p>Get ready to be swept off your feet as homegrown talent Corey Koh brings his mesmerizing voice to the Singtel Waterfront Theatre on 10 December 2024.</p>
            <span class="event-date">November 13, 2024</span>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="{{ asset('./assets/image/card2.webp') }}">
          </div>
          <div class="card-content">
            <h3>Coreh Koh's latest release on Spotify</h3>
            <p>Corey has graciously pledged all proceeds from this song to The PARC Foundation's PARCaralan Program. Accompanied by the PARCaralan Scholars, Corey breathes life to the song "Wind Beneath My Wings"</p>
            <span class="release-date">January 3, 2023</span>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="{{ asset('./assets/image/card3.webp') }}">
          </div>
          <div class="card-content">
            <h3>The young and talented Mr. Corey Kho, a “Singaporean Tenor”</h3>
            <p>The young and talented Mr. Corey Kho, a “Singaporean Tenor”, brought the holiday cheer early this year, much to the delight of our Scholars.</p>
            <span class="event-date">December 22, 2022</span>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="{{ asset('./assets/image/card4.webp') }}">
          </div>
          <div class="card-content">
            <h3>What do love, hope, and music have in common?</h3>
            <p>Last December 3, 2022, our very own PARCaralan Scholars and "Singaporean Tenor" Corey Koh, along with some of the most amazing talents from Lyric Opera of the Philippines.</p>
            <span class="event-date">December 15, 2022</span>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="{{ asset('./assets/image/card5.webp') }}">
          </div>
          <div class="card-content">
            <h3>Spirit of Giving 2022: A Celebration of Love, Hope, and Music</h3>
            <p>More than just a concert, an opportunity to transform lives through performing arts is close to reaching. Show your support!</p>
            <span class="event-date">December 8, 2022</span>
          </div>
        </div>

        <div class="card">
          <div class="card-image">
            <img src="{{ asset('./assets/image/card6.webp') }}">
          </div>
          <div class="card-content">
            <h3>Spirit of Giving 2021: Smile behind the Mask | 1 Day To Go</h3>
            <p>1 DAY TO GO… and we will soon celebrate love and generosity with Spirit of Giving 2021: Smile Behind The Mask, a charity online concert for the benefit of Philippine General Hospital ...</p>
            <span class="event-date">December 3, 2021</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Include Footer -->
  @include('layouts.footer')

  <!-- JS -->
  <script src="{{ asset('jsfolder/packages.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
