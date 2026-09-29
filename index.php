<?php include "navbar.php" ?>
<!-- Hero Start -->
<style>
    /* =========================
       PREMIUM HERO SECTION
       ========================= */
    .custom-hero {
        --hero-theme: #216a62; /* existing site theme color */
        --hero-orange: #f06a44;
        position: relative;
        min-height: 760px;
        display: flex;
        align-items: center;
        overflow: hidden;
        background: #111;
        isolation: isolate;
    }

    .custom-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(90deg,
                rgba(0, 0, 0, .78) 0%,
                rgba(0, 0, 0, .57) 44%,
                rgba(0, 0, 0, .48) 68%,
                rgba(0, 0, 0, .62) 100%),
            url("img/hero-slider-1.jpg") center center / cover no-repeat;
        z-index: -2;
        transform: scale(1.01);
    }

    .custom-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(0, 0, 0, .08), rgba(0, 0, 0, .28));
        z-index: -1;
        pointer-events: none;
    }

    .custom-hero-inner {
        width: min(1500px, 100%);
        margin: 0 auto;
        padding: 42px 34px;
        box-sizing: border-box;
    }

    .custom-hero-grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 440px;
        align-items: center;
        gap: clamp(45px, 6vw, 100px);
    }

    .custom-hero-copy {
        color: #fff;
        padding: 50px 0 40px;
        max-width: 820px;
    }

    .custom-hero-copy h1 {
        margin: 0 0 24px;
        max-width: 760px;
        font-size: clamp(48px, 5vw, 68px);
        line-height: 1.08;
        letter-spacing: -1.5px;
        font-weight: 800;
        color: #ffffff !important;
        text-shadow:
            0 3px 12px rgba(0, 0, 0, 0.55),
            0 8px 30px rgba(0, 0, 0, 0.35);
        position: relative;
    }

    .custom-hero-copy h1 .text-custom-teal {
        color: #20c997 !important;
    }

    /* Heading ke neeche theme-color accent */
    .custom-hero-copy h1::after {
        content: "";
        display: block;
        width: 85px;
        height: 5px;
        margin-top: 18px;
        background: #216a62;
        border-radius: 10px;
        box-shadow: 0 3px 12px rgba(33, 106, 98, 0.45);
    }

    .custom-hero-copy p {
        max-width: 720px;
        margin: 0 0 16px;
        color: rgba(255, 255, 255, .92);
        font-size: clamp(16px, 1.25vw, 20px);
        line-height: 1.55;
    }

    .hero-trust-line {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 8px 12px;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
    }

    .rating-stars-container {
        position: relative;
        display: inline-block;
        letter-spacing: 2px;
    }

    .stars-white {
        display: inline-block;
        color: #ffffff;
    }

    .stars-yellow {
        position: absolute;
        top: 0;
        left: 0;
        display: inline-block;
        color: #FFC107;
        width: 90%;
        overflow: hidden;
        white-space: nowrap;
    }

    .hero-separator {
        opacity: .55;
    }

    .hero-trust-line .hero-icon {
        color: var(--hero-theme);
        margin-right: 3px;
    }

    
    /* =========================
       RESPONSIVE
       ========================= */
    @media (max-width: 1199.98px) {
        .custom-hero-grid {
            grid-template-columns: minmax(0, 1fr) 390px;
            gap: 45px;
        }
    }

    @media (max-width: 991.98px) {
        .custom-hero {
            min-height: auto;
        }

        .custom-hero::before {
            background:
                linear-gradient(90deg, rgba(0, 0, 0, .72), rgba(0, 0, 0, .62)),
                url("img/hero-slider-1.jpg") center / cover no-repeat;
        }

        .custom-hero-grid {
            grid-template-columns: 1fr;
            max-width: 700px;
            margin: 0 auto;
        }

        .custom-hero-copy {
            padding: 20px 0 0;
            text-align: center;
            max-width: none;
        }

        .custom-hero-copy p {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-trust-line {
            justify-content: center;
        }

        
    }

    @media (max-width: 575.98px) {
        .custom-hero-inner {
            padding: 42px 16px;
        }

        .custom-hero-copy h1 {
            font-size: 42px;
            letter-spacing: -1px;
        }

        .custom-hero-copy p {
            font-size: 15px;
        }
    }
</style><body class="home-page">

<section class="custom-hero" aria-label="Interior design consultation">
    <div class="custom-hero-inner">
        <div class="custom-hero-grid">

            <!-- LEFT: HERO CONTENT -->
            <div class="custom-hero-copy">
                <h1>We Make Your <span class="text-custom-teal">Home</span> Better</h1>

                <p>
                    Complete home interiors designed and delivered with care,
                    craftsmanship and accountability.
                </p>

                <div class="hero-trust-line">
                    <span class="rating-stars-container">
                        <span class="stars-white">★★★★★</span>
                        <span class="stars-yellow">★★★★★</span>
                    </span>
                    <strong>4.8/5 Rating</strong>
                    <span class="hero-separator">|</span>
                    <span><i class="fas fa-shield-alt hero-icon"></i>10 Year Warranty*</span>
                    <span class="hero-separator">|</span>
                    <span><i class="far fa-clock hero-icon"></i>45-Day Delivery**</span>
                </div>
            </div>

            <!-- RIGHT: CONSULTATION FORM (pulled in from form.php) -->
            <div>
                <?php include "form.php"; ?>
   
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->
<!-- img before after slider -->

    <?php include "before_after_img.php" ?>

    <!-- img before after slider end here -->

 <!-- ================= ABOUT START ================= -->
<div class="sbid-about container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Images -->
            <div class="col-lg-6">
                <div class="sbid-about-media row g-3">

                    <!-- decorative green blob (behind images) -->
                    <svg class="sbid-about-shape" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#1f8a4c" d="M45.3,-58.2C57.4,-49.6,64.3,-33.4,67.8,-16.6C71.3,0.2,71.4,17.6,64.3,31.6C57.1,45.6,42.7,56.2,26.7,62.6C10.7,69,-6.9,71.2,-23.3,66.8C-39.7,62.4,-54.9,51.4,-63.6,36.4C-72.3,21.4,-74.5,2.4,-70.5,-14.6C-66.5,-31.6,-56.3,-46.6,-42.5,-55.2C-28.7,-63.8,-14.3,-66,1.7,-68.1C17.8,-70.2,35.6,-72.2,45.3,-58.2Z" transform="translate(100 100)"/>
                    </svg>

                    <!-- decorative dot pattern -->
                    <svg class="sbid-about-dots" width="120" height="120" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
                        <pattern id="sbidDotPattern" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                            <circle cx="2.5" cy="2.5" r="2.5" fill="#1f8a4c"/>
                        </pattern>
                        <rect width="120" height="120" fill="url(#sbidDotPattern)"/>
                    </svg>

                    <div class="col-6 sbid-reveal" data-sbid-delay="100">
                        <div class="sbid-img-wrap sbid-img-tall">
                            <img class="sbid-about-img" src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?auto=format&fit=crop&w=900&q=80" alt="Interior Design Living Space">
                        </div>
                    </div>

                    <div class="col-6 sbid-reveal" data-sbid-delay="300">
                        <div class="sbid-img-wrap sbid-img-short">
                            <img class="sbid-about-img" src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=900&q=80" alt="Modern Interior Detail">
                        </div>
                        <div class="sbid-about-badge">
                            <h4 class="mb-0">Transforming Spaces With Excellence</h4>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-6 sbid-reveal" data-sbid-delay="200">
                <span class="sbid-eyebrow">About</span>
                <h1 class="sbid-heading mb-4">Shree Balaji Interior Design</h1>

                <p class="sbid-text mb-3">At Shree Balaji Interior Design, we believe that every space has a story to tell. We specialize in creating personalized, functional, and aesthetically stunning interiors for residential and commercial spaces. Our team ensures that your vision is brought to life with absolute precision and care.</p>
                <p class="sbid-text mb-4">From conceptualization to final execution, we handle every single detail of your interior journey. We blend modern aesthetics with practical solutions to build environments you will love for years to come.</p>

                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="sbid-feature sbid-reveal" data-sbid-delay="100"><i class="fa fa-check"></i><span>Premium Quality Materials</span></div>
                        <div class="sbid-feature sbid-reveal" data-sbid-delay="200"><i class="fa fa-check"></i><span>Expert Design Team</span></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="sbid-feature sbid-reveal" data-sbid-delay="300"><i class="fa fa-check"></i><span>On-Time Project Delivery</span></div>
                        <div class="sbid-feature sbid-reveal" data-sbid-delay="400"><i class="fa fa-check"></i><span>Transparent Pricing</span></div>
                    </div>
                </div>

                <div class="d-flex align-items-center flex-wrap gap-2">
                    <a class="sbid-btn-primary" href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    <a class="sbid-btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="sbid-btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="sbid-btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a class="sbid-btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ================= ABOUT END ================= -->


<style>
/* ================= ABOUT (namespaced: sbid-) ================= */

.sbid-about{
    position:relative;
    background:#fff;
    overflow:hidden;
}

/* ---- media / images ---- */
.sbid-about-media{ position:relative; }

.sbid-about-shape{
    position:absolute;
    top:-50px;
    left:-50px;
    width:260px;
    height:260px;
    opacity:.14;
    z-index:0;
    animation: sbid-float 7s ease-in-out infinite;
}

.sbid-about-dots{
    position:absolute;
    right:-20px;
    bottom:-30px;
    opacity:.35;
    z-index:0;
    animation: sbid-pulse 4s ease-in-out infinite;
}

.sbid-img-wrap{
    position:relative;
    overflow:hidden;
    border-radius:10px;
    z-index:1;
    box-shadow:0 12px 35px rgba(0,0,0,.10);
}
.sbid-img-tall{ height:560px; }
.sbid-img-short{ height:420px; }

.sbid-about-img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
    transition:transform .6s ease;
}
.sbid-img-wrap:hover .sbid-about-img{ transform:scale(1.08); }

