<?php
    $title = "Services | KV Dental Clinic";
    include('functions/userfunction.php');
    include('./includes/header.php');
?>

<section style="background-image: linear-gradient(rgba(10, 5, 1, 0.7) 0pc, rgb(41, 196, 169) 100pc); background-image: url('img/dummy_img_5.png') !important; background-repeat: no-repeat !important; background-attachment: fixed; background-position: center; background-size: cover;">
    <div class="container home-container1-content">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-12 col-sm-12 text-left">
                <h1 id="text" class="typing-text" style="color: var(--text-color); font-size: 60px; font-size: clamp(2rem, 5vw, 5rem); border-right: 5px solid var(--text-color);"></h1>
                <p class="text-white">GENERAL DENTISTRY, ORAL & MAXILLOFACIAL SURGERY, <br> OCCUPATIONAL SAFETY & HEALTH DENTIST, ORTHODONTICS & COSMETIC DENTISTRY.</p>
                <a type="button" class="btn btn-primary btn-sm mb-2" href="appointment.php"><small>Book an appointment <i class="fa-regular fa-calendar-check"></i></small></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-sm-12">
                <h4 style="color: var(--first-color);" class="mt-5">Preventive Dentistry <small></small> <i class="fa-solid fa-tooth fa-xs"></i></h4>
                <p>The objective is to spot such abnormalities early and take <span>preventative</span> action to steer clear of more significant tooth problems down the road. With this method,
                    people can keep their teeth and gums in good condition for the rest of their lives.
                </p>
                <ul style="font-size: small;">
                    <li>Cleaning & polishing</li>
                    <li>Deep scaling</li>
                    <li>Fluoride treatment</li>
                    <li>Pit & fissure sealant</li>
                </ul>
                <h4 style="color: var(--first-color);" class="mt-4">Restorative Dentistry <i class="fa-solid fa-tooth fa-xs"></i></h4>
                <p>In order to restore the function and appearance of damaged or missing teeth, restorative dentistry entails repairing or replacing those teeth. The goals of restorative dentistry are to strengthen dental health, bring back the ability to eat and talk normally, and improve the smile's overall appearance.</p>
                <ul style="font-size: small;">
                    <li>Tooth filling (pasta)</li>
                    <li>Dentures (Removable and Fixed)</li>
                    <li>Crowns and bridges</li>
                    <li>Dental Implants</li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-12">
                <img src="img/dummy_img_6.png" style="width: 500px;" loading="lazy" class="img_services">
            </div>
        </div>
    </div>
</section>

<section style="background-color: var(--section);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img src="img/dummy_img_7.png" style="width: 520px;" loading="lazy" class="img_services">
            </div>
            <div class="col-lg-6 col-sm-12">
                <h4 style="color: var(--first-color);">Orthodontics <i class="fa-solid fa-tooth fa-xs"></i></h4>
                <p>In order to improve oral health and appearance, the specialty area of dentistry known as orthodontics focuses on straightening out mismatched teeth and jaws.</p>
                <ul style="font-size: small;">

                    <li>Orthodontic braces</li>
                    <li>Clear aligners</li>
                </ul>
                <h4 style="color: var(--first-color);" class="mt-4">Surgical Dentistry <i class="fa-solid fa-tooth fa-xs"></i></h4>
                <p>Surgical dentistry is the practice of performing dental operations that call for surgery in order to identify, address, or resolve certain oral health problems.</p>
                <ul style="font-size: small;">
                    <li>Oral Surgery</li>
                </ul>
                <h4 style="color: var(--first-color);" class="mt-3">Cosmetic Dentistry <i class="fa-solid fa-tooth fa-xs"></i></h4>
                <p>The goal of cosmetic dentistry is to make the teeth, gums, and smile seem better. It involves operations meant to improve the smile's appearance as opposed to only fixing its functional problems.</p>
                <ul style="font-size: small;" class="pb-5">
                    <li>Veneers</li>
                    <li>Laminates</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php include('./includes/footer.php'); ?>
<script>
    var i = 0;
    var texts = ["Our Treatment offered.", "Book an appointment."];

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