<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/head.php';?>
  
  <style>
    .hero {
      width: 100%;
      min-height: 100vh;
      position: relative;
      padding: 0;
    }

    .hero .carousel {
      width: 100%;
      min-height: 100vh;
      position: relative;
    }

    .hero .carousel-item {
      width: 100%;
      min-height: 100vh;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
    }

    .hero .carousel-item img {
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }

    .hero .carousel-item::before {
      content: "";
      background-color: rgba(0, 0, 0, 0.45);
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
    }

    .hero .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      text-align: center;
      z-index: 2;
      background-color: rgba(0, 0, 0, 0.45);
      padding: 30px;
      border-radius: 10px;
      width: 80%;
      max-width: 1000px;
    }

    .hero h2 {
      margin: 0 0 10px 0;
      font-size: 48px;
      font-weight: 700;
      line-height: 56px;
      text-transform: uppercase;
      color: #fff;
    }

    .hero p {
      color: #fff;
      margin-bottom: 30px;
      font-size: 18px;
    }

    #about {
      background-color: #A31D1D;
      padding: 100px 0;
      position: relative;
      overflow: hidden;
      color: #fff;
      min-height: 100vh;
      display: flex;
      align-items: center;
    }

    .about-image {
      width: 100%;
      height: 600px;
      object-fit: cover;
      border-radius: 15px;
      box-shadow: 0 4px 25px rgba(0,0,0,0.2);
    }

    @media (max-width: 991px) {
      .about-image {
        height: 400px;
        margin-top: 30px;
      }
    }
  </style>
</head>

<body class="index-page">

  <?php include 'includes/header.php';?>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero">
      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/PDONOR/assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
            <div class="container">
              <h2>We are professional</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="/PDONOR/assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
            <div class="container">
              <h2>At vero eos et accusamus</h2>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="/PDONOR/assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
            <div class="container">
              <h2>Temporibus autem quibusdam</h2>
              <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2 class="display-4 fw-bold mb-4">Consequatur eius et magnam</h2>
            <div class="our-story">
              <h4 class="text-light-emphasis mb-2">EST 1988</h4>
              <h3 class="display-6 fw-bold mb-4">Our Story</h3>
              <p class="mb-4">
                Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem. Quidem id sed ratione.
              </p>
              <!-- <ul class="list-unstyled mb-4">
                <li class="mb-3">
                  <i class="bi bi-check-circle me-2"></i>
                  <span>Ullamco laboris nisi ut aliquip ex ea commo</span>
                </li>
                <li class="mb-3">
                  <i class="bi bi-check-circle me-2"></i>
                  <span>Duis aute irure dolor in reprehenderit in</span>
                </li>
                <li class="mb-3">
                  <i class="bi bi-check-circle me-2"></i>
                  <span>Ullamco laboris nisi ut aliquip ex ea</span>
                </li>
              </ul> -->
            </div>
          </div>
          <div class="col-lg-5">
            <img src="/PDONOR/assets/img/donor.jpg" alt="Blood Donor" class="about-image">
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'includes/script.php';?>
  <?php include 'includes/footer.php';?>

</body>
</html>