.sbid-about-badge{
    height:25%;
    display:flex;
    align-items:center;
    text-align:center;
    background:#1f8a4c;
    padding:0 22px;
    border-radius:0 0 10px 10px;
    box-shadow:0 8px 20px rgba(31,138,76,.30);
}
.sbid-about-badge h4{
    color:#fff;
    font-size:17px;
    font-weight:600;
    line-height:1.5;
    margin:0;
}

/* ---- content ---- */
.sbid-eyebrow{
    display:inline-block;
    text-transform:uppercase;
    letter-spacing:2px;
    font-weight:700;
    font-size:14px;
    color:#1f8a4c;
    background:#eaf7ef;
    padding:5px 14px;
    border-radius:30px;
    margin-bottom:14px;
}

.sbid-heading{
    font-size:40px;
    font-weight:700;
    line-height:1.2;
    color:#20252a;
    margin-bottom:22px;
}

.sbid-text{
    color:#5c6570;
    font-size:16px;
    line-height:1.8;
}

.sbid-feature{
    display:flex;
    align-items:center;
    gap:10px;
    font-size:15px;
    font-weight:600;
    color:#20252a;
    margin-bottom:14px;
    transition:transform .3s ease;
}
.sbid-feature:hover{ transform:translateX(6px); }
.sbid-feature i{
    width:26px;
    height:26px;
    flex-shrink:0;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#eaf7ef;
    color:#1f8a4c;
    border-radius:50%;
    font-size:12px;
}

