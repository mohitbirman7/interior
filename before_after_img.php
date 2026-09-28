<?php
// Yahan aap apni images ka path set kar sakte hain
// Agar aap database use kar rahe hain, toh ye links wahan se fetch karke in variables me daal sakte hain.
$before_image = "img/before.png";
$after_image = "img/after.png";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Before After Slider</title>
    
    <!-- Yahan se CSS shuru hai. Aap chahein toh ise copy karke apni style.css me bhi daal sakte hain -->
    <style>
        .comparison-slider {
            position: relative;
            width: 100%;
            max-width: 100%px;
            aspect-ratio: 16 / 10;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            --position: 50%; 
            margin: 40px auto; /* Center karne ke liye */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .image-before, .image-after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }

        .image-before {
            clip-path: polygon(0 0, var(--position) 0, var(--position) 100%, 0 100%);
            z-index: 2;
        }

        .slider-input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0; 
            cursor: ew-resize; 
            z-index: 10;
            cursor: default;
        }

        .slider-line {
            position: absolute;
            top: 0;
            bottom: 0;
            left: var(--position);
            width: 2px;
            background-color: white;
            transform: translateX(-50%);
            z-index: 5;
            pointer-events: none; 
        }

        .slider-button {
            position: absolute;
            top: 50%;
            left: var(--position);
            transform: translate(-50%, -50%);
            width: 44px;
            height: 44px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 6;
            pointer-events: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .slider-button::before {
            content: "";
            display: inline-block;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 6px solid #555;
            margin-right: 6px;
        }
        .slider-button::after {
            content: "";
            display: inline-block;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 6px solid #555;
            margin-left: 6px;
        }

        .label {
            position: absolute;
            top: 20px;
            padding: 6px 16px;
            border-radius: 30px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            font-size: 14px;
            font-weight: 600;
            z-index: 8;
            pointer-events: none;
            backdrop-filter: blur(4px);
        }

        .label-before { left: 20px; }
        .label-after { right: 20px; }
    </style>
</head>
<body>

    <!-- Yahan slider ban raha hai -->
    <div class="comparison-slider">
        
        <!-- Yahan PHP se After image laa rahe hain -->
        <img src="<?php echo $after_image; ?>" class="image-after" alt="After Design">
        
        <!-- Yahan PHP se Before image laa rahe hain -->
        <img src="<?php echo $before_image; ?>" class="image-before" alt="Before Design">
        
        <div class="label label-before">&larr; Before</div>
        <div class="label label-after">After &rarr;</div>

        <div class="slider-line"></div>
        <div class="slider-button"></div>
        
       
        
    </div>

    <!-- JavaScript code -->
  <script>
    const sliderContainer = document.querySelector('.comparison-slider');

    // Jab mouse move ho tab slider chalega
    sliderContainer.addEventListener('mousemove', (e) => {
        // Container ki width aur mouse ki position calculate karna
        const rect = sliderContainer.getBoundingClientRect();
        let position = ((e.clientX - rect.left) / rect.width) * 100;

        // Position 0 se kam ya 100 se zyada na ho
        if(position < 0) position = 0;
        if(position > 100) position = 100;

        sliderContainer.style.setProperty('--position', `${position}%`);
    });

    // Mobile/Touch screens ke liye bhi support
    sliderContainer.addEventListener('touchmove', (e) => {
        const rect = sliderContainer.getBoundingClientRect();
        let position = ((e.touches[0].clientX - rect.left) / rect.width) * 100;

        if(position < 0) position = 0;
        if(position > 100) position = 100;

        sliderContainer.style.setProperty('--position', `${position}%`);
    }, { passive: true });
</script>

</body>
</html>