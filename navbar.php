<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shri Bala ji Interior</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


<!-- ============================================
     NAVBAR START — Professional Edition
============================================ -->
<header class="pro-header">
    <div class="container-fluid pro-header-bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg pro-navbar">

                <!-- Logo -->
                <a href="index.php" class="navbar-brand pro-logo">
                    <img src="img/SB_1.png" alt="Shri Bala Ji">
                </a>

                <!-- Custom Hamburger -->
                <button class="pro-toggler d-lg-none" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#proNavMenu"
                        aria-controls="proNavMenu"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- Nav Links -->
                <div class="collapse navbar-collapse pro-menu" id="proNavMenu">
                    <ul class="navbar-nav pro-nav ms-auto align-items-lg-center">

                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.php" class="nav-link">About</a>
                        </li>

                        <li class="nav-item">
                            <a href="service.php" class="nav-link">Services</a>
                        </li>

                        <li class="nav-item">
                            <a href="gallery.php" class="nav-link active">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">Contact</a>
                        </li>

                        <!-- CTA Button (professional touch) -->
                        <li class="nav-item pro-cta-item">
                            <a href="contact.php" class="pro-cta-btn">
                                Get a Quote
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </li>

                    </ul>
                </div>

            </nav>
        </div>
    </div>
</header>


<style>
/* ============================================================
   PROFESSIONAL NAVBAR — Agency Level
============================================================ */

.pro-header {
    position: sticky;
    top: 0;
    z-index: 1030;
    width: 100%;
}

.pro-header-bg {
    background: rgba(255, 255, 255, 0.92);
    backdrop-filter: saturate(180%) blur(16px);
    -webkit-backdrop-filter: saturate(180%) blur(16px);
    border-bottom: 1px solid rgba(15, 15, 15, 0.06);
    box-shadow:
        0 1px 2px rgba(0, 0, 0, 0.04),
        0 8px 24px rgba(0, 0, 0, 0.05);
    transition: box-shadow 0.35s ease, background 0.35s ease;
}

.pro-header-bg:hover {
    box-shadow:
        0 1px 2px rgba(0, 0, 0, 0.05),
        0 12px 32px rgba(0, 0, 0, 0.08);
}


/* ============================================================
   NAVBAR CONTAINER
============================================================ */

.pro-navbar {
    height: 84px;
    min-height: 84px;
    padding: 0;
    display: flex;
    align-items: center;
    background: transparent !important;
    border: none !important;
}


/* ============================================================
   LOGO
============================================================ */

.pro-logo {
    padding: 0;
    margin: 0;
    height: 84px;
    display: flex;
    align-items: center;
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
}

.pro-logo img {
    height: 62px;
    width: auto;
    object-fit: contain;
    filter: drop-shadow(0 3px 6px rgba(0, 0, 0, 0.12));
    transition: filter 0.4s ease;
}

.pro-logo:hover {
    transform: scale(1.04);
}

.pro-logo:hover img {
    filter: drop-shadow(0 6px 14px rgba(184, 134, 11, 0.35));
}


/* ============================================================
   NAV LINKS
============================================================ */

.pro-nav {
    gap: 4px;
    list-style: none;
    margin: 0;
    padding: 0;
}

.pro-nav .nav-item {
    position: relative;
}

.pro-nav .nav-link {
    position: relative;
    display: inline-block;

    padding: 10px 18px !important;

    font-family: 'Space Grotesk', sans-serif;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.6px;
    text-transform: uppercase;

    color: #0f0f0f !important;

    transition: color 0.35s cubic-bezier(0.22, 1, 0.36, 1);
    background: transparent;
}

/* Animated underline — origin left (agency style) */
.pro-nav .nav-link::before {
    content: "";
    position: absolute;
    left: 18px;
    bottom: 4px;

    height: 2px;
    width: 0;

    background: linear-gradient(90deg, #b8860b, #e0b84a);

    border-radius: 2px;
    transform-origin: left center;
    transition: width 0.4s cubic-bezier(0.22, 1, 0.36, 1);
}

.pro-nav .nav-link:hover::before,
.pro-nav .nav-link.active::before {
    width: calc(100% - 36px);
}

.pro-nav .nav-link:hover {
    color: #b8860b !important;
}

.pro-nav .nav-link.active {
    color: #b8860b !important;
    font-weight: 600;
}


/* ============================================================
   CTA BUTTON
============================================================ */

.pro-cta-item {
    margin-left: 20px;
}

.pro-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    padding: 11px 22px;

    font-family: 'Space Grotesk', sans-serif;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    text-decoration: none;

    color: #ffffff !important;

    background: linear-gradient(135deg, #1a1a1a 0%, #2e2e2e 100%);

    border: 1px solid #1a1a1a;
    border-radius: 50px;

    overflow: hidden;
    position: relative;

    transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.15);
}

.pro-cta-btn i {
    font-size: 14px;
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
}