/* ---- buttons ---- */
.sbid-btn-primary{
    display:inline-flex;
    align-items:center;
    background:#1f8a4c;
    color:#fff;
    font-weight:600;
    font-size:15px;
    padding:13px 28px;
    border-radius:6px;
    text-decoration:none;
    margin-right:8px;
    box-shadow:0 8px 20px rgba(31,138,76,.30);
    transition:.3s ease;
}
.sbid-btn-primary:hover{
    background:#166b3a;
    color:#fff;
    transform:translateY(-3px);
    box-shadow:0 12px 26px rgba(31,138,76,.40);
}

.sbid-btn-social{
    width:44px;
    height:44px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    border:2px solid #1f8a4c;
    color:#1f8a4c;
    border-radius:6px;
    text-decoration:none;
    transition:.3s ease;
}
.sbid-btn-social:hover{
    background:#1f8a4c;
    color:#fff;
    transform:translateY(-3px);
}

/* ---- scroll reveal ---- */
.sbid-reveal{
    opacity:0;
    transform:translateY(28px);
    transition:opacity .7s ease, transform .7s ease;
}
.sbid-reveal.sbid-visible{
    opacity:1;
    transform:translateY(0);
}

@keyframes sbid-float{
    0%,100%{ transform:translateY(0) rotate(0deg); }
    50%{ transform:translateY(-14px) rotate(8deg); }
}

