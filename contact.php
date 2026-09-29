<?php include "navbar.php" ?>
<body class="contact-page">
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

                <style>
                    /* =========================
                       CONSULTATION CARD (Updated for responsive grid)
                       ========================= */
                    .consultation-card {
                        width: 100%;
                        max-width: 100%;
                        margin: 0;
                        background: #fff;
                        border-radius: 16px;
                        padding: 38px 40px;
                        box-shadow: 0 12px 35px rgba(0,0,0,.07);
                        color: #24303d;
                        box-sizing: border-box;
                        border: 1px solid #e6eeee;
                    }

                    .consultation-head {
                        display: flex;
                        align-items: flex-start;
                        justify-content: space-between;
                        gap: 15px;
                        margin-bottom: 25px;
                    }

                    .consultation-title {
                        margin: 0;
                        color: #29343b;
                        font-size: 28px;
                        line-height: 1.16;
                        font-weight: 800;
                    }

                    .consultation-underline {
                        width: 100px;
                        height: 4px;
                        border-radius: 10px;
                        background: #0D6B68;
                        margin-top: 12px;
                    }

                    .hero-form-step {
                        display: none;
                    }

                    .hero-form-step.active {
                        display: block;
                        animation: heroStepIn .28s ease;
                    }

                    @keyframes heroStepIn {
                        from { opacity: 0; transform: translateX(8px); }
                        to   { opacity: 1; transform: translateX(0); }
                    }

                    .hero-field {
                        margin-bottom: 20px;
                    }

                    .hero-field label {
                        display: block;
                        margin: 0 0 7px;
                        font-size: 14px;
                        line-height: 1.2;
                        font-weight: 600;
                        color: #303944;
                    }

                    .hero-input-wrap {
                        position: relative;
                    }

                    .hero-input-wrap > i {
                        position: absolute;
                        left: 17px;
                        top: 50%;
                        transform: translateY(-50%);
                        color: #0D6B68;
                        font-size: 14px;
                        z-index: 2;
                    }

                    .hero-input,
                    .hero-select,
                    .hero-textarea {
                        width: 100%;
                        box-sizing: border-box;
                        border: 1px solid #e1e8e7;
                        background: #F3F8F7;
                        color: #333;
                        border-radius: 7px;
                        outline: none;
                        font-size: 14px;
                        transition: .3s;
                        box-shadow: none;
                    }

                    .hero-input,
                    .hero-select {
                        height: 52px;
                        padding: 0 15px 0 45px;
                    }

                    .hero-select {
                        padding-left: 14px;
                        cursor: pointer;
                    }

                    .hero-textarea {
                        min-height: 125px;
                        resize: vertical;
                        padding: 15px 15px 15px 15px;
                    }

                    .hero-input:focus,
                    .hero-select:focus,
                    .hero-textarea:focus {
                        background:#fff;
                        border-color:#0D6B68;
                        box-shadow:0 0 0 3px rgba(13,107,104,.08);
                    }

                    .hero-btn {
                        width: 100%;
                        min-height: 52px;
                        border: 0;
                        border-radius: 7px;
                        background: #0D6B68;
                        color: #fff;
                        font-size: 14px;
                        font-weight: 700;
                        letter-spacing: .5px;
                        cursor: pointer;
                        transition: .3s;
                    }

                    .hero-btn:hover {
                        background:#094f4d;
                        box-shadow:0 9px 22px rgba(13,107,104,.22);
                        transform:translateY(-2px);
                    }

                    .hero-btn-secondary {
                        background: #eef2f2;
                        color: #334155;
                        box-shadow: none !important;
                    }
                    
                    .hero-btn-secondary:hover {
                        background: #e2e8e8;
                        transform:translateY(-2px);
                    }

                    .hero-btn-row {
                        display: grid;
                        grid-template-columns: 120px 1fr;
                        gap: 15px;
                    }

                    .hero-legal {
                        margin: 20px 4px 0;
                        text-align: center;
                        color: #8b9199;
                        font-size: 11px;
                        line-height: 1.45;
                    }

                    .hero-legal a {
                        color: #0D6B68;
                        text-decoration: none;
                    }

                    .hero-error {
                        display: none;
                        margin: -5px 0 15px;
                        color: #c2410c;
                        font-size: 13px;
                        font-weight: 600;
                    }

                    .hero-success {
                        display: none;
                        margin-top: 15px;
                        padding: 15px;
                        border-radius: 7px;
                        background: #ecfdf3;
                        color: #166534;
                        font-size: 14px;
                        font-weight: 700;
                        text-align: center;
                        border: 1px solid #d1fadf;
                    }

                    /* =========================
                       RESPONSIVE
                       ========================= */
                    @media (max-width: 575.98px) {
                        .consultation-card {
                            padding: 22px 18px 20px;
                            border-radius: 14px;
                        }

                        .consultation-title {
                            font-size: 22px;
                        }

                        .hero-btn-row {
                            grid-template-columns: 1fr;
                        }
                    }
                </style>

                <div class="consultation-card wow fadeInRight" data-wow-delay="0.3s">
                    <div class="consultation-head">
                        <div>
                            <h2 class="consultation-title">Book Free Design Consultation</h2>
                            <div class="consultation-underline"></div>
                        </div>
                    </div>

                    <form id="heroConsultationForm" novalidate>
                        <!-- STEP 1 -->
                        <div class="hero-form-step active" id="heroStep1">
                            <div class="hero-field">
                                <label for="heroName">Full Name</label>
                                <div class="hero-input-wrap">
                                    <i class="far fa-user"></i>
                                    <input id="heroName" name="name" type="text" class="hero-input"
                                           placeholder="Full Name" autocomplete="name" required>
                                </div>
                            </div>

                            <div class="hero-field">
                                <label for="heroPhone">Phone Number</label>
                                <div class="hero-input-wrap">
                                    <i class="fas fa-phone-alt"></i>
                                    <input id="heroPhone" name="phone" type="tel" class="hero-input"
                                           placeholder="Phone Number" inputmode="numeric"
                                           autocomplete="tel" maxlength="10" required>
                                </div>
                            </div>

                            <div class="hero-field">
                                <label for="heroEmail">Email (Optional)</label>
                                <div class="hero-input-wrap">
                                    <i class="far fa-envelope"></i>
                                    <input id="heroEmail" name="email" type="email" class="hero-input"
                                           placeholder="Email Address" autocomplete="email">
                                </div>
                            </div>

                            <div class="hero-field">
                                <label for="heroCity">Select City</label>
                                <select id="heroCity" name="city" class="hero-select" required>
                                    <option value="">Select City</option>
                                    <option value="Gurugram">Gurugram</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Faridabad">Faridabad</option>
                                    <option value="Noida">Noida</option>
                                    <option value="Rohtak">Rohtak</option>
                                    <option value="Other">Other</option>
                                </select>

                                <div class="hero-input-wrap" id="otherCityWrap" style="display: none; margin-top: 10px;">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input id="otherCityInput" name="other_city" type="text" class="hero-input" placeholder="Enter your city name">
                                </div>
                            </div>

                            <div class="hero-error" id="heroStep1Error"></div>

                            <button type="button" class="hero-btn" id="heroNextBtn">
                                Next <i class="fa fa-arrow-right ms-2"></i>
                            </button>
                        </div>

                        <!-- STEP 2 -->
                        <div class="hero-form-step" id="heroStep2">
                            <div class="hero-field">
                                <label for="heroProjectType">Project Type</label>
                                <select id="heroProjectType" name="project_type" class="hero-select" required>
                                    <option value="">Select Project Type</option>
                                    <option>Full Home Interior</option>
                                    <option>Kitchen</option>
                                    <option>Bedroom</option>
                                    <option>Living Room</option>
                                    <option>Renovation</option>
                                    <option>Commercial Interior</option>
                                </select>
                            </div>

                            <div class="hero-field">
                                <label for="heroBudget">Approx. Budget</label>
                                <select id="heroBudget" name="budget" class="hero-select" required>
                                    <option value="">Select Budget</option>
                                    <option>Below ₹5 Lakh</option>
                                    <option>₹5–10 Lakh</option>
                                    <option>₹10–20 Lakh</option>
                                    <option>₹20–30 Lakh</option>
                                    <option>₹30 Lakh+</option>
                                </select>
                            </div>

                            <div class="hero-field">
                                <label for="heroRequirement">Tell us about your requirement</label>
                                <textarea id="heroRequirement" name="requirement" class="hero-textarea"
                                          placeholder="Write a few details about your project..."></textarea>
                            </div>

                            <div class="hero-error" id="heroStep2Error"></div>

                            <div class="hero-btn-row">
                                <button type="button" class="hero-btn hero-btn-secondary" id="heroBackBtn">
                                    <i class="fa fa-arrow-left me-2"></i> Back
                                </button>
                                <button type="submit" class="hero-btn">
                                    Submit Enquiry
                                </button>
                            </div>

                            <div class="hero-success" id="heroSuccess">
                                Thank you! Your enquiry has been captured successfully.
                            </div>
                        </div>

                        <p class="hero-legal">
                            By submitting this form, you agree to the
                            <a href="#" onclick="return false;">privacy policy</a> &
                            <a href="#" onclick="return false;">terms and conditions</a>.
                        </p>
                    </form>
                </div>

                <script>
                    (function () {
                        const form = document.getElementById("heroConsultationForm");
                        if (!form) return;

                        const step1 = document.getElementById("heroStep1");
                        const step2 = document.getElementById("heroStep2");
                        const nextBtn = document.getElementById("heroNextBtn");
                        const backBtn = document.getElementById("heroBackBtn");
                        const error1 = document.getElementById("heroStep1Error");
                        const error2 = document.getElementById("heroStep2Error");
                        const success = document.getElementById("heroSuccess");
                        const citySelect = document.getElementById("heroCity");
                        const otherCityWrap = document.getElementById("otherCityWrap");
                        const otherCityInput = document.getElementById("otherCityInput");

                        citySelect.addEventListener("change", function () {
                            if (this.value === "Other") {
                                otherCityWrap.style.display = "block";
                            } else {
                                otherCityWrap.style.display = "none";
                                otherCityInput.value = "";
                            }
                        });

                        function setStep(step) {
                            const isFirst = step === 1;
                            step1.classList.toggle("active", isFirst);
                            step2.classList.toggle("active", !isFirst);
                        }

                        function showError(element, message) {
                            element.textContent = message;
                            element.style.display = "block";
                        }

                        function clearError(element) {
                            element.textContent = "";
                            element.style.display = "none";
                        }

                        nextBtn.addEventListener("click", function () {
                            clearError(error1);

                            const name = document.getElementById("heroName");
                            const phone = document.getElementById("heroPhone");
                            const city = document.getElementById("heroCity");
                            const email = document.getElementById("heroEmail");

                            if (!name.value.trim()) {
                                showError(error1, "Please enter your full name.");
                                name.focus();
                                return;
                            }

                            if (!/^[6-9]\d{9}$/.test(phone.value.trim())) {
                                showError(error1, "Please enter a valid 10-digit Indian mobile number.");
                                phone.focus();
                                return;
                            }

                            if (email.value.trim() && !email.validity.valid) {
                                showError(error1, "Please enter a valid email address.");
                                email.focus();
                                return;
                            }

                            if (!city.value) {
                                showError(error1, "Please select your city.");
                                city.focus();
                                return;
                            }

                            if (city.value === "Other" && !otherCityInput.value.trim()) {
                                showError(error1, "Please enter your city name.");
                                otherCityInput.focus();
                                return;
                            }

                            setStep(2);
                        });

                        backBtn.addEventListener("click", function () {
                            clearError(error2);
                            clearError(error1);
                            setStep(1);
                        });

                        form.addEventListener("submit", function (event) {
                            event.preventDefault();
                            clearError(error2);

                            const projectType = document.getElementById("heroProjectType");
                            const budget = document.getElementById("heroBudget");

                            if (!projectType.value) {
                                showError(error2, "Please select your project type.");
                                projectType.focus();
                                return;
                            }

                            if (!budget.value) {
                                showError(error2, "Please select your approximate budget.");
                                budget.focus();
                                return;
                            }

                            success.style.display = "block";

                            setTimeout(function () {
                                form.reset();
                                success.style.display = "none";
                                setStep(1);
                            }, 3500);
                        });

                        document.getElementById("heroPhone").addEventListener("input", function () {
                            this.value = this.value.replace(/\D/g, "").slice(0, 10);
                        });
                    })();
                </script>

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

}

</style>


<?php include "footer.php" ?>

</body>
</html>