.pro-cta-btn:hover {
    color: #0f0f0f !important;
    background: linear-gradient(135deg, #e0b84a 0%, #b8860b 100%);
    border-color: #b8860b;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(184, 134, 11, 0.4);
}

.pro-cta-btn:hover i {
    transform: translateX(4px);
}


/* ============================================================
   CUSTOM HAMBURGER
============================================================ */

.pro-toggler {
    width: 44px;
    height: 44px;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 5px;

    background: transparent;
    border: 1.5px solid rgba(15, 15, 15, 0.15);
    border-radius: 10px;

    padding: 0;
    cursor: pointer;

    transition: all 0.35s cubic-bezier(0.22, 1, 0.36, 1);
}

.pro-toggler span {
    display: block;
    width: 20px;
    height: 2px;
    background: #0f0f0f;
    border-radius: 2px;
    transition: all 0.35s cubic-bezier(0.22, 1, 0.36, 1);
}

.pro-toggler:hover {
    border-color: #b8860b;
    background: rgba(184, 134, 11, 0.06);
}

.pro-toggler:hover span {
    background: #b8860b;
}

/* Open state — X */
.pro-toggler:not(.collapsed) span:nth-child(1) {
    transform: translateY(7px) rotate(45deg);
}
.pro-toggler:not(.collapsed) span:nth-child(2) {
    opacity: 0;
    transform: scaleX(0);
}
.pro-toggler:not(.collapsed) span:nth-child(3) {
    transform: translateY(-7px) rotate(-45deg);
}


/* ============================================================
   MOBILE / TABLET
============================================================ */

@media (max-width: 991.98px) {

    .pro-navbar {
        height: 76px;
        min-height: 76px;
        justify-content: space-between;
    }

    .pro-logo {
        height: 76px;
    }

    .pro-logo img {
        height: 52px;
    }

    /* Mobile panel */
    .pro-menu {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;

        background: #ffffff;

        padding: 0;

        border-top: 1px solid rgba(15, 15, 15, 0.06);
        box-shadow:
            0 12px 28px rgba(0, 0, 0, 0.08),
            0 4px 8px rgba(0, 0, 0, 0.04);

        max-height: 0;
        overflow: hidden;

        transition: max-height 0.5s cubic-bezier(0.22, 1, 0.36, 1),
                    padding 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .pro-menu.show {
        max-height: 600px;
        padding: 16px 0;
    }

    .pro-nav {
        width: 100%;
        padding: 0 20px;
        gap: 0;
    }

    .pro-nav .nav-item {
        width: 100%;
        opacity: 0;
        transform: translateY(-8px);
        animation: proStagger 0.4s ease forwards;
    }

    .pro-menu.show .pro-nav .nav-item:nth-child(1) { animation-delay: 0.05s; }
    .pro-menu.show .pro-nav .nav-item:nth-child(2) { animation-delay: 0.10s; }
    .pro-menu.show .pro-nav .nav-item:nth-child(3) { animation-delay: 0.15s; }
    .pro-menu.show .pro-nav .nav-item:nth-child(4) { animation-delay: 0.20s; }
    .pro-menu.show .pro-nav .nav-item:nth-child(5) { animation-delay: 0.25s; }
    .pro-menu.show .pro-nav .nav-item:nth-child(6) { animation-delay: 0.30s; }

    @keyframes proStagger {
        to { opacity: 1; transform: translateY(0); }
    }

    .pro-nav .nav-link {
        display: block;
        padding: 15px 0 !important;
        font-size: 14px;
        letter-spacing: 1px;

        border-bottom: 1px solid rgba(15, 15, 15, 0.06);
    }

    .pro-nav .nav-link::before {
        left: 0;
        bottom: 8px;
    }

    .pro-nav .nav-link:hover::before,
    .pro-nav .nav-link.active::before {
        width: 32px;
    }

    .pro-nav .nav-link.active {
        padding-left: 12px !important;
    }

    /* CTA on mobile */
    .pro-cta-item {
        margin: 18px 0 0;
        width: 100%;
    }

    .pro-cta-btn {
        width: 100%;
        justify-content: center;
        padding: 14px 22px;
    }
}


/* ============================================================
   SMALL MOBILE
============================================================ */

@media (max-width: 575.98px) {

    .pro-navbar {
        height: 70px;
        min-height: 70px;
    }

    .pro-logo {
        height: 70px;
    }

    .pro-logo img {
        height: 46px;
    }

    .pro-toggler {
        width: 40px;
        height: 40px;
    }
}


/* ============================================================
   REDUCED MOTION
============================================================ */

@media (prefers-reduced-motion: reduce) {
    .pro-header-bg,
    .pro-logo,
    .pro-logo img,
    .pro-nav .nav-link,
    .pro-nav .nav-link::before,
    .pro-cta-btn,
    .pro-cta-btn i,
    .pro-toggler,
    .pro-toggler span,
    .pro-menu,
    .pro-nav .nav-item {
        transition: none !important;
        animation: none !important;
    }
}
</style>
<!-- ============================================
     NAVBAR END
============================================ -->