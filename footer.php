<?php include "popup-form.php" ?>

    <!-- Newsletter Start -->
    <!-- <div class="container-fluid bg-primary newsletter p-0">
        <div class="container p-0">
            <div class="row g-0 align-items-center">
                <div class="col-md-5 ps-lg-0 text-start wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-fluid w-100" src="img/newsletter.jpg" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-5">
                        <h1 class="mb-5">Subscribe the <span class="text-uppercase text-primary bg-white px-2">Newsletter</span></h1>
                        <div class="position-relative w-100 mb-2">
                            <input class="form-control border-0 w-100 ps-4 pe-5" type="text"
                                placeholder="Enter Your Email" style="height: 60px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-2 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                        <p class="mb-0">Diam sed sed dolor stet amet eirmod</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.php" class="d-inline-block mb-3">
                        <img src="img/img-logo.png" alt="" class="site-logo">
                    </a>
                    <style>
                        .site-logo {
    width: 200px;
    height: auto;
    /* max-height: 80px;
    object-fit: contain; */
}
                    </style>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                   
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+91 8813904904</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+91 9911634311</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="#">Privacy Policy</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                    <a class="btn btn-link" href="#">Career</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="service.php">Modular Kitchen</a>
                    <a class="btn btn-link" href="service.php">Modular Wardrobe</a>
                    <a class="btn btn-link" href="service.php">Living Room</a>
                    <a class="btn btn-link" href="service.php">Bedroom</a>
                    <a class="btn btn-link" href="service.php">Bathroom</a>
                    <a class="btn btn-link" href="service.php">TV Unit</a>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="index.php">Shri Bala ji Interior Design</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.php">Home</a>
                            <a href="about.us">About Us</a>
                            <a href="contact.php">Contact Us</a>
                            <a href="gallery.php">Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Glass Floating Buttons -->
<section class="floating-contact">
  <a href="tel:+919911634311" class="fbtn phone">
    <i class="bi bi-telephone-fill"></i>
  </a>

  <a href="https://wa.me/918813904904" target="_blank" class="fbtn whatsapp">
    <i class="bi bi-whatsapp"></i>
  </a>
</section>

<style>
.floating-contact{
  position:fixed;right:18px;bottom:140px;z-index:9999;
  display:flex;flex-direction:column;gap:12px
}
.fbtn{
  width:50px;height:50px;border-radius:50%;
  display:grid;place-items:center;color:#fff;
  text-decoration:none;font-size:20px;
  background:rgba(255,255,255,.16);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  border:1px solid rgba(255,255,255,.35);
  box-shadow:0 8px 25px rgba(0,0,0,.18);
  transition:.3s
}
.fbtn:hover{transform:scale(1.12) translateY(-3px);color:#fff}
.phone{background:rgba(30,30,30,.55)}
.whatsapp{background:rgba(37,211,102,.65)}
.whatsapp{animation:pulse 2s infinite}

@keyframes pulse{
  50%{box-shadow:0 0 0 8px rgba(37,211,102,.08),0 8px 25px rgba(0,0,0,.2)}
}
@media(max-width:576px){
  .floating-contact{right:12px;bottom:140px;gap:9px}
  .fbtn{width:45px;height:45px;font-size:18px}
}
</style>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



