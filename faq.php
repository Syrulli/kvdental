<?php
$title = "KV Dental Clinic";
include('functions/userfunction.php');
include('./includes/header.php');
?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="var(--first-color)" fill-opacity="1" d="M0,288L48,261.3C96,235,192,181,288,144C384,107,480,85,576,90.7C672,96,768,128,864,154.7C960,181,1056,203,1152,208C1248,213,1344,203,1392,197.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>
<section class="overlap_section" style="background-image: linear-gradient(rgba(10, 5, 1, 0.7) 0pc, rgb(41, 196, 169) 100pc); background-image: url('img/dummy_img_5.png') !important; background-repeat: no-repeat !important; background-attachment: fixed; background-position: center; background-size: cover;">
    <div class="container text-center">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-12 col-sm-12 text-left">
                <h1 id="text" class="typing-text" style="color: var(--text-color); font-size: 60px; font-size: clamp(2rem, 5vw, 5rem); border-right: 5px solid var(--text-color);"></h1>
                <p class="text-white">GENERAL DENTISTRY, ORAL & MAXILLOFACIAL SURGERY, <br> OCCUPATIONAL SAFETY & HEALTH DENTIST, ORTHODONTICS & COSMETIC DENTISTRY.</p>
                <a type="button" class="btn btn-primary btn-sm mb-2" href="appointment.php"><small>Book an appointment <i class="fa-regular fa-calendar-check"></i></small></a>
            </div>
        </div>
    </div>
</section>

<section style="background-color: var(--section);">
    <div class="container mb-5">
        <div class="row align-items-center mt-lg-5">
            <h2 class="text-center" style="color: var(--first-color);" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">FAQs</h2>
            <p class="text-center">Welcome to <span>KV Dental Clinic</span>, where we provide top-quality dental care and advanced services. Our goal is to ensure a seamless experience for our patients, from scheduling appointments to receiving personalized dental treatment. In addition to our comprehensive services, we offer a cutting-edge AI-powered tool that can identify common dental problems, helping you understand your oral health better before seeing the dentist. Below, you'll find answers to frequently asked questions about our appointment scheduling process, clinic policies, and more.</p>
            <div class="col-lg-12 col-sm-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include('./includes/footer.php'); ?>
<script>
    var i = 0;
    var texts = ["Frequently Asked Questions.", "Book an appointment."];

    function typeAndDelete() {
        var text = texts[i];
        var typingText = 0;
        var interval = setInterval(function() {
            if (typingText < text.length) {
                document.getElementById("text").innerHTML += text.charAt(typingText);
                typingText++;
            } else {
                clearInterval(interval);
                setTimeout(function() {
                    deleteText();
                }, 1000);
            }
        }, 100);
    }

    function deleteText() {
        var text = document.getElementById("text").innerHTML;
        var typingLength = text.length;
        var interval = setInterval(function() {
            if (typingLength >= 0) {
                var newText = text.substring(0, typingLength);
                document.getElementById("text").innerHTML = newText;
                typingLength--;
            } else {
                clearInterval(interval);
                i = (i + 1) % texts.length;
                typeAndDelete();
            }
        }, 50);
    }
    typeAndDelete();
</script>