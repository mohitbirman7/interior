<!-- ================= form.php ================= -->
<!-- Consultation Form (include this file wherever the hero form is needed) -->

<style>
    /* =========================
       CONSULTATION CARD
       ========================= */
    .consultation-card {
        width: 100%;
        max-width: 440px;
        margin-left: auto;
        margin-right: 0;
        background: #fff;
        border-radius: 16px;
        padding: 30px 30px 28px;
        box-shadow: 0 24px 70px rgba(0, 0, 0, .34);
        color: #24303d;
        box-sizing: border-box;
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
        background: var(--hero-theme, #216a62);
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
        border-color: var(--hero-theme, #216a62);
        box-shadow: 0 0 0 3px rgba(33, 106, 98, .10);
        background: #fff;
    }

    .hero-btn {
        width: 100%;
        min-height: 47px;
        border: 0;
        border-radius: 11px;
        background: var(--hero-theme, #216a62);
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
        color: var(--hero-theme, #216a62);
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

    /* =========================
       RESPONSIVE
       ========================= */
    @media (max-width: 1199.98px) {
        .consultation-card {
            padding: 26px 24px;
        }

        .consultation-title {
            font-size: 26px;
        }
    }

    @media (max-width: 991.98px) {
        .consultation-card {
            max-width: 520px;
            margin: 0 auto;
        }
    }

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

<div class="consultation-card">
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
                Next
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
                    Back
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
            window.scrollTo({ top: window.scrollY, behavior: "smooth" });
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

            /* Front-end confirmation. Connect this form to your PHP/DB
               endpoint later if you want enquiries stored in a database/Excel. */
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