@keyframes sbid-pulse{
    0%,100%{ opacity:.20; transform:scale(1); }
    50%{ opacity:.45; transform:scale(1.08); }
}

/* subtle idle animation on badge, even without scrolling */
@keyframes sbid-glow{
    0%,100%{ box-shadow:0 8px 20px rgba(31,138,76,.30); }
    50%{ box-shadow:0 8px 30px rgba(31,138,76,.55); }
}
.sbid-about-badge{ animation: sbid-glow 3s ease-in-out infinite; }

/* ---- responsive ---- */
@media (max-width: 991px){
    .sbid-heading{ font-size:32px; }
}
@media (max-width: 575px){
    .sbid-heading{ font-size:27px; }
    .sbid-about-badge h4{ font-size:14px; }
}
</style>

<script>
(function(){
    var els = document.querySelectorAll('.sbid-reveal');
    if(!('IntersectionObserver' in window)){
        els.forEach(function(el){ el.classList.add('sbid-visible'); });
        return;
    }
    var io = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
            if(entry.isIntersecting){
                var delay = entry.target.getAttribute('data-sbid-delay') || 0;
                clearTimeout(entry.target._sbidTimer);
                entry.target._sbidTimer = setTimeout(function(){
                    entry.target.classList.add('sbid-visible');
                }, parseInt(delay, 10));
            } else {
                /* leaving viewport (scrolling up OR down) — reset so it animates again next time it enters */
                clearTimeout(entry.target._sbidTimer);
                entry.target.classList.remove('sbid-visible');
            }
        });
    }, { threshold: 0.15 });
    els.forEach(function(el){ io.observe(el); });
})();
</script>
    <?php include "how_work.php" ?>

<!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5">Why People <span class="text-uppercase text-primary bg-light px-2">Choose Us</span></h1>
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
    <!-- Feature End -->

