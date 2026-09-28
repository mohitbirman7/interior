<section class="how-it-works">

<style>

   /* ================================
   HOW IT WORKS
================================ */

.how-it-works {
    width: 100%;
    padding: 75px 0 90px;
    background: #f9f8f6;
    overflow: hidden;
}


/* ================================
   HEADER
================================ */

.how-header {
    text-align: center;
    max-width: 850px;
    margin: 0 auto 35px;
    padding: 0 20px;
}

.how-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    padding: 9px 16px;

    border: 1px solid #0D6B68;
    border-radius: 30px;

    font-size: 11px;
    font-weight: 600;

    color: #0D6B68;

    margin-bottom: 14px;
}

.how-header h2 {
    margin: 0;

    font-size: 38px;
    line-height: 1.15;
    font-weight: 700;

    color: #111542;
}

.how-header p {
    max-width: 700px;

    margin: 15px auto 0;

    font-size: 16px;
    line-height: 1.55;

    color: #777789;
}


/* ================================
   SLIDER
================================ */

.steps-slider {
    width: 100%;
    overflow: hidden;
    position: relative;
}

.steps-track {
    display: flex;

    width: max-content;

    gap: 14px;

    animation: moveSteps 28s linear infinite;
}


/* ================================
   CARD
================================ */

.step-card {
    width: 320px;
    min-width: 320px;

    height: 270px;

    background: #ffffff;

    border: 1px solid #dedede;

    border-radius: 14px;

    display: flex;
    flex-direction: column;
    align-items: center;

    padding: 16px 15px 14px;

    box-sizing: border-box;
}


/* STEP NUMBER */

.step-number {
    background: #fff9df;

    color: #c79a35;

    border-radius: 20px;

    padding: 6px 11px;

    font-size: 9px;

    font-weight: 700;

    line-height: 1;
}


/* ================================
   IMAGE
================================ */

.step-image {
    width: 100%;

    height: 160px;

    display: flex;

    justify-content: center;

    align-items: center;

    margin-top: 4px;
}

.step-image img {
    width: 230px;
    height: 150px;

    object-fit: contain;

    display: block;
}


/* ================================
   TITLE
================================ */

.step-title {
    width: 100%;

    text-align: center;

    font-size: 16px;

    line-height: 1.35;

    font-weight: 500;

    color: #151515;

    margin-top: 5px;
}


/* ================================
   RIGHT → LEFT
================================ */

@keyframes moveSteps {

    from {
        transform: translateX(0);
    }

    to {
        transform: translateX(calc(-50% - 7px));
    }

}


/* Hover par pause */

.steps-slider:hover .steps-track {
    animation-play-state: paused;
}


/* ================================
   TABLET
================================ */

@media (max-width: 768px) {

    .how-it-works {
        padding: 55px 0 70px;
    }

    .how-header h2 {
        font-size: 30px;
    }

    .how-header p {
        font-size: 14px;
    }

    .step-card {
        width: 280px;
        min-width: 280px;

        height: 240px;
    }

    .step-image {
        height: 140px;
    }

    .step-image img {
        width: 200px;
        height: 130px;
    }

    .steps-track {
        animation-duration: 24s;
    }

}


/* ================================
   MOBILE
================================ */

@media (max-width: 480px) {

    .how-header h2 {
        font-size: 25px;
    }

    .how-header p {
        font-size: 13px;
    }

    .step-card {
        width: 260px;
        min-width: 260px;

        height: 220px;
    }

    .step-image {
        height: 130px;
    }

    .step-image img {
        width: 180px;
        height: 120px;
    }

}
</style>

    <!-- Heading -->
    <div class="how-header">

        <span class="how-badge">
            How it works !
        </span>

        <h2>
            Transform Your Home in Just 7
            <br>
            Simple Steps
        </h2>

        <p>
            Start by meeting our expert designers who understand your lifestyle
            and needs. With just a 10% booking payment, your renovation journey
            begins as we lock in your personalized plan.
        </p>

    </div>


    <!-- Slider -->
    <div class="steps-slider">

        <div class="steps-track">

            <?php
            $steps = [
                [
                    "step" => "STEP 01",
                    "image" => "img/step1.png",
                    "title" => "Design Consultation"
                ],
                [
                    "step" => "STEP 02",
                    "image" => "img/step2.png",
                    "title" => "Book your order (Pay 10% of the quote value or ₹25,000/- whichever is higher)"
                ],
                [
                    "step" => "STEP 03",
                    "image" => "img/step3.png",
                    "title" => "Site Measurement"
                ],
                [
                    "step" => "STEP 04",
                    "image" => "img/step4.png",
                    "title" => "Finalise your design"
                ],
                [
                    "step" => "STEP 05",
                    "image" => "img/step5.png",
                    "title" => "Pay 50% before production"
                ],
                [
                    "step" => "STEP 06",
                    "image" => "img/step6.png",
                    "title" => "Production & Installation"
                ],
                [
                    "step" => "STEP 07",
                    "image" => "img/step7.png",
                    "title" => "Move into your dream home"
                ]
            ];

            // Duplicate cards for infinite slider
            $allSteps = array_merge($steps, $steps);

            foreach ($allSteps as $item):
            ?>

                <div class="step-card">

                    <div class="step-number">
                        <?php echo $item["step"]; ?>
                    </div>

                    <div class="step-image">
                        <img
                            src="<?php echo $item["image"]; ?>"
                            alt="<?php echo $item["title"]; ?>"
                        >
                    </div>

                    <div class="step-title">
                        <?php echo $item["title"]; ?>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>