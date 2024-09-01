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

  <!-- START TESTIMONIALS -->
  <div class="slide-wrapper">

    <section class="testimonials">
      <div class="testimonial-single">
        <div class="testimonial-content">
          <div class="detail">
            <img src="./assets/aspas-depoimento.svg" alt="">
            <img src="./assets/aspas-depoimento.svg" alt="">
          </div>
          <p>When it comes to both reliability and quality, <span>ClickR</span> is undoubtly one of best services out there. Team was fast and responsible. 5 stars for them!</p>
          <h4>Andrinna Malin</h4>
          <span>Designer, co-Founder at Nirvana Tech</span>
        </div>
        <div class="testimonial-image">
          <img src="./assets/testimonial-1.png" alt="Andrina Malin">
        </div>
      </div>
  
      <div class="testimonial-single">
        <div class="testimonial-content">
          <div class="detail">
            <img src="./assets/aspas-depoimento.svg" alt="">
            <img src="./assets/aspas-depoimento.svg" alt="">
          </div>
          <p>When it comes to both reliability and quality, <span>ClickR</span> is undoubtly one of best services out there. Team was fast and responsible. 5 stars for them!</p>
          <h4>Andrinna Malin</h4>
          <span>Designer, co-Founder at Nirvana Tech</span>
        </div>
        <div class="testimonial-image">
          <img src="./assets/testimonial-1.png" alt="Andrina Malin">
        </div>
      </div>
  
      <div class="testimonial-single">
        <div class="testimonial-content">
          <div class="detail">
            <img src="./assets/aspas-depoimento.svg" alt="">
            <img src="./assets/aspas-depoimento.svg" alt="">
          </div>
          <p>When it comes to both reliability and quality, <span>ClickR</span> is undoubtly one of best services out there. Team was fast and responsible. 5 stars for them!</p>
          <h4>Andrinna Malin</h4>
          <span>Designer, co-Founder at Nirvana Tech</span>
        </div>
        <div class="testimonial-image">
          <img src="./assets/testimonial-1.png" alt="Andrina Malin">
        </div>
      </div>
    </section>
  </div>

  <section class="controller-slide">
    <img id="prev-slide" src="./assets/arrow-left.png" alt="">
    <p>1 of 3</p>
    <img id="next-slide" src="./assets/arrow-right.png" alt="">
  </section>
  <!-- END TESTIMONIALS -->

  <!-- START PACKAGES -->
  <section class="packages">
    <h2>Our Packages</h2>
    <div class="packages-list">
      <div class="basic">
        <span>Basic</span>
        <h3>$9 <span>/ per image</span></h3>
        <ul>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>High quality images</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>Single Revision</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>10 Products per order</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>Not providing softcopy</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>Free return shipment</p>
          </li>
        </ul>
  
        <a href="">Choose plan</a>
      </div>
  
      <div class="avarage">
        <span>Avarage</span>
        <h3>$19 <span>/ per image</span></h3>
        <ul>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>High quality images</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>3 Revisions</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>25 Products per order</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>Provides softcopy</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>Free return shipment</p>
          </li>
        </ul>
  
        <a href="">Choose plan</a>
      </div>
  
      <div class="professional">
        <span>Professional</span>
        <h3>$29 <span>/ per image</span></h3>
        <ul>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>High quality images</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>5 Revisions</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>50 Products per order</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>Provides softcopy & PSD</p>
          </li>
          <li>
            <img src="./assets/check-circle.svg" alt="">
            <p>Free return shipment</p>
          </li>
        </ul>
  
        <a href="">Choose plan</a>
      </div>
    </div>
  </section>
  <!-- END PACKAGES -->

  <!-- START PHOTOS -->
  <section class="photos">
    <h2>Over 1,00,000 Photos Shot</h2>
    <ul class="photos-categories">
      <li><a href="">Food</a></li>
      <li><a class="active" href="">Shoe</a></li>
      <li><a href="">Watches</a></li>
      <li><a href="">Cosmetics</a></li>
      <li><a href="">Phone</a></li>
      <li><a href="">Camera</a></li>
    </ul>

    <ul id="food" class="gallery active">
      <li><img src="./assets/shoe-1.png" alt=""></li>
      <li><img src="./assets/shoe-2.png" alt=""></li>
      <li><img src="./assets/shoe-3.png" alt=""></li>
      <li><img src="./assets/shoe-4.png" alt=""></li>
      <li><img src="./assets/shoe-5.png" alt=""></li>
      <li><img src="./assets/shoe-6.png" alt=""></li>
    </ul>

    <ul id="shoe" class="gallery">
      <li><img src="./assets/shoe-4.png" alt=""></li>
      <li><img src="./assets/shoe-2.png" alt=""></li>
      <li><img src="./assets/shoe-5.png" alt=""></li>
      <li><img src="./assets/shoe-3.png" alt=""></li>
      <li><img src="./assets/shoe-6.png" alt=""></li>
      <li><img src="./assets/shoe-1.png" alt=""></li>
    </ul>

    <ul id="watches" class="gallery">
      <li><img src="./assets/shoe-6.png" alt=""></li>
      <li><img src="./assets/shoe-1.png" alt=""></li>
      <li><img src="./assets/shoe-3.png" alt=""></li>
      <li><img src="./assets/shoe-2.png" alt=""></li>
      <li><img src="./assets/shoe-5.png" alt=""></li>
      <li><img src="./assets/shoe-4.png" alt=""></li>
    </ul>

    <ul id="cosmetics" class="gallery">
      <li><img src="./assets/shoe-6.png" alt=""></li>
      <li><img src="./assets/shoe-1.png" alt=""></li>
      <li><img src="./assets/shoe-3.png" alt=""></li>
      <li><img src="./assets/shoe-4.png" alt=""></li>
      <li><img src="./assets/shoe-5.png" alt=""></li>
      <li><img src="./assets/shoe-2.png" alt=""></li>
    </ul>

    <ul id="phone" class="gallery">
      <li><img src="./assets/shoe-2.png" alt=""></li>
      <li><img src="./assets/shoe-6.png" alt=""></li>
      <li><img src="./assets/shoe-3.png" alt=""></li>
      <li><img src="./assets/shoe-5.png" alt=""></li>
      <li><img src="./assets/shoe-1.png" alt=""></li>
      <li><img src="./assets/shoe-4.png" alt=""></li>
    </ul>

    <ul id="camera" class="gallery">
      <li><img src="./assets/shoe-6.png" alt=""></li>
      <li><img src="./assets/shoe-1.png" alt=""></li>
      <li><img src="./assets/shoe-3.png" alt=""></li>
      <li><img src="./assets/shoe-2.png" alt=""></li>
      <li><img src="./assets/shoe-5.png" alt=""></li>
      <li><img src="./assets/shoe-4.png" alt=""></li>
    </ul>

    <a class="view-portfolio" href="">View portfolio <img src="./assets/arrow-portfolio.svg" alt=""></a>
  </section>
  <!-- END PHOTOS -->

  <!-- SCRIPTS  -->
  <script src="./js/jquery.min.js"></script>
  <script type="module" src="./js/index.js"></script>
</body>
</html>