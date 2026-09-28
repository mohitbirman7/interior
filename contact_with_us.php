
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
/* ===== CONTACT + FAQ ===== */
.contact-faq-section{
    padding:65px 15px;
    background:#fff;
    position:relative;
    overflow:hidden;
}

.contact-faq-section:before{
    content:"";
    position:absolute;
    width:380px;
    height:380px;
    right:-180px;
    bottom:-180px;
    background:rgba(13,107,104,.07);
    border-radius:50%;
}

.contact-wrap{
    max-width:1150px;
    margin:auto;
    position:relative;
    z-index:1;
}

/* Heading */
.contact-heading{
    text-align:center;
    margin-bottom:35px;
}

.contact-heading span{
    color:#0D6B68;
    font-size:13px;
    font-weight:700;
    letter-spacing:2px;
}

.contact-heading h2{
    color:#29343b;
    font-size:38px;
    font-weight:700;
    margin:5px 0 0;
}

.contact-heading h2 b{
    color:#0D6B68;
}

/* Form Card */
.contact-card{
    background:#fff;
    border:1px solid #e4eceb;
    border-radius:12px;
    padding:28px;
    box-shadow:0 10px 35px rgba(0,0,0,.07);
    height:100%;
    position:relative;
    overflow:hidden;
}

.contact-card:before{
    content:"";
    position:absolute;
    width:70px;
    height:70px;
    background:#0D6B68;
    border-radius:50%;
    right:-35px;
    top:-35px;
    opacity:.08;
}

.card-title{
    color:#29343b;
    font-size:22px;
    font-weight:700;
    margin-bottom:20px;
}

.card-title i{
    color:#0D6B68;
    margin-right:8px;
}

.form-control{
    background:#E6F0EF;
    border:1px solid #d9e5e3;
    border-radius:7px;
    padding:12px 14px;
    font-size:14px;
    box-shadow:none!important;
}

.form-control:focus{
    border-color:#0D6B68;
    background:#fff;
}

textarea.form-control{
    min-height:105px;
    resize:none;
}

.submit-btn{
    border:0;
    background:#0D6B68;
    color:#fff;
    padding:12px 25px;
    border-radius:6px;
    font-size:14px;
    font-weight:600;
    transition:.3s;
}

.submit-btn:hover{
    background:#094f4d;
    transform:translateY(-2px);
    box-shadow:0 7px 18px rgba(13,107,104,.25);
}

/* FAQ */
.faq-title{
    color:#29343b;
    font-size:22px;
    font-weight:700;
    margin-bottom:15px;
}

.faq-title i{
    color:#0D6B68;
    margin-right:8px;
}

.faq-item{
    background:#E6F0EF;
    border-radius:8px;
    margin-bottom:9px;
    overflow:hidden;
    border:1px solid transparent;
    transition:.3s;
}

.faq-item:hover{
    border-color:#0D6B68;
}

.faq-question{
    display:flex;
    align-items:center;
    gap:12px;
    padding:14px 15px;
    cursor:pointer;
    color:#29343b;
    font-size:15px;
    font-weight:600;
}

.faq-icon{
    min-width:30px;
    height:30px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#0D6B68;
    color:#fff;
    border-radius:5px;
    font-size:12px;
    transition:.3s;
}

.faq-answer{
    max-height:0;
    overflow:hidden;
    padding:0 18px 0 57px;
    color:#666;
    font-size:14px;
    line-height:1.6;
    transition:.35s ease;
}

.faq-item.active{
    background:#f4f9f8;
    border-color:#d4e5e3;
}

.faq-item.active .faq-answer{
    max-height:150px;
    padding-bottom:15px;
}

.faq-item.active .faq-icon{
    transform:rotate(90deg);
}

/* Responsive */
@media(max-width:767px){
    .contact-faq-section{
        padding:45px 12px;
    }

    .contact-heading h2{
        font-size:30px;
    }

    .contact-card{
        padding:20px;
    }

    .faq-question{
        font-size:14px;
        padding:12px;
    }

    .faq-answer{
        padding-left:54px;
    }
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
            <div class="contact-card">

                <div class="card-title">
                    <i class="fa-solid fa-paper-plane"></i>
                    Get In Touch
                </div>

                <form action="#" method="POST">

                    <div class="mb-3">
                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Your Name"
                               required>
                    </div>

                    <div class="mb-3">
                        <input type="tel"
                               name="phone"
                               class="form-control"
                               placeholder="Phone Number"
                               pattern="[0-9]{10}"
                               maxlength="10"
                               minlength="10"
                               oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                               required>
                    </div>

                    <div class="mb-3">
                        <input type="email"
                               name="email"
                               class="form-control"
                               placeholder="Your Email"
                               required>
                    </div>

                    <div class="mb-3">
                        <textarea name="message"
                                  class="form-control"
                                  placeholder="Tell us about your requirement..."
                                  required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        Send Message
                        <i class="fa-solid fa-arrow-right ms-2"></i>
                    </button>

                </form>
            </div>
        </div>


        <!-- ===== FAQ ===== -->
        <div class="col-lg-7">

            <div class="faq-title">
                <i class="fa-solid fa-circle-question"></i>
                Frequently Asked Questions
            </div>

            <!-- FAQ 1 -->
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

            <!-- FAQ 2 -->
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

            <!-- FAQ 3 -->
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

            <!-- FAQ 4 -->
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

            <!-- FAQ 5 -->
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

            <!-- FAQ 6 -->
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

            <!-- FAQ 7 -->
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


<!-- ================= FAQ JS ================= -->
<script>
document.querySelectorAll(".faq-question").forEach(function(question){

    question.addEventListener("click",function(){

        const item = this.parentElement;

        document.querySelectorAll(".faq-item").forEach(function(other){

            if(other !== item){
                other.classList.remove("active");
                other.querySelector(".faq-icon i").className =
                    "fa-solid fa-plus";
            }

        });

        item.classList.toggle("active");

        const icon = item.querySelector(".faq-icon i");

        icon.className = item.classList.contains("active")
            ? "fa-solid fa-minus"
            : "fa-solid fa-plus";

    });

});
</script>
