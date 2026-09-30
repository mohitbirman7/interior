<?php
/*
 * popup-form.php : "Talk to a Designer" enquiry popup
 *
 * How to use: add   include "popup-form.php";   just before your footer include
 * (or inside footer.php to show it on every page).
 */
$pfStandalone = realpath($_SERVER['SCRIPT_FILENAME']) === realpath(__FILE__);
if ($pfStandalone): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popup Form Preview</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="container py-5"><h1>Popup preview page</h1><p>The form pops up 5 seconds after this page loads.</p></div>
<?php endif; ?>

<!-- Popup Enquiry Form Start -->
<style>
    .pf-overlay { position: fixed; inset: 0; z-index: 99999; display: flex; align-items: center; justify-content: center; padding: 16px; background: rgba(20,12,8,.62); backdrop-filter: blur(4px); opacity: 0; visibility: hidden; transition: opacity .35s, visibility 0s .35s; }
    .pf-overlay.is-open { opacity: 1; visibility: visible; transition: opacity .35s; }
    .pf-modal { position: relative; display: grid; grid-template-columns: 1fr 1fr; width: 100%; max-width: 820px; max-height: 88vh; overflow: hidden; background: #fff; border-radius: 14px; box-shadow: 0 30px 80px rgba(0,0,0,.45); outline: 0; opacity: 0; transform: translateY(34px) scale(.95); transition: transform .55s cubic-bezier(.2,.9,.25,1.15), opacity .4s; }
    .pf-overlay.is-open .pf-modal { opacity: 1; transform: none; }
    .pf-modal::before { content:""; position:absolute; inset:0; border-radius:16px; padding:1px; background:linear-gradient(135deg,rgba(33,106,98,.35),rgba(255,255,255,.8),rgba(33,106,98,.18)); -webkit-mask:linear-gradient(#fff 0 0) content-box,linear-gradient(#fff 0 0); -webkit-mask-composite:xor; mask-composite:exclude; pointer-events:none; z-index:6; }
    .pf-modal { border-radius:16px; }

    .pf-close { position: absolute; top: 10px; right: 10px; z-index: 5; width: 34px; height: 34px; padding: 0; border: 0; border-radius: 50%; background: #fff; color: #444; font-size: 24px; line-height: 34px; text-align: center; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,.25); transition: transform .3s, color .3s; }
    .pf-close:hover { transform: rotate(90deg); color: #000; }

    .pf-left { position: relative; overflow: hidden; min-height: 430px; padding: 24px 20px; display: flex; flex-direction: column; justify-content: space-between; color: #fff; background: #000 url('img/interior1.jpeg') center / cover no-repeat; }
    
    .pf-bg-slider { position: absolute; inset: 0; z-index: 0; }
    .pf-overlay.is-open .pf-bg-slider { animation: pfZoom 9s ease-out both; }
    .pf-slide { position: absolute; inset: 0; background-position: center; background-size: cover; background-repeat: no-repeat; opacity: 0; animation: pfSlideFade 8s infinite; }
    .pf-slide:nth-child(1) { animation-delay: 0s; }
    .pf-slide:nth-child(2) { animation-delay: 2s; }
    .pf-slide:nth-child(3) { animation-delay: 4s; }
    .pf-slide:nth-child(4) { animation-delay: 6s; }
    
    @keyframes pfSlideFade { 0% { opacity: 0; } 12.5% { opacity: 1; } 25% { opacity: 1; } 37.5% { opacity: 0; } 100% { opacity: 0; } }
    
    .pf-left::before { content: ""; position: absolute; inset: 0; z-index: 1; background: linear-gradient(180deg, rgba(20,12,8,.65), rgba(20,12,8,.05) 45%, rgba(20,12,8,.72)); }
    .pf-copy, .pf-call { position: relative; z-index: 2; }
    .pf-kicker { display: block; font-size: 1.15rem; font-weight: 300; letter-spacing: .04em; }
    .pf-big { display: block; margin-top: 4px; font-family: Georgia, "Times New Roman", serif; font-size: 2.2rem; line-height: 1.1; font-weight: 600; }
    .pf-call { display: inline-flex; align-items: center; gap: 10px; width: fit-content; padding: 10px 18px; border-radius: 40px; background: rgba(255,255,255,.18); backdrop-filter: blur(6px); color: #fff; font-weight: 600; }
    .pf-call:hover { color: #fff; background: rgba(255,255,255,.3); }

    .pf-right { padding: 20px 22px; overflow-y: auto; display: flex; flex-direction: column; justify-content: center; background: linear-gradient(145deg,#ffffff,#f7faf9); }

    @keyframes pfUp { from { opacity: 0; transform: translateY(18px); } to { opacity: 1; transform: none; } }
    @keyframes pfZoom { from { transform: scale(1.12); } to { transform: scale(1); } }

    @media (max-width: 900px) {
        .pf-modal { max-width: 760px; }
        .pf-left, .pf-right { min-width: 0; }
    }

    @media (max-width: 767px) {
        .pf-modal { grid-template-columns: 1fr; overflow: hidden; max-width: 420px; max-height: calc(100vh - 24px); }
        .pf-left { min-height: 120px; padding: 12px; }
        .pf-big { font-size: 1.5rem; }
        .pf-kicker { font-size: 0.85rem; }
        .pf-call { display: none; }
        .pf-right { padding: 10px; overflow-y: auto; }
    }
    @media (prefers-reduced-motion: reduce) { .pf-overlay, .pf-modal, .pf-bg-slider, .pf-slide, .pf-close { transition: none !important; animation: none !important; } }
</style>

<div class="pf-overlay" id="pfOverlay" aria-hidden="true">
    <div class="pf-modal" role="dialog" aria-modal="true" aria-labelledby="pfTitle" tabindex="-1">

        <button type="button" class="pf-close" id="pfClose" aria-label="Close popup">&times;</button>

        <!-- Left: image slider and headline -->
        <div class="pf-left">
            <div class="pf-bg-slider">
                <div class="pf-slide" style="background-image: url('img/interior1.jpeg');"></div>
                <div class="pf-slide" style="background-image: url('img/interior3.jpeg');"></div>
                <div class="pf-slide" style="background-image: url('img/interior5.jpeg');"></div>
                <div class="pf-slide" style="background-image: url('img/interior10.jpeg');"></div>
            </div>
        </div>

        <!-- Right: consultation form (form.php code placed directly here, IDs prefixed "pop") -->
        <div class="pf-right">

            <!-- ================= FORM START ================= -->
            <style>
                /* =========================
                   CONSULTATION CARD (compact)
                   ========================= */
                .consultation-card {
                    width: 100%;
                    max-width: 440px;
                    margin-left: auto;
                    margin-right: 0;
                    background: #fff;
                    border-radius: 14px;
                    padding: 18px 20px 16px;
                    box-shadow: none;
                    color: #24303d;
                    box-sizing: border-box;
                }

                .consultation-head {
                    display: flex;
                    align-items: flex-start;
                    justify-content: space-between;
                    gap: 15px;
                    margin-bottom: 12px;
                    padding-right: 30px;
                }

                .consultation-title {
                    margin: 0;
                    color: #24303d;
                    font-size: 20px;
                    line-height: 1.16;
                    font-weight: 800;
                }

                .consultation-underline {
                    width: 100%;
                    height: 3px;
                    border-radius: 10px;
                    background: var(--hero-theme, #216a62);
                    margin-top: 8px;
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
                    margin-bottom: 9px;
                }

                .hero-field label {
                    display: block;
                    margin: 0 0 4px;
                    font-size: 12px;
                    line-height: 1.2;
                    font-weight: 600;
                    color: #303944;
                }

                .hero-input-wrap {
                    position: relative;
                }

                .hero-input-wrap > i {
                    position: absolute;
                    left: 14px;
                    top: 50%;
                    transform: translateY(-50%);
                    color: #9ca4ae;
                    font-size: 13px;
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
                    border-radius: 10px;
                    outline: none;
                    font-size: 13px;
                    transition: .2s ease;
                    box-shadow: none;
                }

                .hero-input,
                .hero-select {
                    height: 40px;
                    padding: 0 12px 0 40px;
                }

                .hero-select {
                    padding-left: 12px;
                    cursor: pointer;
                }

                .hero-textarea {
                    min-height: 60px;
                    resize: vertical;
                    padding: 9px 12px;
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
                    min-height: 42px;
                    border: 0;
                    border-radius: 10px;
                    background: var(--hero-theme, #216a62);
                    color: #fff;
                    font-size: 14px;
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
                    grid-template-columns: 90px 1fr;
                    gap: 8px;
                }

                .hero-legal {
                    margin: 10px 4px 0;
                    text-align: center;
                    color: #8b9199;
                    font-size: 10px;
                    line-height: 1.4;
                }

                .hero-legal a {
                    color: var(--hero-theme, #216a62);
                    text-decoration: none;
                }

                .hero-error {
                    display: none;
                    margin: -2px 0 8px;
                    color: #c2410c;
                    font-size: 12px;
                    font-weight: 600;
                }

                .hero-success {
                    display: none;
                    margin-top: 10px;
                    padding: 9px 10px;
                    border-radius: 10px;
                    background: #ecfdf3;
                    color: #166534;
                    font-size: 12px;
                    font-weight: 700;
                    text-align: center;
                }

                /* =========================
                   RESPONSIVE
                   ========================= */
                @media (max-width: 1199.98px) {
                    .consultation-card {
                        padding: 18px 20px 16px;
                    }

                    .consultation-title {
                        font-size: 20px;
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
                        padding: 14px 12px 12px;
                        border-radius: 12px;
                    }

                    .consultation-title {
                        font-size: 18px;
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

                <form id="popConsultationForm" novalidate>
                    <!-- STEP 1 -->
                    <div class="hero-form-step active" id="popStep1">
                        <div class="hero-field">
                            <label for="popName">Full Name</label>
                            <div class="hero-input-wrap">
                                <i class="far fa-user"></i>
                                <input id="popName" name="name" type="text" class="hero-input"
                                       placeholder="Full Name" autocomplete="name" required>
                            </div>
                        </div>

                        <div class="hero-field">
                            <label for="popPhone">Phone Number</label>
                            <div class="hero-input-wrap">
                                <i class="fas fa-phone-alt"></i>
                                <input id="popPhone" name="phone" type="tel" class="hero-input"
                                       placeholder="Phone Number" inputmode="numeric"
                                       autocomplete="tel" maxlength="10" required>
                            </div>
                        </div>

                        <div class="hero-field">
                            <label for="popEmail">Email (Optional)</label>
                            <div class="hero-input-wrap">
                                <i class="far fa-envelope"></i>
                                <input id="popEmail" name="email" type="email" class="hero-input"
                                       placeholder="Email Address" autocomplete="email">
                            </div>
                        </div>

                        <div class="hero-field">
                            <label for="popCity">Select City</label>
                            <select id="popCity" name="city" class="hero-select" required>
                                <option value="">Select City</option>
                                <option value="Gurugram">Gurugram</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Faridabad">Faridabad</option>
                                <option value="Noida">Noida</option>
                                <option value="Rohtak">Rohtak</option>
                                <option value="Other">Other</option>
                            </select>

                            <div class="hero-input-wrap" id="popOtherCityWrap" style="display: none; margin-top: 8px;">
                                <i class="fas fa-map-marker-alt"></i>
                                <input id="popOtherCityInput" name="other_city" type="text" class="hero-input" placeholder="Enter your city name">
                            </div>
                        </div>

                        <div class="hero-error" id="popStep1Error"></div>

                        <button type="button" class="hero-btn" id="popNextBtn">
                            Next
                        </button>
                    </div>

                    <!-- STEP 2 -->
                    <div class="hero-form-step" id="popStep2">
                        <div class="hero-field">
                            <label for="popProjectType">Project Type</label>
                            <select id="popProjectType" name="project_type" class="hero-select" required>
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
                            <label for="popBudget">Approx. Budget</label>
                            <select id="popBudget" name="budget" class="hero-select" required>
                                <option value="">Select Budget</option>
                                <option>Below ₹5 Lakh</option>
                                <option>₹5–10 Lakh</option>
                                <option>₹10–20 Lakh</option>
                                <option>₹20–30 Lakh</option>
                                <option>₹30 Lakh+</option>
                            </select>
                        </div>

                        <div class="hero-field">
                            <label for="popRequirement">Tell us about your requirement</label>
                            <textarea id="popRequirement" name="requirement" class="hero-textarea"
                                      placeholder="Write a few details about your project..."></textarea>
                        </div>

                        <div class="hero-error" id="popStep2Error"></div>

                        <div class="hero-btn-row">
                            <button type="button" class="hero-btn hero-btn-secondary" id="popBackBtn">
                                Back
                            </button>
                            <button type="submit" class="hero-btn">
                                Submit Enquiry
                            </button>
                        </div>

                        <div class="hero-success" id="popSuccess">
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
                    const form = document.getElementById("popConsultationForm");
                    if (!form) return;

                    const step1 = document.getElementById("popStep1");
                    const step2 = document.getElementById("popStep2");
                    const nextBtn = document.getElementById("popNextBtn");
                    const backBtn = document.getElementById("popBackBtn");
                    const error1 = document.getElementById("popStep1Error");
                    const error2 = document.getElementById("popStep2Error");
                    const success = document.getElementById("popSuccess");
                    const citySelect = document.getElementById("popCity");
                    const otherCityWrap = document.getElementById("popOtherCityWrap");
                    const otherCityInput = document.getElementById("popOtherCityInput");

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

                        const name = document.getElementById("popName");
                        const phone = document.getElementById("popPhone");
                        const city = document.getElementById("popCity");
                        const email = document.getElementById("popEmail");

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

                        const projectType = document.getElementById("popProjectType");
                        const budget = document.getElementById("popBudget");

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

                    document.getElementById("popPhone").addEventListener("input", function () {
                        this.value = this.value.replace(/\D/g, "").slice(0, 10);
                    });
                })();
            </script>
            <!-- ================= FORM END ================= -->

        </div>

    </div>
</div>

<script>
    (function () {
        var DELAY = 2000;
        var KEY = 'sbjPopupShown';

        var overlay = document.getElementById('pfOverlay');
        if (!overlay) return;
        var modal = overlay.querySelector('.pf-modal');

        function openPopup() {
            overlay.classList.add('is-open');
            overlay.setAttribute('aria-hidden', 'false');
            document.documentElement.style.overflow = 'hidden';
            modal.focus({ preventScroll: true });
        }
        function closePopup() {
            overlay.classList.remove('is-open');
            overlay.setAttribute('aria-hidden', 'true');
            document.documentElement.style.overflow = '';
        }

        var seen = false;
        try { seen = !!sessionStorage.getItem(KEY); } catch (e) {}
        if (!seen) {
            setTimeout(function () {
                try { sessionStorage.setItem(KEY, '1'); } catch (e) {}
                openPopup();
            }, DELAY);
        }

        document.getElementById('pfClose').addEventListener('click', closePopup);
        overlay.addEventListener('click', function (e) { if (e.target === overlay) closePopup(); });
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closePopup(); });
    })();
</script>
<!-- Popup Enquiry Form End -->

<?php if ($pfStandalone): ?>
</body>
</html>
<?php endif; ?>