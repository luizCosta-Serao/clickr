<?php include ('./config.php'); ?>
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
  <?php
    $mySql = new MySql();
    $sql = $mySql::connect()->prepare("SELECT * FROM `conteudo-site`");
    $sql->execute();
    $conteudo_hero = $sql->fetch();

    $sql = MySql::connect()->prepare("SELECT * FROM `imagens` LIMIT 5");
    $sql->execute();
    $imagensHero = $sql->fetchAll();
  ?>
  <section class="hero">
    <h1><?php echo $conteudo_hero['titulo_hero'] ?></h1>
    <p><?php echo $conteudo_hero['descricao_hero'] ?></p>
    <a href=""><img src="./assets/camera.svg" alt=""> <?php echo $conteudo_hero['botao_hero'] ?></a>
    <div class="hero-images">
      <?php
        foreach ($imagensHero as $key => $value) {
      ?>
        <img src="<?php echo INCLUDE_PATH; ?>uploads/<?php echo $value['name'] ?>" alt="">
      <?php  } ?>
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

  <!-- START OUR-SERVICES -->
  <section class="our-services">
    <h2>Our services</h2>
    <div class="photo-preview">
      <div>
        <img src="./assets/photo-preview.png" alt="">
      </div>
      <div>
        <h3>Photo Preview</h3>
        <p>Invest on your commercial product photography on a visual story created by our creative team. Each click at the most reasonable price going to pay you more.</p>
        <div class="actions">
          <a href="">Explore service <img src="./assets/arrow-right-services.svg" alt=""></a>
          <a href="">Pricing <img src="./assets/arrow-right-services.svg" alt=""></a>
        </div>
      </div>
    </div>

    <div class="product-revision">
      <div>
        <h3>Photo Preview</h3>
        <p>Invest on your commercial product photography on a visual story created by our creative team. Each click at the most reasonable price going to pay you more.</p>
        <div class="actions">
          <a href="">Explore service <img src="./assets/arrow-right-green.svg" alt=""></a>
          <a href="">Pricing <img src="./assets/arrow-right-green.svg" alt=""></a>
        </div>
      </div>
      <div>
        <img src="./assets/product-revision.png" alt="">
      </div>
    </div>
  </section>
  <!-- END OUR-SERVICES -->

  <!-- START FAQ -->
  <section class="faq">
    <h2>FAQ</h2>
    <div>
      <h3 class="faq-title faq-blue">What's the turnabout time?</h3>
      <p>Generally the turnabout time depends on the scheme of pricing you are selecting. The tentative turnaround time for orders less than 100 images is up to 12 business days from the time we receive your products and payment. Reach our support to get better insight.</p>
    </div>

    <div>
      <h3 class="faq-title faq-orange">Can I provide references?</h3>
      <p>Absolutely! If clients provide any sort of refernces, that is highly appreciated by our creative team.</p>
    </div>

    <div>
      <h3 class="faq-title faq-green">What are the delivery options?</h3>
      <p>Deliver your products by using the labeling with the help of any courier service or just drop it at our door step at the Biancca Studio, San Francisco.</p>
    </div>

    <div>
      <h3 class="faq-title faq-blue">Can I be present during the shoot?</h3>
      <p>Sorry, we currently do not support that under any pricing scheme. Usually any other person than the creative team is not allowed to attend the phototshoot. Otherwise, it has effects on others and time & effort get wasted as we conduct the process on a fixed plan. We hope that people would understand and respect our creative process. </p>
    </div>

    <div>
      <h3 class="faq-title faq-orange">Will my products be returned?</h3>
      <p>That’s totally up to you. If you want the product back, then you have to include that option in registration time. Else, it will be stored in our storage and you can pick that whenever you wish.</p>
    </div>

    <div>
      <h3 class="faq-title faq-green">Do you support revisions?</h3>
      <p>Yes, based on the pricing plan, you will have several revision options. If you want to bring more than 90% change, then you will have to pay further.</p>
    </div>
  </section>
  <!-- END FAQ -->

  <!-- START GET-STARTED -->
  <section class="get-started">
    <img src="./assets/bg-get-started.svg" alt="">
    <h2>Get your commercial product images today that matter</h2>
    <a href="">Get Started Now</a>
  </section>
  <!-- END GET-STARTED -->

  <!-- START FOOTER -->
  <footer class="footer">
    <ul class="footer-links">
      <li>
        <h3>Why Us</h3>
        <a href="">Channel</a>
        <a href="">Engagement</a>
        <a href="">Scale</a>
        <a href="">Watch Demo</a>
      </li>

      <li>
        <h3>Product</h3>
        <a href="">Features</a>
        <a href="">Integrations</a>
        <a href="">Enterprise</a>
        <a href="">Solutions</a>
      </li>

      <li>
        <h3>Resources</h3>
        <a href="">Partners</a>
        <a href="">Developers</a>
        <a href="">Apps</a>
        <a href="">Blogs</a>
      </li>

      <li>
        <h3>Company</h3>
        <a href="">About Us</a>
        <a href="">Leadership</a>
        <a href="">Investor Relations</a>
        <a href="">News</a>
      </li>

      <li>
        <h3>Pricing</h3>
        <a href="">Plans</a>
        <a href="">Paid vs. Free</a>
      </li>
    </ul>

    <div class="contact">
      <h3>Contact</h3>
      <p><img src="./assets/phone.svg" alt="phone"> +214556905345</p>
      <p><img src="./assets/envelope.svg" alt="email"> something@email.com</p>
      <p><img src="./assets/map.svg" alt="phone"> +567, Kansas,  San Francisco, USA</p>
    </div>

    <div class="social-links">
      <a href=""><img src="./assets/facebook-footer.svg" alt="Facebook"></a>
      <a href=""><img src="./assets/twitter-footer.svg" alt="Twitter"></a>
      <a href=""><img src="./assets/instagram-footer.svg" alt="Instagram"></a>
    </div>

    <div class="copyright">
      <p>All rights Reserved <b>© Your Company, 2021</b></p>
      <p>Made with <span>♥</span> by <b>Themewagon</b></p>
    </div>
  </footer>
  <!-- END FOOTER -->

  <!-- SCRIPTS  -->
  <script src="./js/jquery.min.js"></script>
  <script type="module" src="./js/index.js"></script>
</body>
</html>