<!-- ================= PROJECT SHOWCASE START ================= -->
<section class="sb-projects">

    <div class="container">
        <div class="sb-project-heading text-center">
            <span>Our Projects</span>

            <h2>
                Project <strong>Showcase</strong>
            </h2>

            <p>
                Explore our thoughtfully designed interiors, where elegant
                aesthetics, smart functionality and modern comfort come together.
            </p>
        </div>
    </div>

    <div class="container-fluid px-lg-4">
        <div class="row g-4">

            <!-- Project 01 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=900&q=80"
                         alt="Luxury Bedroom Interior Design">

                    <div class="sb-project-info">
                        <div class="sb-number">01</div>
                        <div>
                            <h4>Luxury Bedroom</h4>
                            <p>Elegant Interior Design</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 02 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=900&q=80"
                         alt="Modern Living Room Interior">

                    <div class="sb-project-info">
                        <div class="sb-number">02</div>
                        <div>
                            <h4>Modern Living Room</h4>
                            <p>Contemporary Interiors</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 03 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=900&q=80"
                         alt="Premium Living Room Design">

                    <div class="sb-project-info">
                        <div class="sb-number">03</div>
                        <div>
                            <h4>Premium Living Space</h4>
                            <p>Luxury Home Interior</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 04 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=900&q=80"
                         alt="Luxury Home Interior Design">

                    <div class="sb-project-info">
                        <div class="sb-number">04</div>
                        <div>
                            <h4>Luxury Home</h4>
                            <p>Modern Interior</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 05 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?auto=format&fit=crop&w=900&q=80"
                         alt="Designer Home Interior">

                    <div class="sb-project-info">
                        <div class="sb-number">05</div>
                        <div>
                            <h4>Designer Interiors</h4>
                            <p>Stylish & Comfortable</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 06 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=900&q=80"
                         alt="Elegant Residential Interior">

                    <div class="sb-project-info">
                        <div class="sb-number">06</div>
                        <div>
                            <h4>Elegant Residence</h4>
                            <p>Smart Interior Solutions</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 07 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?auto=format&fit=crop&w=900&q=80"
                         alt="Residential Interior Design">

                    <div class="sb-project-info">
                        <div class="sb-number">07</div>
                        <div>
                            <h4>Residential Interior</h4>
                            <p>Beautiful Living Spaces</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 08 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1615874959474-d609969a20ed?auto=format&fit=crop&w=900&q=80"
                         alt="Modern Home Interior Design">

                    <div class="sb-project-info">
                        <div class="sb-number">08</div>
                        <div>
                            <h4>Modern Home</h4>
                            <p>Minimal & Sophisticated</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 09 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1631679706909-1844bbd07221?auto=format&fit=crop&w=900&q=80"
                         alt="Contemporary Interior Design">

                    <div class="sb-project-info">
                        <div class="sb-number">09</div>
                        <div>
                            <h4>Contemporary Space</h4>
                            <p>Premium Interior Design</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 10 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=900&q=80"
                         alt="Luxury Interior Project">

                    <div class="sb-project-info">
                        <div class="sb-number">10</div>
                        <div>
                            <h4>Luxury Interiors</h4>
                            <p>Timeless Design</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 11 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1560185127-6ed189bf02f4?auto=format&fit=crop&w=900&q=80"
                         alt="Smart Home Interior">

                    <div class="sb-project-info">
                        <div class="sb-number">11</div>
                        <div>
                            <h4>Smart Living</h4>
                            <p>Functional & Beautiful</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 12 -->
            <div class="col-lg-4 col-md-6">
                <div class="sb-project">
                    <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=900&q=80"
                         alt="Signature Interior Design">

                    <div class="sb-project-info">
                        <div class="sb-number">12</div>
                        <div>
                            <h4>Signature Interior</h4>
                            <p>Designed For You</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- ================= PROJECT SHOWCASE END ================= -->


<style>
/* ================= PROJECT SHOWCASE ================= */

.sb-projects {
    padding: 90px 0;
    background: #fff;
    overflow: hidden;
}

/* Heading */
.sb-project-heading {
    max-width: 850px;
    margin: 0 auto 55px;
}

.sb-project-heading > span {
    display: inline-block;
    color: #e64b2f;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 8px;
}

.sb-project-heading h2 {
    margin: 0;
    color: #20252a;
    font-size: 52px;
    font-weight: 700;
    line-height: 1.15;
}

.sb-project-heading h2 strong {
    color: #e64b2f;
}

.sb-project-heading p {
    margin: 18px auto 0;
    color: #555;
    font-size: 17px;
    line-height: 1.7;
}


/* Project Box */
.sb-project {
    position: relative;
    height: 350px;
    overflow: hidden;
    background: #eee;
    border-radius: 7px;
    box-shadow: 0 8px 30px rgba(0,0,0,.08);
}

/* Image */
.sb-project img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    transition: transform .7s ease;
}


/* Gradient */
.sb-project::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(0,0,0,.82) 0%,
        rgba(0,0,0,.25) 45%,
        rgba(0,0,0,0) 75%
    );
    opacity: 0;
    transition: .4s ease;
}


/* Hover Image */
.sb-project:hover img {
    transform: scale(1.08);
}

.sb-project:hover::after {
    opacity: 1;
}


/* Project Info */
.sb-project-info {
    position: absolute;
    z-index: 2;
    left: 25px;
    right: 25px;
    bottom: 22px;

    display: flex;
    align-items: center;
    gap: 15px;

    color: #fff;

    opacity: 0;
    transform: translateY(20px);
    transition: .4s ease;
}

.sb-project:hover .sb-project-info {
    opacity: 1;
    transform: translateY(0);
}


/* Number */
.sb-number {
    width: 46px;
    height: 46px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid rgba(255,255,255,.8);
    border-radius: 50%;

    color: #fff;
    font-size: 13px;
    font-weight: 600;
    flex-shrink: 0;
}


