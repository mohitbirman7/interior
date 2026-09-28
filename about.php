<?php include "navbar.php" ?>

    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">About</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a class="text-primary" href="#">Pages</a></li> -->
                            <li class="breadcrumb-item text-secondary active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


      <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid h-75" src="img/about-2.jpg" alt="">
                            <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                                <h4 class="text-white lh-base mb-0">Transforming Spaces With Excellence</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">About</span> Shree Balaji Interior Design</h1>
                    <p class="mb-4">At Shree Balaji Interior Design, we believe that every space has a story to tell. We specialize in creating personalized, functional, and aesthetically stunning interiors for residential and commercial spaces. Our team ensures that your vision is brought to life with absolute precision and care.</p>
                    <p class="mb-5">From conceptualization to final execution, we handle every single detail of your interior journey. We blend modern aesthetics with practical solutions to build environments you will love for years to come.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Premium Quality Materials</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Expert Design Team</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>On-Time Project Delivery</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Transparent Pricing</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-primary px-4 me-2" href="">Read More</a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
     
<!--what we offer start here  -->
                                    <section class="offer-section">
  <!-- Left Content -->
  <div class="offer-content">
    <span class="sub-heading-line">What We Offer?</span>
    <h2 class="offer-title">Our Company <span class="highlight">Make You Feel More Confident</span></h2>
    
    <p class="offer-text">We offer a range of customizable and stylish modular kitchen solutions for our customers. Our designs are both functional and aesthetically pleasing, providing a seamless blend of form and function. With a variety of finishes, colors, and materials to choose from, you're sure to find the perfect fit for your kitchen.</p>
    
    <p class="offer-text">We understand the importance of a well-designed kitchen, and that's why our team of experts works closely with you to ensure you get exactly what you want. From the initial consultation to the final installation, we'll be with you every step of the way to make sure you're completely satisfied with your new kitchen.</p>
  </div>

  <!-- Right Slider -->
  <div class="offer-slider-wrapper">
    <div class="ba-slider-container" id="sliderContainer">
      <!-- Old Kitchen Image (Before) -->
      <img src="img/kitchenB1.png" alt="Before Interior" class="ba-img-before">
      
      <!-- New Kitchen Image (After) -->
      <img src="img/kitchenA1.png" alt="After Interior" class="ba-img-after" id="imgAfter">
      
      <!-- Slider Controls -->
      <div class="ba-slider-line" id="sliderLine"></div>
      <div class="ba-slider-button" id="sliderBtn"></div>
      <input type="range" min="0" max="100" value="50" class="ba-slider-input" id="baSlider" style="pointer-events: none;">
    </div>
  </div>
</section>

<script>
  const sliderContainer = document.getElementById('sliderContainer');
  const slider = document.getElementById('baSlider');
  const imgAfter = document.getElementById('imgAfter');
  const sliderLine = document.getElementById('sliderLine');
  const sliderBtn = document.getElementById('sliderBtn');

  function updateSlider(e) {
    const rect = sliderContainer.getBoundingClientRect();
    const x = e.clientX || e.touches[0].clientX; // माउस और टच दोनों के लिए
    let positionX = x - rect.left;
    let sliderValue = (positionX / rect.width) * 100;

    // वैल्यू को 0 से 100 के बीच रखना
    if (sliderValue < 0) sliderValue = 0;
    if (sliderValue > 100) sliderValue = 100;

    // Update image crop
    imgAfter.style.clipPath = `polygon(0 0, ${sliderValue}% 0, ${sliderValue}% 100%, 0 100%)`;
    
    // Update line and button position
    sliderLine.style.left = `${sliderValue}%`;
    sliderBtn.style.left = `${sliderValue}%`;
    slider.value = sliderValue;
  }

  // माउस होवर (Desktop) के लिए
  sliderContainer.addEventListener('mousemove', updateSlider);

  // टच स्क्रीन (Mobile) के लिए
  sliderContainer.addEventListener('touchmove', updateSlider);
</script>


<!-- what we offer end here -->
    



    <!-- Team Start -->
    <!-- <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <h1 class="mb-5">Our Professional <span class="text-uppercase text-primary bg-light px-2">Designers</span>
            </h1>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Boris Johnson</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Donald Pakura</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Bradley Gordon</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Alexander Bell</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


