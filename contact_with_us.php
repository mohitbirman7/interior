<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
/* ===== CONTACT + FAQ SECTION STYLES ===== */
.contact-faq-section {
    padding: 65px 15px;
    background: #fff;
    position: relative;
    overflow: hidden;
}

.contact-faq-section:before {
    content: "";
    position: absolute;
    width: 380px;
    height: 380px;
    right: -180px;
    bottom: -180px;
    background: rgba(13, 107, 104, .07);
    border-radius: 50%;
}

.contact-wrap {
    max-width: 1150px;
    margin: auto;
    position: relative;
    z-index: 1;
}

.contact-heading {
    text-align: center;
    margin-bottom: 35px;
}

.contact-heading span {
    color: #0D6B68;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
}

.contact-heading h2 {
    color: #29343b;
    font-size: 38px;
    font-weight: 700;
    margin: 5px 0 0;
}

.contact-heading h2 b {
    color: #0D6B68;
}

/* ===== FAQ ACCORDION STYLES ===== */
.faq-title {
    color: #29343b;
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 15px;
}

.faq-title i {
    color: #0D6B68;
    margin-right: 8px;
}

.faq-item {
    background: #E6F0EF;
    border-radius: 8px;
    margin-bottom: 9px;
    overflow: hidden;
    border: 1px solid transparent;
    transition: .3s;
}

.faq-item:hover {
    border-color: #0D6B68;
}

.faq-question {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px 15px;
    cursor: pointer;
    color: #29343b;
    font-size: 15px;
    font-weight: 600;
}

.faq-icon {
    min-width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #0D6B68;
    color: #fff;
    border-radius: 5px;
    font-size: 12px;
    transition: .3s;
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    padding: 0 18px 0 57px;
    color: #666;
    font-size: 14px;
    line-height: 1.6;
    transition: .35s ease;
}

.faq-item.active {
    background: #f4f9f8;
    border-color: #d4e5e3;
}

.faq-item.active .faq-answer {
    max-height: 150px;
    padding-bottom: 15px;
}

.faq-item.active .faq-icon {
    transform: rotate(90deg);
}

/* ===== FORM STYLES (Scoped from form.php) ===== */
.consultation-card {
    width: 100%;
    background: #fff;
    border-radius: 16px;
    padding: 30px 30px 28px;
    box-shadow: 0 10px 35px rgba(0, 0, 0, .07);
    color: #24303d;
    box-sizing: border-box;
    border: 1px solid #e4eceb;
}

.consultation-head {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 15px;
    margin-bottom: 17px;
}

.consultation-title {
    margin: 0;
    color: #24303d;
    font-size: 26px;
    line-height: 1.16;
    font-weight: 800;
}

.consultation-underline {
    width: 100%;
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
    margin-bottom: 13px;
}

.hero-field label {
    display: block;
    margin: 0 0 7px;
    font-size: 13px;
    line-height: 1.2;
    font-weight: 600;
    color: #303944;
}

.hero-input-wrap {
    position: relative;
}

.hero-input-wrap > i {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #9ca4ae;
    font-size: 15px;
    z-index: 2;
}

.hero-input,
.hero-select,
.hero-textarea {
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #e2e5e9;
    background: #f9fafb;
    color: #303944;
    border-radius: 11px;
    outline: none;
    font-size: 14px;
    transition: .2s ease;
    box-shadow: none;
}

.hero-input,
.hero-select {
    height: 46px;
    padding: 0 14px 0 46px;
}

.hero-select {
    padding-left: 14px;
    cursor: pointer;
}

.hero-textarea {
    min-height: 88px;
    resize: vertical;
    padding: 12px 14px;
}

.hero-input:focus,
.hero-select:focus,
.hero-textarea:focus {
    border-color: #0D6B68;
    box-shadow: 0 0 0 3px rgba(13, 107, 104, .10);
    background: #fff;
}

.hero-btn {
    width: 100%;
    min-height: 47px;
    border: 0;
    border-radius: 11px;
    background: #0D6B68;
    color: #fff;
    font-size: 15px;
    font-weight: 800;
    cursor: pointer;
    transition: transform .18s ease, filter .18s ease;
}

.hero-btn:hover {
    filter: brightness(.94);
    transform: translateY(-1px);
}

.hero-btn-secondary {
    background: #eef2f2;
    color: #334155;
}

.hero-btn-row {
    display: grid;
    grid-template-columns: 100px 1fr;
    gap: 10px;
}