/* Text */
.sb-project-info h4 {
    margin: 0 0 3px;
    color: #fff;
    font-size: 20px;
    font-weight: 600;
}

.sb-project-info p {
    margin: 0;
    color: rgba(255,255,255,.85);
    font-size: 13px;
}


/* ================= TABLET ================= */

@media (max-width: 991px) {

    .sb-projects {
        padding: 70px 0;
    }

    .sb-project-heading h2 {
        font-size: 43px;
    }

    .sb-project {
        height: 310px;
    }

}


/* ================= MOBILE ================= */

@media (max-width: 767px) {

    .sb-projects {
        padding: 55px 10px;
    }

    .sb-project-heading {
        margin-bottom: 35px;
    }

    .sb-project-heading > span {
        font-size: 13px;
        letter-spacing: 1.5px;
    }

    .sb-project-heading h2 {
        font-size: 34px;
    }

    .sb-project-heading p {
        font-size: 15px;
        line-height: 1.6;
    }

    .sb-project {
        height: 280px;
        border-radius: 6px;
    }

    /* Mobile par text always visible */
    .sb-project::after {
        opacity: 1;
    }

    .sb-project-info {
        opacity: 1;
        transform: translateY(0);
        left: 18px;
        right: 18px;
        bottom: 18px;
    }

    .sb-project-info h4 {
        font-size: 17px;
    }

    .sb-project-info p {
        font-size: 12px;
    }

    .sb-number {
        width: 40px;
        height: 40px;
        font-size: 11px;
    }

}


/* ================= SMALL MOBILE ================= */

@media (max-width: 480px) {

    .sb-project-heading h2 {
        font-size: 30px;
    }

    .sb-project {
        height: 250px;
    }

}
</style>

    <!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5">Our Creative
                    <span class="text-uppercase text-primary bg-light px-2">Services</span>
                </h1>

                <p>
                    At SHREE_BALAJI_INTERIOR_DESIGN we offer a comfortable and memorable stay
                    surrounded by the natural beauty of the Aravalli region. From
                    relaxing accommodations to events and celebrations, our services
                    are designed to make every visit special.
                </p>

                <p class="mb-5">
                    Whether you are planning a family getaway, a corporate event,
                    a wedding celebration or a peaceful weekend retreat, our team
                    is committed to providing a comfortable experience with
                    thoughtful hospitality and well-planned facilities.
                </p>

                <div class="d-flex flex-wrap align-items-center bg-light">
                    <div class="btn-square flex-shrink-0 bg-primary" style="width: 100px; height: 100px;">
                        <i class="fa fa-phone fa-2x text-white"></i>
                    </div>

                    <div class="px-3">
                        <h4>9911634311</h4>
                        <span>Call us directly for bookings and enquiries</span>
                    </div>

                    <div class="px-3">
                        <h4>8813904904</h4>
                        <span>Contact us for resort bookings and event enquiries</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="row g-0">

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                            <a href="" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="img/service-1.jpg" alt="Comfortable Resort Stay">
                                <h3>Comfortable Stay</h3>
                            </a>
                            <p class="mb-0">
                                Enjoy a comfortable and relaxing stay with thoughtfully
                                designed spaces and a peaceful resort environment.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                            <a href="" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="img/service-2.jpg" alt="Resort Events and Celebrations">
                                <h3>Events & Celebrations</h3>
                            </a>
                            <p class="mb-0">
                                Plan memorable weddings, parties and special occasions
                                with a beautiful setting and convenient event facilities.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                            <a href="" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="img/service-3.jpg" alt="Family and Weekend Getaway">
                                <h3>Weekend Getaway</h3>
                            </a>
                            <p class="mb-0">
                                Take a break from your busy routine and enjoy a
                                peaceful getaway with family and friends.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.8s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                            <a href="" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="img/service-4.jpg" alt="Corporate Events at Resort">
                                <h3>Corporate Events</h3>
                            </a>
                            <p class="mb-0">
                                Organize corporate meetings, team gatherings and
                                professional events in a comfortable resort setting.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->

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




    

<!--  contact us start-->

<?php include "contact_with_us.php" ?>
<!--  contact us end here-->



    <?php include "footer.php" ?>
</body>

</html>