<style>
  .kitchen-section {
    display: flex;
    flex-wrap: wrap;
    background-color: #FAFAFA;
    font-family: Arial, sans-serif;
    overflow: hidden;
  }
  
  .kitchen-image {
    flex: 1 1 50%;
    min-width: 300px;
  }
  
  .kitchen-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  
  .kitchen-content {
    flex: 1 1 50%;
    min-width: 300px;
    padding: 50px 40px;
    box-sizing: border-box;
  }
  
  .main-heading {
    color: #0D6B68;
    font-size: 32px;
    font-weight: 800;
    margin-top: 0;
    margin-bottom: 15px;
  }
  
  .sub-heading {
    font-size: 16px;
    color: #555;
    margin-bottom: 40px;
    line-height: 1.5;
  }
  
  .feature-box {
    display: flex;
    align-items: flex-start;
    margin-bottom: 35px;
  }
  
  .icon-container {
    background-color: #E6F0EF;
    min-width: 60px;
    width: 60px;
    height: 60px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 20px;
    flex-shrink: 0;
  }
  
  .icon-container svg {
    width: 30px;
    height: 30px;
    fill: #0D6B68;
  }
  
  .text-container h3 {
    color: #0D6B68;
    font-size: 20px;
    font-weight: bold;
    margin: 0 0 10px 0;
  }
  
  .text-container p {
    font-size: 16px;
    color: #444;
    line-height: 1.6;
    margin: 0;
  }
  
  /* Chote page (Mobile) ke liye adjustments */
  @media (max-width: 768px) {
    .kitchen-image, .kitchen-content {
      flex: 1 1 100%;
    }
    .kitchen-content {
      padding: 30px 20px;
    }
    .main-heading {
      font-size: 28px;
    }
  }
</style>


<div class="kitchen-section">
  <!-- Left Side Image -->
  <div class="kitchen-image">
    <!-- Apni kitchen image ka link 'src' me dale -->
    <img src="img/aboutKitchen.webp" alt="Modular Kitchen">
  </div>

  <!-- Right Side Content -->
  <div class="kitchen-content">
    <h2 class="main-heading">Why Choose Us?</h2>
    <p class="sub-heading">here are some reasons why someone might choose charms decor Modular Kitchen.</p>

    <!-- Feature 1 -->
    <div class="feature-box">
      <div class="icon-container">
        <!-- Blueprint/Design Icon -->
        <svg viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h14v-8h3L12 3zm0 2.5l7 6.5h-2v7H7v-7H5l7-6.5z"/></svg>
      </div>
      <div class="text-container">
        <h3>Expert Design and Installation Team:</h3>
        <p>Our team of highly skilled and experienced professionals will work with you to design a kitchen that perfectly fits your needs, style and budget. They will also ensure the smooth and efficient installation of the kitchen.</p>
      </div>
    </div>

    <!-- Feature 2 -->
    <div class="feature-box">
      <div class="icon-container">
        <!-- Quality/Material Icon -->
        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
      </div>
      <div class="text-container">
        <h3>High-Quality Materials and Products:</h3>
        <p>We use only the best quality materials and products to ensure the durability and longevity of your kitchen. Our modular kitchens are made from premium materials such as wood, laminate and steel to create a stunning and functional space that will last for years to come.</p>
      </div>
    </div>

    <!-- Feature 3 -->
    <div class="feature-box">
      <div class="icon-container">
        <!-- Satisfaction/Support Icon -->
        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
      </div>
      <div class="text-container">
        <h3>Customer Satisfaction Guaranteed:</h3>
        <p>Customer satisfaction is our top priority, and we strive to ensure that every client is happy with their new kitchen. We offer after-sales support and warranty on all of our products, so you can be confident in your investment.</p>
      </div>
    </div>

  </div>