.hero-legal {
    margin: 14px 4px 0;
    text-align: center;
    color: #8b9199;
    font-size: 10.5px;
    line-height: 1.45;
}

.hero-legal a {
    color: #0D6B68;
    text-decoration: none;
}

.hero-error {
    display: none;
    margin: -4px 0 10px;
    color: #c2410c;
    font-size: 12px;
    font-weight: 600;
}

.hero-success {
    display: none;
    margin-top: 13px;
    padding: 11px 12px;
    border-radius: 10px;
    background: #ecfdf3;
    color: #166534;
    font-size: 13px;
    font-weight: 700;
    text-align: center;
}

@media(max-width:767px){
    .contact-faq-section{ padding: 45px 12px; }
    .contact-heading h2{ font-size: 30px; }
    .consultation-card{ padding: 22px 18px 20px; border-radius: 14px; }
    .consultation-title{ font-size: 22px; }
    .faq-question{ font-size: 14px; padding: 12px; }
    .faq-answer{ padding-left: 54px; }
    .hero-btn-row{ grid-template-columns: 1fr; }
}
</style>

<!-- ================= SECTION ================= -->
<section class="contact-faq-section">
<div class="container contact-wrap">

    <!-- Heading -->
    <div class="contact-heading">
        <span>CONTACT US</span>
        <h2>How Can <b>We</b> Help You?</h2>
    </div>

    <div class="row g-4 align-items-start">

        <!-- ===== CONTACT FORM ===== -->
        <div class="col-lg-5">
            <div class="consultation-card">
                <div class="consultation-head">
                    <div>
                        <h2 class="consultation-title">Book Free Design Consultation</h2>
                        <div class="consultation-underline"></div>
                    </div>
                </div>

                <form id="faqConsultationForm" novalidate>
                    <!-- STEP 1 -->
                    <div class="hero-form-step active" id="faqStep1">
                        <div class="hero-field">
                            <label for="faqName">Full Name</label>
                            <div class="hero-input-wrap">
                                <i class="far fa-user"></i>
                                <input id="faqName" name="name" type="text" class="hero-input"
                                       placeholder="Full Name" autocomplete="name" required>
                            </div>
                        </div>

                        <div class="hero-field">
                            <label for="faqPhone">Phone Number</label>
                            <div class="hero-input-wrap">
                                <i class="fas fa-phone-alt"></i>
                                <input id="faqPhone" name="phone" type="tel" class="hero-input"
                                       placeholder="Phone Number" inputmode="numeric"
                                       autocomplete="tel" maxlength="10" required>
                            </div>
                        </div>

                        <div class="hero-field">
                            <label for="faqEmail">Email (Optional)</label>
                            <div class="hero-input-wrap">
                                <i class="far fa-envelope"></i>
                                <input id="faqEmail" name="email" type="email" class="hero-input"
                                       placeholder="Email Address" autocomplete="email">
                            </div>
                        </div>

                        <div class="hero-field">
                            <label for="faqCity">Select City</label>
                            <select id="faqCity" name="city" class="hero-select" required>
                                <option value="">Select City</option>
                                <option value="Gurugram">Gurugram</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Faridabad">Faridabad</option>
                                <option value="Noida">Noida</option>
                                <option value="Rohtak">Rohtak</option>
                                <option value="Other">Other</option>
                            </select>

                            <div class="hero-input-wrap" id="faqOtherCityWrap" style="display: none; margin-top: 10px;">
                                <i class="fas fa-map-marker-alt"></i>
                                <input id="faqOtherCityInput" name="other_city" type="text" class="hero-input" placeholder="Enter your city name">
                            </div>
                        </div>

                        <div class="hero-error" id="faqStep1Error"></div>

                        <button type="button" class="hero-btn" id="faqNextBtn">
                            Next
                        </button>
                    </div>

                    <!-- STEP 2 -->
                    <div class="hero-form-step" id="faqStep2">
                        <div class="hero-field">
                            <label for="faqProjectType">Project Type</label>
                            <select id="faqProjectType" name="project_type" class="hero-select" required>
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
                            <label for="faqBudget">Approx. Budget</label>
                            <select id="faqBudget" name="budget" class="hero-select" required>
                                <option value="">Select Budget</option>
                                <option>Below ₹5 Lakh</option>
                                <option>₹5–10 Lakh</option>
                                <option>₹10–20 Lakh</option>
                                <option>₹20–30 Lakh</option>
                                <option>₹30 Lakh+</option>
                            </select>
                        </div>

                        <div class="hero-field">
                            <label for="faqRequirement">Tell us about your requirement</label>
                            <textarea id="faqRequirement" name="requirement" class="hero-textarea"
                                      placeholder="Write a few details about your project..."></textarea>
                        </div>

                        <div class="hero-error" id="faqStep2Error"></div>

                        <div class="hero-btn-row">
                            <button type="button" class="hero-btn hero-btn-secondary" id="faqBackBtn">
                                Back
                            </button>
                            <button type="submit" class="hero-btn">
                                Submit Enquiry
                            </button>
                        </div>

                        <div class="hero-success" id="faqSuccess">
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
        </div>

        <!-- ===== FAQ ===== -->
        <div class="col-lg-7">

            <div class="faq-title">
                <i class="fa-solid fa-circle-question"></i>
                Frequently Asked Questions
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                    <span>Who is the best modular kitchen manufacturer in Gurgaon?</span>
                </div>
                <div class="faq-answer">
                    We provide professionally designed and customized modular
                    kitchen solutions according to your space, requirements and budget.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                    <span>What is the layout used to make a modular kitchen?</span>
                </div>
                <div class="faq-answer">
                    Common modular kitchen layouts include L-shaped, U-shaped,
                    straight, parallel and island kitchen layouts.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                    <span>What is the cost of a modular kitchen in Gurgaon?</span>
                </div>
                <div class="faq-answer">
                    The cost depends on the kitchen size, materials, finishes,
                    hardware and design requirements.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                    <span>How to build a modular kitchen in a small space?</span>
                </div>
                <div class="faq-answer">
                    Small kitchens can be optimized using smart storage,
                    vertical cabinets, corner units and space-saving layouts.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                    <span>How do I plan a modular kitchen at home?</span>
                </div>
                <div class="faq-answer">
                    Start with measurements, layout planning, storage
                    requirements, materials, colors and appliance placement.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                    <span>Can I customize the design of my modular kitchen in Gurgaon?</span>
                </div>
                <div class="faq-answer">
                    Yes, modular kitchen designs can be customized according
                    to your available space, storage needs and preferred style.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
                    <span>How long does it take to install a modular kitchen in Gurgaon?</span>
                </div>
                <div class="faq-answer">
                    Installation time depends on the size, design and
                    complexity of the kitchen.
                </div>
            </div>

        </div>
    </div>
