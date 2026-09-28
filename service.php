<?php include "navbar.php" ?>

<style>
    .step-no { width: 60px; height: 60px; font-size: 24px; font-weight: 700; }

    .offer-section { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
    .sub-heading-line { position: relative; display: inline-block; padding-left: 48px; margin-bottom: 12px; font-weight: 600; }
    .sub-heading-line::before { content: ""; position: absolute; left: 0; top: 50%; width: 36px; height: 2px; background: currentColor; }
    .offer-title { margin-bottom: 20px; }
    .ba-slider-container { position: relative; aspect-ratio: 4 / 3; overflow: hidden; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,.15); }
    .ba-img-before, .ba-img-after { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
    .ba-img-after { clip-path: inset(0 0 0 50%); }
    .ba-slider-container::before, .ba-slider-container::after { position: absolute; top: 12px; z-index: 3; padding: 4px 12px; font-size: 13px; font-weight: 600; color: #fff; background: rgba(0,0,0,.55); border-radius: 20px; pointer-events: none; }
    .ba-slider-container::before { content: "Before"; left: 12px; }
    .ba-slider-container::after { content: "After"; right: 12px; }
    .ba-slider-line { position: absolute; top: 0; bottom: 0; left: 50%; width: 3px; background: #fff; transform: translateX(-50%); z-index: 3; pointer-events: none; }
    .ba-slider-button { position: absolute; top: 50%; left: 50%; width: 44px; height: 44px; background: #fff; border-radius: 50%; box-shadow: 0 2px 10px rgba(0,0,0,.35); transform: translate(-50%, -50%); z-index: 4; pointer-events: none; }
    .ba-slider-button::before, .ba-slider-button::after { content: ""; position: absolute; top: 50%; transform: translateY(-50%); border: 6px solid transparent; }
    .ba-slider-button::before { left: 9px; border-left-width: 0; border-right-color: #333; }
    .ba-slider-button::after { right: 9px; border-right-width: 0; border-left-color: #333; }
    .ba-slider-input { position: absolute; inset: 0; width: 100%; height: 100%; margin: 0; opacity: 0; cursor: ew-resize; z-index: 5; touch-action: pan-y; }
    .ba-img-after { transition: clip-path var(--ba-speed, .12s) ease-out; }
    .ba-slider-line, .ba-slider-button { transition: left var(--ba-speed, .12s) ease-out; }
    @media (prefers-reduced-motion: reduce) { .ba-img-after, .ba-slider-line, .ba-slider-button { transition: none; } }
    @media (max-width: 991px) { .offer-section { grid-template-columns: 1fr; gap: 32px; } }

    /* What We Design: expanding service panels */
    .dz-wrap { display: flex; gap: 14px; }
    .dz-panel { position: relative; flex: 1 1 0; min-width: 0; height: 500px; padding: 28px 16px; overflow: hidden; display: flex; flex-direction: column; color: #fff; cursor: pointer; border-radius: 10px; outline-offset: 3px; transition: flex-grow .7s cubic-bezier(.22,.9,.3,1), background-color .5s; }
    .dz-panel.active { flex-grow: 4.5; padding: 28px 30px; cursor: default; }
    .dz-icon, .dz-title, .dz-body { position: relative; z-index: 1; }
    .dz-icon { flex: none; width: 58px; height: 58px; line-height: 58px; margin-bottom: 18px; text-align: center; font-size: 24px; border-radius: 50%; background: rgba(255,255,255,.16); transition: transform .6s; }
    .dz-panel.active .dz-icon { transform: rotate(360deg) scale(1.08); }
    .dz-title { margin: 0 0 14px; font-size: 1.05rem; color: #fff; }
    .dz-ghost { position: absolute; right: -28px; bottom: -34px; font-size: 13rem; opacity: .07; transform: rotate(-14deg); transition: transform .7s, opacity .7s; pointer-events: none; }
    .dz-panel.active .dz-ghost { opacity: .15; transform: rotate(0) scale(1.1); }
    .dz-body { min-width: 340px; max-width: 460px; visibility: hidden; opacity: 0; transform: translateY(14px); transition: opacity .3s ease, transform .3s ease, visibility 0s .3s; }
    .dz-panel.active .dz-body { visibility: visible; opacity: 1; transform: none; transition: opacity .5s ease .35s, transform .5s ease .35s, visibility 0s; }
    .dz-body p, .dz-body li { color: #fff; }
    .dz-body p { margin: 0; }
    .dz-body ul { list-style: none; padding: 0; margin: 16px 0 22px; }
    .dz-body li { margin-bottom: 8px; }
    .dz-body li i { margin-right: 10px; }
    .dz-link { display: inline-block; padding: 10px 22px; border: 2px solid #fff; color: #fff; font-weight: 600; transition: background .3s, color .3s; }
    .dz-link:hover { background: #fff; color: #222; }
    @media (max-width: 1199px) {
        .dz-wrap { flex-direction: column; gap: 10px; }
        .dz-panel, .dz-panel.active { flex: none; height: auto; flex-direction: row; flex-wrap: wrap; align-items: center; padding: 16px 18px; transition: background-color .5s; }
        .dz-icon { width: 46px; height: 46px; line-height: 46px; margin: 0 14px 0 0; font-size: 19px; }
        .dz-title { margin: 0; font-size: 1.1rem; }
        .dz-ghost { font-size: 8rem; }
        .dz-body { flex-basis: 100%; min-width: 0; max-width: none; max-height: 0; overflow: hidden; transform: none; transition: max-height .5s ease, opacity .3s ease, visibility 0s .5s; }
        .dz-panel.active .dz-body { max-height: 480px; transition: max-height .6s ease, opacity .5s ease .1s, visibility 0s; }
        .dz-body p { margin-top: 14px; }
    }
    @media (prefers-reduced-motion: reduce) { .dz-panel, .dz-icon, .dz-ghost, .dz-body { transition: none !important; } }
</style>

<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">Services</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="index.php">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a class="text-primary" href="#">Pages</a></li> -->
                        <li class="breadcrumb-item text-secondary active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Service Intro Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5">Our Creative
                    <span class="text-uppercase text-primary bg-light px-2">Services</span>
                </h1>

                <p>
                    At Shri Bala Ji Interior Design, we turn empty rooms into homes that
                    look beautiful and work well every day. From a single modular kitchen
                    to a complete home makeover, we plan every detail around your
                    lifestyle, your space and your budget.
                </p>

                <p class="mb-5">
                    Our team handles everything in one place: design, materials,
                    carpentry, finishing and handover. Whether you are building a new
                    home or renovating an old one, you get honest advice, quality
                    workmanship and a result you will be proud of.
                </p>

                <div class="d-flex flex-wrap align-items-center bg-light">
                    <div class="btn-square flex-shrink-0 bg-primary" style="width: 100px; height: 100px;">
                        <i class="fa fa-phone fa-2x text-white"></i>
                    </div>

                    <div class="px-3 py-2">
                        <h4><a href="tel:9911634311" class="text-dark">9911634311</a></h4>
                        <span>Call us for a free design consultation</span>
                    </div>

                    <div class="px-3 py-2">
                        <h4><a href="tel:8813904904" class="text-dark">8813904904</a></h4>
                        <span>Call us for quotations and site visits</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="row g-0">

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                            <a href="#modular-kitchen" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="img/service-1.jpg" alt="Modular Kitchen Design">
                                <h3>Modular Kitchen</h3>
                            </a>
                            <p class="mb-0">
                                Smart, stylish kitchens with plenty of storage and
                                finishes that are easy to clean and built to last.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                            <a href="#modular-wardrobe" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="img/service-2.jpg" alt="Modular Wardrobe Design">
                                <h3>Modular Wardrobe</h3>
                            </a>
                            <p class="mb-0">
                                Custom wardrobes made to fit your room, with every
                                shelf, drawer and hanging space planned for you.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-light">
                            <a href="#living-room" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="img/service-3.jpg" alt="Living Room Interior Design">
                                <h3>Living Room</h3>
                            </a>
                            <p class="mb-0">
                                Welcoming living spaces with TV units, false ceilings,
                                lighting and decor that suit your family.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.8s">
                        <div class="service-item h-100 d-flex flex-column justify-content-center bg-primary">
                            <a href="#bedroom" class="service-img position-relative mb-4">
                                <img class="img-fluid w-100" src="img/service-4.jpg" alt="Bedroom Interior Design">
                                <h3>Bedroom</h3>
                            </a>
                            <p class="mb-0">
                                Calm, comfortable bedrooms where the bed, storage and
                                lighting are designed to work together.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service Intro End -->


<!-- All Services Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 650px;">
            <h1 class="mb-3">What We <span class="text-uppercase text-primary bg-white px-2">Design</span></h1>
            <p class="mb-5">Every space in your home gets the same care. Hover over a service (tap on mobile) to see what we design and build for you.</p>
        </div>

        <div class="dz-wrap wow fadeInUp" data-wow-delay="0.2s" id="dzWrap">
        <article class="dz-panel active bg-primary" id="modular-kitchen" tabindex="0">
            <i class="fa fa-utensils dz-ghost"></i>
            <div class="dz-icon"><i class="fa fa-utensils"></i></div>
            <h3 class="dz-title">Modular Kitchen</h3>
            <div class="dz-body">
                <p>A kitchen planned around the way you cook, with storage exactly where you need it.</p>
                <ul><li><i class="fa fa-check"></i>L-shape, U-shape, straight and parallel layouts</li><li><i class="fa fa-check"></i>Soft-close drawers, pull-outs and corner units</li><li><i class="fa fa-check"></i>Moisture-resistant boards and durable finishes</li><li><i class="fa fa-check"></i>Chimney, hob and appliance-ready planning</li></ul>
                <a href="contact.php" class="dz-link">Get a Free Quote</a>
            </div>
        </article>
        <article class="dz-panel bg-dark" id="modular-wardrobe" tabindex="0">
            <i class="fa fa-door-closed dz-ghost"></i>
            <div class="dz-icon"><i class="fa fa-door-closed"></i></div>
            <h3 class="dz-title">Modular Wardrobe</h3>
            <div class="dz-body">
                <p>Wardrobes built to fit your room and your routine, using every inch well.</p>
                <ul><li><i class="fa fa-check"></i>Sliding, hinged and walk-in wardrobe designs</li><li><i class="fa fa-check"></i>Custom shelves, drawers and hanging space</li><li><i class="fa fa-check"></i>Mirror, loft and inside-lighting options</li><li><i class="fa fa-check"></i>Laminate, acrylic and veneer finishes</li></ul>
                <a href="contact.php" class="dz-link">Get a Free Quote</a>
            </div>
        </article>
        <article class="dz-panel bg-dark" id="living-room" tabindex="0">
            <i class="fa fa-couch dz-ghost"></i>
            <div class="dz-icon"><i class="fa fa-couch"></i></div>
            <h3 class="dz-title">Living Room</h3>
            <div class="dz-body">
                <p>A living room that feels welcoming to guests and comfortable for the family.</p>
                <ul><li><i class="fa fa-check"></i>TV units and feature walls</li><li><i class="fa fa-check"></i>False ceiling with cove and spot lighting</li><li><i class="fa fa-check"></i>Wall paneling, wallpaper and paint schemes</li><li><i class="fa fa-check"></i>Furniture layout and decor planning</li></ul>
                <a href="contact.php" class="dz-link">Get a Free Quote</a>
            </div>
        </article>
        <article class="dz-panel bg-dark" id="bedroom" tabindex="0">
            <i class="fa fa-bed dz-ghost"></i>
            <div class="dz-icon"><i class="fa fa-bed"></i></div>
            <h3 class="dz-title">Bedroom</h3>
            <div class="dz-body">
                <p>Restful bedrooms where the bed, storage and lighting are designed as one.</p>
                <ul><li><i class="fa fa-check"></i>Beds with storage and headboard designs</li><li><i class="fa fa-check"></i>Study tables and dressing units</li><li><i class="fa fa-check"></i>Wardrobes matched to the room</li><li><i class="fa fa-check"></i>Master, kids and guest bedroom designs</li></ul>
                <a href="contact.php" class="dz-link">Get a Free Quote</a>
            </div>
        </article>
        <article class="dz-panel bg-dark" id="bathroom" tabindex="0">
            <i class="fa fa-bath dz-ghost"></i>
            <div class="dz-icon"><i class="fa fa-bath"></i></div>
            <h3 class="dz-title">Bathroom</h3>
            <div class="dz-body">
                <p>Clean, bright bathrooms that are easy to maintain and made to last.</p>
                <ul><li><i class="fa fa-check"></i>Layout planning and tile selection</li><li><i class="fa fa-check"></i>Vanity units and storage</li><li><i class="fa fa-check"></i>Waterproofing and drainage planning</li><li><i class="fa fa-check"></i>Fittings, fixtures and lighting</li></ul>
                <a href="contact.php" class="dz-link">Get a Free Quote</a>
            </div>
        </article>
        </div>
    </div>
</div>
<script>
    (function () {
        var wrap = document.getElementById('dzWrap');
        if (!wrap) return;
        var panels = Array.prototype.slice.call(wrap.querySelectorAll('.dz-panel'));
        var timer, auto;
        function activate(p) {
            panels.forEach(function (x) {
                var on = x === p;
                x.classList.toggle('active', on);
                x.classList.toggle('bg-primary', on);
                x.classList.toggle('bg-dark', !on);
            });
        }
        function stop() { clearInterval(auto); }
        panels.forEach(function (p) {
            p.addEventListener('mouseenter', function () {
                stop();
                timer = setTimeout(function () { activate(p); }, 120);
            });
            p.addEventListener('mouseleave', function () { clearTimeout(timer); });
            p.addEventListener('click', function () { stop(); activate(p); });
            p.addEventListener('focus', function () { stop(); activate(p); });
        });
        function fromHash() {
            var t = document.getElementById(location.hash.slice(1));
            if (t && panels.indexOf(t) > -1) { stop(); activate(t); }
        }
        window.addEventListener('hashchange', fromHash);
        fromHash();
        // Gentle auto-play on desktop until the visitor interacts
        if (window.matchMedia('(min-width: 1200px)').matches &&
            !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            var i = 0;
            auto = setInterval(function () {
                i = (i + 1) % panels.length;
                activate(panels[i]);
            }, 4500);
        }
    })();
</script>
<!-- All Services End -->


<!-- Process Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 650px;">
            <h1 class="mb-3">How We <span class="text-uppercase text-primary bg-light px-2">Work</span></h1>
            <p class="mb-5">A simple four-step process, so you always know what happens next.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="step-no btn-square bg-primary text-white mx-auto mb-3">1</div>
                <h5>Free Consultation</h5>
                <p class="mb-0">Tell us about your space, budget and ideas. We visit the site and take measurements.</p>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="step-no btn-square bg-primary text-white mx-auto mb-3">2</div>
                <h5>Design and Planning</h5>
                <p class="mb-0">We prepare layouts and 3D views, and refine them until you are happy.</p>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="step-no btn-square bg-primary text-white mx-auto mb-3">3</div>
                <h5>Materials and Quote</h5>
                <p class="mb-0">You pick the materials and finishes. We share a clear, itemised quotation.</p>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="step-no btn-square bg-primary text-white mx-auto mb-3">4</div>
                <h5>Execution and Handover</h5>
                <p class="mb-0">Our team builds and finishes the work, then hands over a space that is ready to use.</p>
            </div>
        </div>
    </div>
</div>
<!-- Process End -->

<!-- Offer Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <section class="offer-section">
            <!-- Left Content -->
            <div class="offer-content">
                <span class="sub-heading-line text-primary">What We Offer?</span>
                <h2 class="offer-title">Our Company <span class="highlight text-primary">Make You Feel More Confident</span></h2>

                <p class="offer-text">We offer a range of customizable and stylish modular kitchen solutions for our customers. Our designs are both functional and aesthetically pleasing, providing a seamless blend of form and function. With a variety of finishes, colors, and materials to choose from, you're sure to find the perfect fit for your kitchen.</p>

                <p class="offer-text">We understand the importance of a well-designed kitchen, and that's why our team of experts works closely with you to ensure you get exactly what you want. From the initial consultation to the final installation, we'll be with you every step of the way to make sure you're completely satisfied with your new kitchen.</p>
            </div>

            <!-- Right Slider -->
            <div class="offer-slider-wrapper">
                <div class="ba-slider-container">
                    <!-- Old Kitchen Image (Before) -->
                    <img src="img/kitchenB1.png" alt="Before Interior" class="ba-img-before">

                    <!-- New Kitchen Image (After) -->
                    <img src="img/kitchenA1.png" alt="After Interior" class="ba-img-after" id="imgAfter">

                    <!-- Slider Controls -->
                    <div class="ba-slider-line" id="sliderLine"></div>
                    <div class="ba-slider-button" id="sliderBtn"></div>
                    <input type="range" min="0" max="100" step="0.1" value="50" class="ba-slider-input" id="baSlider" aria-label="Before and after slider">
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    (function () {
        var slider = document.getElementById('baSlider');
        var after = document.getElementById('imgAfter');
        var line = document.getElementById('sliderLine');
        var btn = document.getElementById('sliderBtn');
        if (!slider) return;
        function update() {
            var v = slider.value;
            after.style.clipPath = 'inset(0 0 0 ' + v + '%)';
            line.style.left = v + '%';
            btn.style.left = v + '%';
        }
        slider.addEventListener('input', update);

        // Mouse hover: the divider follows the cursor
        var box = slider.parentElement;
        box.addEventListener('pointermove', function (e) {
            if (e.pointerType !== 'mouse') return;
            var r = box.getBoundingClientRect();
            var v = ((e.clientX - r.left) / r.width) * 100;
            box.style.setProperty('--ba-speed', '.12s');
            slider.value = Math.max(0, Math.min(100, v));
            update();
        });
        // Mouse leaves: glide back to the middle
        box.addEventListener('pointerleave', function (e) {
            if (e.pointerType !== 'mouse') return;
            box.style.setProperty('--ba-speed', '.6s');
            slider.value = 50;
            update();
        });
        update();
    })();
</script>
<!-- Offer End -->


<!-- Why Choose Us Start -->
<div class="container-fluid bg-primary py-5">
    <div class="container py-4">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 d-flex wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-pencil-ruler fa-2x text-white me-3"></i>
                <div><h5 class="text-white">Custom Designs</h5><span class="text-white">Made for your space, not copied from a catalogue.</span></div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-gem fa-2x text-white me-3"></i>
                <div><h5 class="text-white">Quality Materials</h5><span class="text-white">Good boards, hardware and finishes that last.</span></div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-file-invoice-dollar fa-2x text-white me-3"></i>
                <div><h5 class="text-white">Clear Pricing</h5><span class="text-white">An itemised quote with no surprises later.</span></div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-users fa-2x text-white me-3"></i>
                <div><h5 class="text-white">Skilled Team</h5><span class="text-white">Designers and carpenters working under one roof.</span></div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us End -->


<!-- Call To Action Start -->
<div class="container-fluid py-5">
    <div class="container py-5 text-center wow fadeIn" data-wow-delay="0.1s">
        <h1 class="mb-3">Ready to Design Your Dream Home?</h1>
        <p class="mb-4">Book a free consultation and let us plan your kitchen, wardrobe, living room, bedroom or bathroom.</p>
        <a href="contact.php" class="btn btn-primary py-3 px-5 me-2">Book Free Consultation</a>
        <a href="tel:9911634311" class="btn btn-outline-primary py-3 px-5">Call 9911634311</a>
    </div>
</div>
<!-- Call To Action End -->


<!-- Testimonial Start -->
<div class="container-xxl pb-5">
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">

                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.2s">

                    <!-- Review 1 -->
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid"
                                         src="https://media.istockphoto.com/id/628330740/photo/portrait-of-a-beautifull-smiling-man.jpg?s=612x612&w=0&k=20&c=t10Nhvv-kzaSEdYpL0-dUvN5_Z9YV58vvDGmwcjZrIk="
                                         alt="Indian male customer review">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <h3>Beautiful Interior Design</h3>
                                    <p>
                                        I am very happy with the interior design
                                        work. The team understood our requirements
                                        perfectly and created a beautiful and
                                        comfortable space for our home.
                                    </p>
                                    <h5 class="mb-0">Rahul Sharma</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid"
                                         src="https://img.magnific.com/free-photo/indian-woman-posing-cute-stylish-outfit-camera-smiling_482257-122351.jpg?semt=ais_hybrid&w=740&q=80"
                                         alt="Indian female customer review">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <h3>Excellent Work & Quality</h3>
                                    <p>
                                        The design was elegant, modern and exactly
                                        what we were looking for. The team was
                                        professional, creative and completed the
                                        work with great attention to detail.
                                    </p>
                                    <h5 class="mb-0">Priya Mehta</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid"
                                         src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ515rwv4gEyjLsdaCDODLIBlUjeGOU9_KKGbvBHSCkY1ILSubksmQR9BTW&s=10"
                                         alt="Indian male customer review">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <h3>Great Design Experience</h3>
                                    <p>
                                        Really impressed with the overall design
                                        and finishing. Everything was planned
                                        according to our budget and requirements.
                                        Highly satisfied with the final result.
                                    </p>
                                    <h5 class="mb-0">Amit Verma</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<?php include "footer.php" ?>
</body>

</html>