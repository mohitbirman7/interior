<?php
/*
 * popup-form.php : "Talk to a Designer" enquiry popup
 *
 * How to use: add   include "popup-form.php";   just before your footer include
 * (or inside footer.php to show it on every page).
 *
 * Behaviour: the popup opens 5 seconds after the page loads. Refreshing the page
 * never shows it again. It comes back only after the visitor closes the site
 * (tab/window) and opens it again.
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
    .pf-modal { position: relative; display: grid; grid-template-columns: 1fr 1.05fr; width: 100%; max-width: 750px; max-height: calc(100vh - 32px); overflow: hidden; background: #fff; border-radius: 14px; box-shadow: 0 30px 80px rgba(0,0,0,.45); outline: 0; opacity: 0; transform: translateY(34px) scale(.95); transition: transform .55s cubic-bezier(.2,.9,.25,1.15), opacity .4s; }
    .pf-overlay.is-open .pf-modal { opacity: 1; transform: none; }

    .pf-close { position: absolute; top: 12px; right: 12px; z-index: 5; width: 40px; height: 40px; padding: 0; border: 0; border-radius: 50%; background: #fff; color: #444; font-size: 26px; line-height: 40px; text-align: center; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,.25); transition: transform .3s, color .3s; }
    .pf-close:hover { transform: rotate(90deg); color: #000; }

    /* Change 1: Added background image directly to left side */
    .pf-left { position: relative; overflow: hidden; min-height: 380px; padding: 24px 20px; display: flex; flex-direction: column; justify-content: space-between; color: #fff; background: #000 url('img/interior1.jpeg') center / cover no-repeat; }
    
    /* Image Slider CSS */
    .pf-bg-slider { position: absolute; inset: 0; z-index: 0; }
    .pf-overlay.is-open .pf-bg-slider { animation: pfZoom 9s ease-out both; }
    .pf-slide { position: absolute; inset: 0; background-position: center; background-size: cover; background-repeat: no-repeat; opacity: 0; animation: pfSlideFade 8s infinite; }
    .pf-slide:nth-child(1) { animation-delay: 0s; }
    .pf-slide:nth-child(2) { animation-delay: 2s; }
    .pf-slide:nth-child(3) { animation-delay: 4s; }
    .pf-slide:nth-child(4) { animation-delay: 6s; }
    
    /* Change 2: Perfect overlap timing */
    @keyframes pfSlideFade { 0% { opacity: 0; } 12.5% { opacity: 1; } 25% { opacity: 1; } 37.5% { opacity: 0; } 100% { opacity: 0; } }
    
    .pf-left::before { content: ""; position: absolute; inset: 0; z-index: 1; background: linear-gradient(180deg, rgba(20,12,8,.65), rgba(20,12,8,.05) 45%, rgba(20,12,8,.72)); }
    .pf-copy, .pf-call { position: relative; z-index: 2; }
    .pf-kicker { display: block; font-size: 1.15rem; font-weight: 300; letter-spacing: .04em; }
    .pf-big { display: block; margin-top: 4px; font-family: Georgia, "Times New Roman", serif; font-size: 2.2rem; line-height: 1.1; font-weight: 600; }
    .pf-call { display: inline-flex; align-items: center; gap: 10px; width: fit-content; padding: 10px 18px; border-radius: 40px; background: rgba(255,255,255,.18); backdrop-filter: blur(6px); color: #fff; font-weight: 600; }
    .pf-call:hover { color: #fff; background: rgba(255,255,255,.3); }

    .pf-right { padding: 20px 25px; overflow-y: hidden; display: flex; flex-direction: column; justify-content: center; }
    .pf-title { margin: 0 0 6px; font-size: 1.5rem; font-weight: 700; color: #111; }
    .pf-sub { margin: 0 0 12px; color: #6b6b6b; font-weight: 500; }
    .pf-field { position: relative; margin-bottom: 8px; }
    .pf-field i { position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #9a9a9a; pointer-events: none; transition: color .25s; }
    .pf-field.pf-area i { top: 16px; transform: none; }
    .pf-field:focus-within i { color: #222; }
    .pf-input { display: block; width: 100%; padding: 10px 12px 10px 40px; border: 1.5px solid #e2e2e2; border-radius: 8px; background: #fafafa; color: #222; font: inherit; transition: border-color .25s, box-shadow .25s, background .25s; }
    .pf-input:focus { outline: 0; border-color: #222; background: #fff; box-shadow: 0 0 0 4px rgba(0,0,0,.06); }
    .pf-input.pf-invalid { border-color: #c0392b; background: #fff6f5; }
    textarea.pf-input { height: 55px; resize: none; }
    .pf-hp { position: absolute; left: -9999px; width: 1px; height: 1px; opacity: 0; }
    .pf-error { min-height: 22px; margin: 0 0 6px; color: #c0392b; font-size: .92rem; }
    .pf-btn { position: relative; overflow: hidden; width: 100%; padding: 10px; font-weight: 700; letter-spacing: .03em; }
    .pf-btn::after { content: ""; position: absolute; top: 0; left: -80%; width: 50%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,.4), transparent); transform: skewX(-20deg); }
    .pf-btn:hover::after { left: 130%; transition: left .7s; }
    .pf-btn:disabled { opacity: .7; cursor: wait; }
    .pf-note { margin: 10px 0 0; text-align: center; color: #8a8a8a; font-size: .85rem; }

    .pf-success { display: none; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 30px 10px; }
    .pf-success.show { display: flex; animation: pfUp .6s cubic-bezier(.2,.8,.2,1) both; }
    .pf-success i { font-size: 64px; margin-bottom: 16px; }

    .pf-overlay.is-open .pf-anim { animation: pfUp .6s cubic-bezier(.2,.8,.2,1) both; animation-delay: var(--d, 0s); }
    @keyframes pfUp { from { opacity: 0; transform: translateY(18px); } to { opacity: 1; transform: none; } }
    @keyframes pfZoom { from { transform: scale(1.12); } to { transform: scale(1); } }

    @media (max-width: 767px) {
        .pf-modal { grid-template-columns: 1fr; overflow: hidden; max-height: calc(100vh - 24px); }
        .pf-left { min-height: 100px; padding: 15px; }
        .pf-big { font-size: 1.5rem; }
        .pf-kicker { font-size: 0.85rem; }
        .pf-call { display: none; }
        .pf-right { padding: 15px; overflow: hidden; }
        .pf-title { font-size: 1.3rem; }
    }
    @media (prefers-reduced-motion: reduce) { .pf-overlay, .pf-modal, .pf-anim, .pf-bg-slider, .pf-slide, .pf-close, .pf-success { transition: none !important; animation: none !important; } }
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

            <!-- <div class="pf-copy">
                <span class="pf-kicker">Your Home Awaits</span>
                <strong class="pf-big">Live dreams</strong>
            </div> -->
            <!-- <a class="pf-call" href="tel:9911634311"><i class="fas fa-phone-alt"></i> Prefer to talk? Call 9911634311</a> -->
        </div>

        <!-- Right: form -->
        <div class="pf-right">
            <div id="pfFormWrap">
                <h3 class="pf-title pf-anim" id="pfTitle" style="--d:.15s">Talk to a Designer</h3>
                <p class="pf-sub pf-anim" style="--d:.22s">Get FREE consultation with our experts.</p>

                <form id="pfForm" novalidate>
                    <div class="pf-field pf-anim" style="--d:.3s">
                        <i class="far fa-user"></i>
                        <input type="text" name="name" class="pf-input" placeholder="Name" autocomplete="name" required>
                    </div>
                    <div class="pf-field pf-anim" style="--d:.37s">
                        <i class="far fa-envelope"></i>
                        <input type="email" name="email" class="pf-input" placeholder="Email" autocomplete="email">
                    </div>
                    <div class="pf-field pf-anim" style="--d:.44s">
                        <i class="fas fa-phone-alt"></i>
                        <input type="tel" name="phone" class="pf-input" placeholder="Phone" inputmode="numeric" maxlength="10" autocomplete="tel" required>
                    </div>
                    <div class="pf-field pf-area pf-anim" style="--d:.51s">
                        <i class="far fa-comment-dots"></i>
                        <textarea name="message" class="pf-input" placeholder="Message"></textarea>
                    </div>

                    <input type="text" name="website" class="pf-hp" tabindex="-1" autocomplete="off" aria-hidden="true">

                    <div class="pf-error" id="pfError" role="alert"></div>

                    <button type="submit" class="btn btn-primary pf-btn pf-anim" id="pfSubmit" style="--d:.58s">BOOK FREE CONSULTATION</button>
                    <p class="pf-note pf-anim" style="--d:.65s">We use your details only to contact you about your enquiry, call now <b>+91 9911634311</b></p>
                </form>
            </div>

            <div class="pf-success" id="pfSuccess">
                <i class="fas fa-check-circle text-primary"></i>
                <h3 class="pf-title">Thank you!</h3>
                <p class="pf-sub mb-0">Your enquiry has been received. Our designer will contact you shortly.</p>
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        var DELAY = 2000;                      // popup opens 2 seconds after load
        var KEY = 'sbjPopupShown';             // remembered until the tab/site is closed
        var ENDPOINT = 'popup-enquiry.php';    // handler file (keep it next to your pages)

        var overlay = document.getElementById('pfOverlay');
        if (!overlay) return;
        var modal = overlay.querySelector('.pf-modal');
        var form = document.getElementById('pfForm');
        var errBox = document.getElementById('pfError');
        var btn = document.getElementById('pfSubmit');
        var wrap = document.getElementById('pfFormWrap');
        var okBox = document.getElementById('pfSuccess');

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

        // Show once per visit: refresh keeps the flag, closing the tab/site clears it
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

        form.phone.addEventListener('input', function () { this.value = this.value.replace(/\D/g, ''); });

        function fail(msg, field) {
            errBox.textContent = msg;
            if (field) { field.classList.add('pf-invalid'); field.focus(); }
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            errBox.textContent = '';
            Array.prototype.forEach.call(form.elements, function (el) { el.classList.remove('pf-invalid'); });

            var name = form.name.value.trim();
            var email = form.email.value.trim();
            var phone = form.phone.value.trim();

            if (name.length < 2) return fail('Please enter your name.', form.name);
            if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return fail('Please enter a valid email address.', form.email);
            if (!/^[6-9]\d{9}$/.test(phone)) return fail('Please enter a valid 10-digit phone number.', form.phone);

            btn.disabled = true;
            btn.textContent = 'SENDING...';
            fetch(ENDPOINT, { method: 'POST', body: new FormData(form) })
                .then(function (r) { return r.json(); })
                .then(function (d) {
                    if (!d.ok) throw new Error('failed');
                    wrap.style.display = 'none';
                    okBox.classList.add('show');
                    setTimeout(closePopup, 4500);
                })
                .catch(function () {
                    btn.disabled = false;
                    btn.textContent = 'BOOK FREE CONSULTATION';
                    fail('Sorry, something went wrong. Please call us on 9911634311.');
                });
        });
    })();
</script>
<!-- Popup Enquiry Form End -->

<?php if ($pfStandalone): ?>
</body>
</html>
<?php endif; ?>