</div>




   <!-- why choose us start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5"> <span class="text-uppercase text-primary bg-light px-2">What Sets Us Apart</span></h1>
            </div>
            <div class="row g-5 align-items-center text-center">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-calendar-alt fa-5x text-primary mb-4"></i>
                    <h4>25+ Years Experience</h4>
                    <p class="mb-0">With over two decades of expertise, Shree Balaji Interior Design delivers unmatched craftsmanship and reliable home transformation services.</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-tasks fa-5x text-primary mb-4"></i>
                    <h4>Best Interior Design</h4>
                    <p class="mb-0">We create aesthetically pleasing and highly functional spaces tailored to match your unique lifestyle and personal taste.</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-pencil-ruler fa-5x text-primary mb-4"></i>
                    <h4>Innovative Architects</h4>
                    <p class="mb-0">Our expert team utilizes modern design trends and smart space planning to turn your dream home into a beautiful reality.</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-user fa-5x text-primary mb-4"></i>
                    <h4>Customer Satisfaction</h4>
                    <p class="mb-0">Your vision is our priority. We ensure transparent communication, timely project delivery, and complete peace of mind.</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-hand-holding-usd fa-5x text-primary mb-4"></i>
                    <h4>Budget Friendly</h4>
                    <p class="mb-0">Enjoy premium interior solutions at highly competitive prices with absolutely no hidden costs or last-minute surprises.</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-check fa-5x text-primary mb-4"></i>
                    <h4>Sustainable Material</h4>
                    <p class="mb-0">We use only top-grade, eco-friendly, and highly durable materials to ensure your home interiors stand the test of time.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us End -->



    <!-- comfort feel start -->
             <style>
  .offer-section {
    display: flex;
    flex-wrap: wrap;
    background-color: #0D6B68; /* Dark background */
    font-family: Arial, sans-serif;
    color: #ffffff;
    padding: 60px 40px;
    box-sizing: border-box;
    align-items: center;
  }

  .offer-content {
    flex: 1 1 50%;
    min-width: 300px;
    padding-right: 40px;
    box-sizing: border-box;
  }

  .sub-heading-line {
    display: inline-block;
    font-size: 14px;
    color: #E6F0EF; /* Light color */
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
    position: relative;
  }

  .sub-heading-line::before {
    content: "";
    display: inline-block;
    width: 40px;
    height: 2px;
    background-color: #E6F0EF;
    vertical-align: middle;
    margin-right: 10px;
  }

  .offer-title {
    font-size: 36px;
    font-weight: bold;
    margin: 0 0 20px 0;
    line-height: 1.3;
  }

  .offer-title .highlight {
    color: #E6F0EF; /* Light color text highlight */
  }

  .offer-text {
    font-size: 15px;
    line-height: 1.6;
    color: #cccccc;
    margin-bottom: 20px;
  }

  .offer-slider-wrapper {
    flex: 1 1 50%;
    min-width: 300px;
    display: flex;
    justify-content: center;
  }

  /* Before-After Slider CSS */
  .ba-slider-container {
    position: relative;
    width: 100%;
    max-width: 600px;
    aspect-ratio: 4 / 3;
    overflow: hidden;
    border: 5px solid #E6F0EF;
    border-radius: 8px;
  }

  .ba-img-before, .ba-img-after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .ba-img-after {
    clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);
  }

  .ba-slider-input {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: 10;
    cursor: ew-resize;
    margin: 0;
  }

  .ba-slider-line {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 4px;
    background: #E6F0EF;
    transform: translateX(-50%);
    z-index: 4;
    pointer-events: none;
  }

  .ba-slider-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40px;
    height: 40px;
    background: #0D6B68;
    border: 2px solid #E6F0EF;
    border-radius: 50%;
    z-index: 5;
    pointer-events: none;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .ba-slider-button::before, .ba-slider-button::after {
    content: '';
    border: solid #E6F0EF;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
  }

  .ba-slider-button::before {
    transform: rotate(135deg);
    margin-right: 4px;
  }

  .ba-slider-button::after {
    transform: rotate(-45deg);
    margin-left: 4px;
  }

  /* Mobile Responsive */
  @media (max-width: 768px) {
    .offer-section {
      padding: 40px 20px;
    }
    .offer-content {
      padding-right: 0;
      margin-bottom: 40px;
    }
    .offer-title {
      font-size: 28px;
    }
  }
</style>
</head>
<body>






    <!-- comfort feel end -->




       <?php include "footer.php" ?>
</body>

</html>