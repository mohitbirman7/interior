<?php include "navbar.php" ?>

<!-- ================= HERO START ================= -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">

            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">
                    Gallery
                </h1>
            </div>

            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item">
                            <a class="text-primary" href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item text-secondary active">
                            Gallery
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
</div>
<!-- ================= HERO END ================= -->


<!-- ================= GALLERY START ================= -->
<div class="sbgal-section py-5">
    <div class="container">

        <!-- Heading -->
        <div class="sbgal-heading text-center sbgal-reveal">
            <span class="sbgal-eyebrow">Gallery</span>
            <h1 class="sbgal-title">Our <strong>Interior</strong> Showcase</h1>
            <p class="sbgal-subtitle">Har corner, har detail — dekhiye humari design <b>Shri Bala ji Interior Design</b> ki zubaani.</p>
        </div>

        <!-- Filters (Commented as per your code) -->
        <!-- <div class="sbgal-filters sbgal-reveal">
            ...
        </div> -->

        <!-- Grid -->
        <div class="sbgal-grid">
            <!-- video carts start's from here-->
             <div class="sbgal-item sbgal-reveal" data-cat="video" data-sbgal-delay="0">
                <video src="img/video/interiorV1.mp4" autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">VIDEO WALKTHROUGH</span>
                    <h5>Modern Living Room</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <div class="sbgal-item sbgal-reveal" data-cat="video" data-sbgal-delay="100">
                <video src="img/video/interiorV2.mp4" autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">VIDEO SHOWCASE</span>
                    <h5>Modern Wooden Elevation</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <div class="sbgal-item sbgal-reveal" data-cat="video" data-sbgal-delay="200">
                <video src="img/video/interiorV3.mp4" autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">VIDEO HIGHLIGHT</span>
                    <h5>Bed Room</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <div class="sbgal-item sbgal-reveal" data-cat="video" data-sbgal-delay="300">
                <video src="img/video/interiorV4.mp4" autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">VIDEO FEATURE</span>
                    <h5>Modern Living Room </h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>
            <!-- video carts end here -->





            <!-- Existing Image Items (1 to 8) -->
            <div class="sbgal-item sbgal-reveal" data-cat="living" data-sbgal-delay="0">
                <img src="img/interior1.jpeg" alt="Modern Living Room">
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">Living Room</span>
                    <h5>Contemporary Lounge</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <div class="sbgal-item sbgal-reveal" data-cat="bedroom" data-sbgal-delay="100">
                <img src="img/interior2.jpeg" alt="Luxury Bedroom">
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">LIVING AREA</span>
                    <h5>Modern Art & Decor</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <div class="sbgal-item sbgal-reveal" data-cat="kitchen" data-sbgal-delay="200">
                <img src="img/interior3.jpeg" alt="Modern Kitchen">
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">TV UNIT</span>
                    <h5>Backlit Media Wall</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <div class="sbgal-item sbgal-reveal" data-cat="office" data-sbgal-delay="300">
                <img src="img/interior6.jpeg" alt="Modern Office Interior">
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">WALL PANELING</span>
                    <h5>Fluted Marble Accent</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <div class="sbgal-item sbgal-reveal" data-cat="living" data-sbgal-delay="0">
                <img src="img/interior7.jpeg" alt="Premium Living Space">
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">HOME EXTERIOR</span>
                    <h5>Modern Wooden Elevation</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <div class="sbgal-item sbgal-reveal" data-cat="bedroom" data-sbgal-delay="100">
                <img src="img/interior8.jpeg" alt="Elegant Bedroom">
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">COMMERCIAL SPACE</span>
                    <h5>Glass Facade Buildingt</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <div class="sbgal-item sbgal-reveal" data-cat="kitchen" data-sbgal-delay="200">
                <img src="img/interior9.jpeg" alt="Elegant Kitchen Design">
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">INTERIOR FINISH</span>
                    <h5>Premium Marble Texture</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <div class="sbgal-item sbgal-reveal" data-cat="office" data-sbgal-delay="300">
                <img src="img/interior10.jpeg" alt="Corporate Interior">
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">FALSE CEILING</span>
                    <h5>Warm Ambient Lighting</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div>

            <!-- New Video Items (1 to 5) -->
            

            <!-- <div class="sbgal-item sbgal-reveal" data-cat="video" data-sbgal-delay="400">
                <video src="img/video/interiorV5.mp4 autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>
                <div class="sbgal-overlay">
                    <span class="sbgal-cat">VIDEO PROJECT</span>
                    <h5>Exterior Elevation Timelapse</h5>
                    <i class="fa fa-expand sbgal-zoom-icon"></i>
                </div>
            </div> -->

        </div>
    </div>
