<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <title>Clickr</title>
</head>
<body>
  <!-- START HEADER -->
  <header class="header">
    <div class="logo">
      <a href="/">
        <img src="./assets/logo.svg" title="clickr" alt="Clickr | Logo">
      </a>
    </div>

    <button class="btn-menu-mobile">
      <img src="./assets/menu.svg" alt="menu">
    </button>
    <nav class="menu">
      <ul>
        <li><a class="active" href="">Home</a></li>
        <li><a href="">How it works</a></li>
        <li><a href="">Reviews</a></li>
        <li><a href="">Works</a></li>
        <li><a href="">FAQs</a></li>
        <li><a class="get-started" href="">Get started</a></li>
      </ul>
    </nav>
  </header>
  <!-- END HEADER -->

  <!-- START HERO -->
  <section class="hero">
    <h1>San Francisco Based <br> Product Photography Services</h1>
    <p>Get high-quality aesthetic photographs of your valuable products within few days </p>
    <a href=""><img src="./assets/camera.svg" alt=""> Book a photoshoot</a>
    <div class="hero-images">
      <img src="./assets/hero-img-1.png" alt="">
      <img src="./assets/hero-img-2.png" alt="">
      <img src="./assets/hero-img-3.png" alt="">
      <img src="./assets/hero-img-4.png" alt="">
      <img src="./assets/hero-img-5.png" alt="">
    </div>
  </section>
  <!-- END HERO  -->

  <!-- START SPONSORS -->
  <section class="sponsors">
    <p>Commercial product photography agency praised by over 5,000 brands.</p>
    <div class="sponsors-images">
      <img src="./assets/netflix.svg" alt="Netflix">
      <img src="./assets/facebook.svg" alt="Facebook">
      <img src="./assets/freelancer.svg" alt="Freelancer">
      <img src="./assets/mailbluster.svg" alt="MailBluster">
      <img src="./assets/themewagon.svg" alt="ThemeWagon">
    </div>
  </section>
  <!-- END SPONSORS -->

    <!-- START HOW-HAPPENS -->
    <section class="how-happens">
    <p>How it happens</p>
    <h2>You deliver-We Click</h2>
    <ul class="steps">
      <li class="step-one">
        <span>1</span>
        <h3>Inform us about your product</h3>
        <p>Introduce your product, select through the pricing plan and let us know if you have any references in mind</p>
      </li>
      <li class="step-two">
        <span>2</span>
        <h3>Deliver your products</h3>
        <p>Deliver the sujects at our doorstep, we will click perfect shots in no time and make it online ready</p>
      </li>
      <li class="step-three">
        <span>3</span>
        <h3>Reviewing the shots</h3>
        <p>After the photoshoot, you will get to review the shots and let us know if there any modification needed.</p>
      </li>
    </ul>
  </section>
  <!-- END HOW-HAPPENS -->

  <!-- SCRIPTS  -->
  <script src="./js/jquery.min.js"></script>
  <script type="module" src="./js/index.js"></script>
</body>
</html>