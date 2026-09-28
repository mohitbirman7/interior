```php
<?php include "navbar.php" ?>

<!-- ================= HERO START ================= -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">

            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">
                    Contact
                </h1>
            </div>

            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item">
                            <a class="text-primary" href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item text-secondary active">
                            Contact
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
</div>
<!-- ================= HERO END ================= -->


<!-- ================= CONTACT START ================= -->
<section class="container-fluid py-5 contact-section">

    <div class="container py-4">

        <!-- Heading -->
        <div class="text-center mb-5 wow fadeIn" data-wow-delay="0.1s">

            <span class="contact-label">
                GET IN TOUCH
            </span>

            <h1 class="contact-title">
                Let's Create Something
                <span>Beautiful Together</span>
            </h1>

            <p class="contact-subtitle mx-auto">
                Have a question about your interior design project?
                Share your requirements with us and our design team
                will get back to you shortly.
            </p>

        </div>


        <div class="row g-4 align-items-stretch">

            <!-- ================= LEFT CONTACT INFO ================= -->
            <div class="col-lg-5">

                <div class="contact-info-card h-100 wow fadeInLeft"
                     data-wow-delay="0.2s">

                    <div class="contact-info-content">

                        <span class="small-title">
                            WE ARE HERE TO HELP
                        </span>

                        <h2>
                            Tell Us About
                            <span>Your Space</span>
                        </h2>

                        <p>
                            Whether you are planning a new home, renovating
                            your existing space or looking for a complete
                            interior transformation, our team is ready to
                            understand your ideas and requirements.
                        </p>


                        <!-- Contact Item -->
                        <div class="contact-item">

                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>

                            <div>
                                <small>CALL US</small>
                                <h5>+91 8813904904</h5>
                            </div>

                        </div>


                        <!-- Contact Item -->
                        <div class="contact-item">

                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>

                            <div>
                                <small>EMAIL US</small>
                                <h5>info@yourwebsite.com</h5>
                            </div>

                        </div>


                        <!-- Contact Item -->
                        <div class="contact-item">

                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>

                            <div>
                                <small>OUR SERVICE AREA</small>
                                <h5>Gurugram & Delhi NCR</h5>
                            </div>

                        </div>


                        <!-- Social -->
                        <div class="contact-social">

                            <a href="#" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="#" aria-label="WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= CONTACT FORM ================= -->
            <div class="col-lg-7">

                <div class="contact-form-card wow fadeInRight"
                     data-wow-delay="0.3s">

                    <div class="form-heading">

                        <div>
                            <span>CONTACT FORM</span>
                            <h3>Send Us A Message</h3>
                        </div>

                        <div class="form-top-icon">
                            <i class="fa fa-paper-plane"></i>
                        </div>

                    </div>


                    <form method="POST" action="">

                        <div class="row g-3">

                            <!-- Name -->
                            <div class="col-md-6">

                                <div class="input-box">

                                    <i class="fa fa-user"></i>

                                    <input type="text"
                                           name="name"
                                           placeholder="Full Name"
                                           required>

                                </div>

                            </div>


                            <!-- Phone -->
                            <div class="col-md-6">

                                <div class="input-box">

                                    <i class="fa fa-phone"></i>

                                    <input type="tel"
                                           name="phone"
                                           placeholder="Phone Number"
                                           pattern="[0-9]{10}"
                                           maxlength="10"
                                           minlength="10"
                                           oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                                           required>

                                </div>

                            </div>


                            <!-- Email -->
                            <div class="col-md-6">

                                <div class="input-box">

                                    <i class="fa fa-envelope"></i>

                                    <input type="email"
                                           name="email"
                                           placeholder="Email Address"
                                           required>

                                </div>

                            </div>


                            <!-- City -->
                            <div class="col-md-6">

                                <div class="input-box">

                                    <i class="fa fa-location-dot"></i>

                                    <select name="city" required>

                                        <option value="" selected disabled>
                                            Select City
                                        </option>

                                        <option value="Gurugram">
                                            Gurugram
                                        </option>

                                        <option value="Delhi">
                                            Delhi
                                        </option>

                                        <option value="Noida">
                                            Noida
                                        </option>

                                        <option value="Faridabad">
                                            Faridabad
                                        </option>

                                        <option value="Rohtak">
                                            Rohtak
                                        </option>

                                        <option value="Other">
                                            Other
                                        </option>

                                    </select>

                                </div>

                            </div>


                            <!-- Service -->
                            <div class="col-12">

                                
                            </div>


                            <!-- Message -->
                            <div class="col-12">

                                <div class="input-box textarea-box">

                                    <i class="fa fa-message"></i>

                                    <textarea name="message"
                                              placeholder="Tell us about your project, requirements or budget..."
                                              required></textarea>

                                </div>

                            </div>


                            <!-- Submit -->
                            <div class="col-12">

                                <button type="submit"
                                        class="contact-submit">

                                    Send Enquiry

                                    <i class="fa fa-arrow-right"></i>

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ================= CONTACT END ================= -->


<style>

/* ================= CONTACT SECTION ================= */

.contact-section{
    background:#ffffff;
    position:relative;
    overflow:hidden;
}

.contact-section:before{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    background:rgba(13,107,104,.05);
    border-radius:50%;
    top:-150px;
    left:-150px;
}

.contact-section:after{
    content:"";
    position:absolute;
    width:300px;
    height:300px;
    background:rgba(193,153,126,.07);
    border-radius:50%;
    right:-120px;
    bottom:-120px;
}


/* ================= HEADING ================= */

.contact-label{
    display:inline-block;
    color:#0D6B68;
    font-size:13px;
    font-weight:700;
    letter-spacing:2px;
    margin-bottom:8px;
}

.contact-title{
    color:#29343b;
    font-size:40px;
    font-weight:700;
    margin-bottom:12px;
}

.contact-title span{
    color:#0D6B68;
}

.contact-subtitle{
    max-width:650px;
    color:#777;
    font-size:15px;
    line-height:1.7;
}


/* ================= LEFT CARD ================= */

.contact-info-card{
    background:#0D6B68;
    border-radius:14px;
    padding:38px 32px;
    color:#fff;
    position:relative;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(13,107,104,.18);
}

.contact-info-card:after{
    content:"";
    position:absolute;
    width:190px;
    height:190px;
    border:35px solid rgba(255,255,255,.07);
    border-radius:50%;
    right:-90px;
    bottom:-90px;
}

.contact-info-content{
    position:relative;
    z-index:2;
}

.small-title{
    font-size:12px;
    letter-spacing:2px;
    font-weight:600;
    opacity:.85;
}

.contact-info-card h2{
    font-size:31px;
    font-weight:700;
    margin:10px 0 15px;
}

.contact-info-card h2 span{
    color:#d9eee9;
}

.contact-info-card p{
    color:rgba(255,255,255,.82);
    font-size:14px;
    line-height:1.8;
    margin-bottom:28px;
}


/* Contact items */

.contact-item{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:20px;
}

.contact-icon{
    width:43px;
    height:43px;
    min-width:43px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:rgba(255,255,255,.13);
    border:1px solid rgba(255,255,255,.18);
    border-radius:8px;
}

.contact-icon i{
    font-size:16px;
}

.contact-item small{
    display:block;
    font-size:10px;
    letter-spacing:1.3px;
    opacity:.7;
}

.contact-item h5{
    font-size:14px;
    margin:3px 0 0;
    font-weight:600;
}


/* Social */

.contact-social{
    display:flex;
    gap:9px;
    margin-top:25px;
}

.contact-social a{
    width:37px;
    height:37px;
    border-radius:50%;
    background:rgba(255,255,255,.12);
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    transition:.3s;
}

.contact-social a:hover{
    background:#fff;
    color:#0D6B68;
    transform:translateY(-3px);
}


/* ================= FORM CARD ================= */

.contact-form-card{
    background:#fff;
    border:1px solid #e6eeee;
    border-radius:14px;
    padding:32px;
    box-shadow:0 12px 35px rgba(0,0,0,.07);
    position:relative;
}

.form-heading{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:22px;
}

.form-heading span{
    color:#0D6B68;
    font-size:11px;
    font-weight:700;
    letter-spacing:1.5px;
}

.form-heading h3{
    color:#29343b;
    font-size:24px;
    margin:3px 0 0;
    font-weight:700;
}

.form-top-icon{
    width:48px;
    height:48px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    color:#0D6B68;
    background:#E6F0EF;
    font-size:18px;
}


/* Inputs */

.input-box{
    position:relative;
}

.input-box > i{
    position:absolute;
    left:17px;
    top:50%;
    transform:translateY(-50%);
    color:#0D6B68;
    z-index:2;
    font-size:14px;
}

.input-box input,
.input-box select,
.input-box textarea{
    width:100%;
    border:1px solid #e1e8e7;
    background:#F3F8F7;
    border-radius:7px;
    outline:none;
    color:#333;
    font-size:14px;
    transition:.3s;
}

.input-box input,
.input-box select{
    height:52px;
    padding:0 15px 0 45px;
}

.input-box textarea{
    height:125px;
    padding:15px 15px 15px 45px;
    resize:none;
}

.input-box textarea + i{
    top:20px;
    transform:none;
}

.input-box input:focus,
.input-box select:focus,
.input-box textarea:focus{
    background:#fff;
    border-color:#0D6B68;
    box-shadow:0 0 0 3px rgba(13,107,104,.08);
}


/* Button */

.contact-submit{
    width:100%;
    border:0;
    background:#0D6B68;
    color:#fff;
    height:52px;
    border-radius:7px;
    font-size:14px;
    font-weight:700;
    letter-spacing:.5px;
    transition:.3s;
}

.contact-submit i{
    margin-left:9px;
    transition:.3s;
}

.contact-submit:hover{
    background:#094f4d;
    box-shadow:0 9px 22px rgba(13,107,104,.22);
    transform:translateY(-2px);
}

.contact-submit:hover i{
    transform:translateX(4px);
}


/* ================= MOBILE ================= */

@media(max-width:767px){

    .contact-section{
        padding-top:45px!important;
        padding-bottom:45px!important;
    }

    .contact-title{
        font-size:30px;
    }

    .contact-subtitle{
        font-size:14px;
    }

    .contact-info-card{
        padding:28px 22px;
    }

    .contact-info-card h2{
        font-size:26px;
    }

    .contact-form-card{
        padding:22px 18px;
    }

    .form-heading h3{
        font-size:21px;
    }

    .form-top-icon{
        width:42px;
        height:42px;
    }

}

</style>


<?php include "footer.php" ?>

</body>
</html>
```