</div>
</section>

<!-- ================= JS SCRIPT ================= -->
<script>
// FAQ Accordion Script
document.querySelectorAll(".faq-question").forEach(function(question){
    question.addEventListener("click",function(){
        const item = this.parentElement;

        document.querySelectorAll(".faq-item").forEach(function(other){
            if(other !== item){
                other.classList.remove("active");
                other.querySelector(".faq-icon i").className = "fa-solid fa-plus";
            }
        });

        item.classList.toggle("active");
        const icon = item.querySelector(".faq-icon i");
        icon.className = item.classList.contains("active") ? "fa-solid fa-minus" : "fa-solid fa-plus";
    });
});

// Form Logic Script (Isolated with unique IDs)
(function () {
    const form = document.getElementById("faqConsultationForm");
    if (!form) return;

    const step1 = document.getElementById("faqStep1");
    const step2 = document.getElementById("faqStep2");
    const nextBtn = document.getElementById("faqNextBtn");
    const backBtn = document.getElementById("faqBackBtn");
    const error1 = document.getElementById("faqStep1Error");
    const error2 = document.getElementById("faqStep2Error");
    const success = document.getElementById("faqSuccess");
    const citySelect = document.getElementById("faqCity");
    const otherCityWrap = document.getElementById("faqOtherCityWrap");
    const otherCityInput = document.getElementById("faqOtherCityInput");

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

        const name = document.getElementById("faqName");
        const phone = document.getElementById("faqPhone");
        const city = document.getElementById("faqCity");
        const email = document.getElementById("faqEmail");

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

        const projectType = document.getElementById("faqProjectType");
        const budget = document.getElementById("faqBudget");

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
            otherCityWrap.style.display = "none";
        }, 3500);
    });

    document.getElementById("faqPhone").addEventListener("input", function () {
        this.value = this.value.replace(/\D/g, "").slice(0, 10);
    });
})();
</script>