</div>

<!-- Lightbox -->
<div class="sbgal-lightbox" id="sbgalLightbox">
    <span class="sbgal-lightbox-close">&times;</span>
    <img src="" alt="" id="sbgalLightboxImg">
    <div class="sbgal-lightbox-caption" id="sbgalLightboxCaption"></div>
</div>
<!-- ================= GALLERY END ================= -->


<style>
/* ================= GALLERY (namespaced: sbgal-) ================= */

.sbgal-section{ background:#fff; position:relative; overflow:hidden; }

.sbgal-heading{ max-width:700px; margin:0 auto 35px; }
.sbgal-eyebrow{
    display:inline-block;
    text-transform:uppercase;
    letter-spacing:2px;
    font-weight:700;
    font-size:14px;
    color:#1f8a4c;
    background:#eaf7ef;
    padding:5px 14px;
    border-radius:30px;
    margin-bottom:12px;
}
.sbgal-title{ font-size:40px; font-weight:700; color:#20252a; margin-bottom:12px; }
.sbgal-title strong{ color:#1f8a4c; }
.sbgal-subtitle{ color:#5c6570; font-size:16px; }

/* Filters */
.sbgal-filters{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:10px;
    margin-bottom:40px;
}
.sbgal-filter-btn{
    border:2px solid #1f8a4c;
    background:transparent;
    color:#1f8a4c;
    font-weight:600;
    font-size:14px;
    padding:9px 22px;
    border-radius:30px;
    cursor:pointer;
    transition:.3s ease;
}
.sbgal-filter-btn:hover{ background:#eaf7ef; }
.sbgal-filter-btn.active{
    background:#1f8a4c;
    color:#fff;
    box-shadow:0 8px 18px rgba(31,138,76,.30);
}

/* Grid */
.sbgal-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:22px;
}
.sbgal-item{
    position:relative;
    overflow:hidden;
    border-radius:10px;
    height:280px;
    cursor:pointer;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:transform .3s ease, box-shadow .3s ease, opacity .35s ease;
}
.sbgal-item.sbgal-hide{ display:none; }
.sbgal-item:hover{ transform:translateY(-6px); box-shadow:0 16px 35px rgba(0,0,0,.14); }

.sbgal-item img{
    width:100%; height:100%; object-fit:cover; display:block;
    transition:transform .6s ease;
}
.sbgal-item:hover img{ transform:scale(1.1); }

.sbgal-overlay{
    position:absolute; inset:0;
    background:linear-gradient(to top, rgba(31,138,76,.92) 0%, rgba(20,20,20,.15) 60%, rgba(0,0,0,0) 100%);
    display:flex; flex-direction:column; justify-content:flex-end;
    padding:20px;
    opacity:0; transition:opacity .35s ease;
}
.sbgal-item:hover .sbgal-overlay{ opacity:1; }
.sbgal-cat{ color:#d7f5e3; font-size:12px; text-transform:uppercase; letter-spacing:1px; font-weight:600; }
.sbgal-overlay h5{ color:#fff; font-weight:600; font-size:17px; margin:4px 0 0; }
.sbgal-zoom-icon{
    position:absolute; top:16px; right:16px;
    width:34px; height:34px;
    background:rgba(255,255,255,.25);
    border-radius:50%;
    display:flex; align-items:center; justify-content:center;
    color:#fff; font-size:13px;
}

/* Lightbox */
.sbgal-lightbox{
    display:none;
    position:fixed; inset:0; z-index:9999;
    background:rgba(15,20,18,.94);
    align-items:center; justify-content:center;
    flex-direction:column;
    animation: sbgal-fade .25s ease;
}
.sbgal-lightbox.sbgal-open{ display:flex; }
.sbgal-lightbox img{ max-width:88vw; max-height:78vh; border-radius:8px; box-shadow:0 20px 60px rgba(0,0,0,.5); }
.sbgal-lightbox-caption{ color:#fff; margin-top:16px; font-size:15px; letter-spacing:.5px; }
.sbgal-lightbox-close{
    position:absolute; top:24px; right:34px;
    color:#fff; font-size:38px; cursor:pointer; line-height:1;
    transition:.2s ease;
}
.sbgal-lightbox-close:hover{ color:#1f8a4c; transform:rotate(90deg); }

@keyframes sbgal-fade{ from{opacity:0;} to{opacity:1;} }

/* Scroll reveal */
.sbgal-reveal{
    opacity:0;
    transform:translateY(26px);
    transition:opacity .6s ease, transform .6s ease;
}
.sbgal-reveal.sbgal-visible{ opacity:1; transform:translateY(0); }

/* Responsive */
@media (max-width:991px){
    .sbgal-grid{ grid-template-columns:repeat(2,1fr); }
    .sbgal-title{ font-size:32px; }
}
@media (max-width:575px){
    .sbgal-grid{ grid-template-columns:1fr; }
    .sbgal-item{ height:240px; }
    .sbgal-title{ font-size:27px; }
}
</style>

<script>
(function(){
    /* ---- filter ---- */
    var buttons = document.querySelectorAll('.sbgal-filter-btn');
    var items = document.querySelectorAll('.sbgal-item');

    buttons.forEach(function(btn){
        btn.addEventListener('click', function(){
            buttons.forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            var filter = btn.getAttribute('data-filter');

            items.forEach(function(item){
                var match = (filter === 'all' || item.getAttribute('data-cat') === filter);
                item.classList.toggle('sbgal-hide', !match);
                if(match){ item.classList.remove('sbgal-visible'); io.observe(item); }
            });
        });
    });

    /* ---- lightbox ---- */
    var lightbox = document.getElementById('sbgalLightbox');
    var lightboxImg = document.getElementById('sbgalLightboxImg');
    var lightboxCaption = document.getElementById('sbgalLightboxCaption');

    items.forEach(function(item){
        item.addEventListener('click', function(){
            var img = item.querySelector('img');
            var title = item.querySelector('h5') ? item.querySelector('h5').textContent : '';
            lightboxImg.src = img.src;
            lightboxImg.alt = img.alt;
            lightboxCaption.textContent = title;
            lightbox.classList.add('sbgal-open');
        });
    });

    lightbox.querySelector('.sbgal-lightbox-close').addEventListener('click', function(){
        lightbox.classList.remove('sbgal-open');
    });
    lightbox.addEventListener('click', function(e){
        if(e.target === lightbox){ lightbox.classList.remove('sbgal-open'); }
    });
    document.addEventListener('keydown', function(e){
        if(e.key === 'Escape'){ lightbox.classList.remove('sbgal-open'); }
    });

    /* ---- scroll reveal (re-triggers both scroll directions) ---- */
    var reveals = document.querySelectorAll('.sbgal-reveal');
    var io = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
            if(entry.isIntersecting){
                var delay = entry.target.getAttribute('data-sbgal-delay') || 0;
                clearTimeout(entry.target._sbgalTimer);
                entry.target._sbgalTimer = setTimeout(function(){
                    entry.target.classList.add('sbgal-visible');
                }, parseInt(delay, 10));
            } else {
                clearTimeout(entry.target._sbgalTimer);
                entry.target.classList.remove('sbgal-visible');
            }
        });
    }, { threshold: 0.15 });
    reveals.forEach(function(el){ io.observe(el); });
})();
</script>

<?php include "footer.php" ?>