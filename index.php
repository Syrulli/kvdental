<?php
    $title = "KV Dental Clinic";
    include('functions/userfunction.php');
    include('./includes/header.php');
?>

<section style="background-image: url('img/dummy_img_3.png') !important; background-repeat: no-repeat !important; background-attachment: fixed; background-position: center; background-size: cover;" loading="lazy">
    <div class="container home-container1-content">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-12 col-sm-12 text-start mt-sm-5">
                <h3 id="text" class="typing-text" style="color: var(--text-color); font-size: 60px; font-size: clamp(2rem, 5vw, 5rem); border-right: 2px solid white;"></h3>
                <p class="text-white">Step into our dental sanctuary, where every smile finds its brightest sparkle, <br> and let us illuminate your journey to lasting oral health and confidence.</p>
                <a type="button" class="btn btn-primary" href="appointment.php"><small>Book an appointment <i class="fa-regular fa-calendar-check"></i></small></a>
            </div>
        </div>
    </div>
</section>

<section class="overlap-main overlap-main-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-center">
                <h4><small><b>Trusted Services</b></small></h4>
                <p><small>Entrust your smile to professional</small></p>
            </div>
            <div class="col-lg-4 text-center">
                <h4><small><b>35+ Recovered Patients</b></small></h4>
                <p><small>Every tooth in a man's head is more valuable than a diamond.</small></p>
            </div>
            <div class="col-lg-4 text-center">
                <h4><small><b>40+ Online Appointments</b></small></h4>
                <p><small>Stay fresh & fabulous with effortless online appointment.</small></p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pb-lg-5 mb-4 mt-sm-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12">
                <img src="img/dummy_img_2.png" style="width: 520px; border-radius: 5px; border-top-left-radius: 15% !important; border-bottom-right-radius: 15% !important;" class="all_responsive_img" loading="lazy">
            </div>
            <div class="col-lg-6 col-sm-12">
                <h2 style="color: var(--first-color);" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">Why Choose KV Dental Clinic</h2>
                <p>Our dentist are multi-specialists who can handle all of your dental issues while guaranteeing that you will receive the best possible care and security.</p>
                <p><small><i class="fa-solid fa-check"></i> Top quality dental clinic in taguig city.</small></p>
                <p><small><i class="fa-solid fa-check"></i> State of the art dental services.</small></p>
                <p><small><i class="fa-solid fa-check"></i> Easy and effortless online appointment.</small></p>
                <p><small><i class="fa-solid fa-check"></i> Top dental implant service.</small></p>
                <p><small><i class="fa-solid fa-check"></i> Committed to provide the best smile you’ve ever wanted.</small></p>
                <a type="button" href="#" class="btn btn-primary btn-sm"><small>About us <i class="fa-solid fa-circle-info"></i></small></a>
            </div>
        </div>
    </div>
</section>

<section style="background-color: var(--section);">
    <h2 class="text-center mt-4" style="color: var(--first-color);" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">Our Services</h2>
    <p class="text-center">We use only the best <span>quality</span> materials on the market in order to provide best products to our patients.</p>
    <div class="container text-center">
        <div class="row" style="margin-top: 5%; display: flex; justify-content: space-between;">
            <div class="services-col">
                <img src="img/icons/dummy_icon_1.png" style="width: 60px;" loading="lazy">
                <h5><small><b>Dental Implant</b></small></h5>
                <p>Dental implants are medical devices surgically implanted into the jaw to restore a person's ability to chew or their appearance.</p>
            </div>
            <div class="services-col">
                <img src="img/icons/dummy_icon_2.png" style="width: 60px;">
                <h5><small><b>Checkup & Cleaning</b></small></h5>
                <p>During a cleaning, your dentist or dental hygienist scrapes plaque and tartar from your teeth.</p>
            </div>
            <div class="services-col">
                <img src="img/icons/dummy_icon_3.png" style="width: 60px;">
                <h5><small><b>Root Canal Treatment</b></small></h5>
                <p>Root canal is a treatment to repair and save a badly damaged or infected tooth instead of removing it. The term "root canal" comes from cleaning of the canals inside a tooth's root.</p>
            </div>
        </div>
        <div class="row" style="display: flex; justify-content: space-between;">
            <div class="services-col">
                <img src="img/icons/dummy_icon_4.png" style="width: 60px;" loading="lazy">
                <h5><small><b>Veneers / Laminates</b></small></h5>
                <p>A veneer is a layer of material placed over a tooth. Veneers can improve the aesthetics and function of a smile and protect the tooth's surface from damage.</p>
            </div>
            <div class="services-col">
                <img src="img/icons/dummy_icon_5.png" style="width: 60px;" loading="lazy">
                <h5><small><b>Tooth filling</b></small></h5>
                <p>A filling is used to treat a small hole, or cavity, in a tooth. To repair a cavity, a dentist removes the decayed tooth tissue and then fills the space with a filling material.</p>
            </div>
            <div class="services-col">
                <img src="img/icons/dummy_icon_6.png" style="width: 60px;" loading="lazy">
                <h5><small><b>Orthodontic braces</b></small></h5>
                <p>Dental braces are devices used in orthodontics that align and straighten teeth and help position them with regard to a person's bite, while also aiming to improve dental health</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mt-4 mb-lg-4 pt-lg-3 text-center">
        <h2 style="color: var(--first-color);" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">What's New?</h2>
        <p>Stay Informed: Latest News & Updates from Our Dental Clinic!</p>
    </div>
    <div class="container mb-lg-5 pt-lg-3">
        <div class="main-carousel" data-flickity='{ "freeScroll": true }'>
            <?php
                $blog = getAllBlogActive("tbl_blog");
                if (mysqli_num_rows($blog) > 0) {
                    foreach ($blog as $data) {
                ?>
                        <div class="carousel-cell">
                            <div class="card" style="width: 95%; height: 30em;">
                                <img class="card-img-top" src="uploaded/<?= $data['image']; ?>" alt="News & Blog Image" style="width: 100%; height: 200px;" loading="lazy">
                                <div class="card-header" style="border: none;">
                                    <h5 class="card-title"><b><?= $data['title']; ?></b></h5>
                                    <small><span><i class="fa-solid fa-blog"></i></span> Blog post</small>
                                </div>
                                <div class="card-body" style="border: none;">
                                    <p class="card-text"><small style="font-size: smaller !important;"><?= $data['description']; ?></small></p>
                                </div>
                                <div class="card-footer" style="border: none;">
                                    <a href="<?= $data['links']; ?>"><small>View more <i class="fa-solid fa-arrow-right"></i></small></a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No data available";
                }
            ?>
        </div>
    </div>
</section>

<section style="background-image: url('img/dummy_img_4.png') !important; background-repeat: no-repeat !important; background-attachment: fixed; background-position: center; background-size: cover;" loading="lazy">
    <!-- filter: drop-shadow( -10px -10px 10px rgba(0, 0, 255, 0.5)); -->
    <div class="container">
        <div class="row mb-5 mt-lg-5">
            <div class="col-12 text-center">
                <h2 class="mt-5 text-primary" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">Safety for you is our top concern.</h2>
                <figure class="text-center text-white mt-4">
                    <blockquote class="blockquote">
                        <p><small>Your safety is the most important thing to us at our dental office. To guarantee the greatest levels of care, we employ cutting-edge technology and modern sterilization. We want you to feel heard and valued, so come as often as possible to enjoy a secure and comfortable experience.</small></p>
                    </blockquote>
                    <figcaption class="blockquote-footer text-white">
                      <small>Dr. Kathleen</small> 
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="position-relative">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top: 0; left: 0; z-index: -1; width: 100%; height: auto;">
        <path fill="var(--section)" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,192C384,171,480,85,576,90.7C672,96,768,192,864,229.3C960,267,1056,245,1152,224C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-12 mt-5">
                <h2 style="color: var(--first-color);" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">What our patients are saying</h2>
                <p>See what satisfied patients have to say about the dental services we <span>offer</span> at KV Dental Clinic.</p>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="carousel_feedback" data-flickity='{ "freeScroll": true }'>
                    <?php
                        $patientFeedbacks = getPatientFeedback("tbl_feedback");
                        if (mysqli_num_rows($patientFeedbacks) > 0) {
                            foreach ($patientFeedbacks as $data) {
                                $rating = intval($data['rate']);
                                if ($rating > 2) {
                                    ?>
                                        <div class="carousel-cell">
                                            <div class="card" style="width: 95%; height: 25em;">
                                                <div class="card-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                                    <h6 class="card-title"><b><?= $data['name']; ?></b></h6>
                                                </div>
                                                <div class="card-body" style="border: none;">
                                                    <p class="card-text"><i>"<small style="font-size: smaller !important;"><?= $data['message']; ?></small>"</i></p>
                                                </div>
                                                <div class="text-primary text-center mb-5 rating">
                                                    <?php
                                                    for ($i = 0; $i < $rating; $i++) {
                                                        echo '<span class="fa fa-star"></span>';
                                                    }
                                                    for ($i = $rating; $i < 5; $i++) {
                                                        echo '<span class="fa-regular fa-star"></span>';
                                                    }
                                                    ?>
                                                    <p class="text-center text-muted"><small>Recommends KV Dental Clinic</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                }
                            }
                        } else {
                            echo "No data available";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding-bottom: 50px; background-color: var(--section);">
    <div class="container">
        <div class="row align-items-center">
            <div class="row text-center mt-5 mb-3">
                <h1 style="color:var(--first-color);" class="pb-lg-0 mb-lg-0" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">Feedback</h1>
                <p>Guest or patients rating <span>&</span> reviews</p>
            </div>
            <div class="col-lg-6" style="filter: grayscale(100%) invert(10%);">
                <iframe class="location-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15449.264382705356!2d121.04101302924295!3d14.52390322431441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9c7347ef727%3A0x4500c5215593e3de!2sKV%20Dental%20Clinic!5e0!3m2!1sen!2sph!4v1708760697895!5m2!1sen!2sph" width="600" height="450" style="border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 offset-lg-1 mt-4">
                <form id="feedback_form">
                    <div class="mb-4">
                        <input type="text" name="name" class="form-control" autocomplete="given-name" placeholder="Your complete name *" required>
                    </div>
                    <div class="mb-4">
                        <input type="email" name="email" class="form-control" autocomplete="email" placeholder="Your email *" required>
                    </div>
                    <div class="mb-4">
                        <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Message *" spellcheck="true" required></textarea>
                    </div>
                    <p style="padding: 0 0px !important; margin: 0 0px !important;">Rate <span>KV Dental Clinic</span> now!</p>
                    <div class="form-check form-check-inline rate mb-4">
                        <input class="form-check-input" type="radio" name="rate" id="star5" value="5">
                        <label class="form-check-label" for="star5" title="5 Stars">5</label>

                        <input class="form-check-input" type="radio" name="rate" id="star4" value="4">
                        <label class="form-check-label" for="star4" title="4 Stars">4</label>

                        <input class="form-check-input" type="radio" name="rate" id="star3" value="3">
                        <label class="form-check-label" for="star3" title="3 Stars">3</label>

                        <input class="form-check-input" type="radio" name="rate" id="star2" value="2">
                        <label class="form-check-label" for="star2" title="2 Stars">2</label>

                        <input class="form-check-input" type="radio" name="rate" id="star1" value="1">
                        <label class="form-check-label" for="star1" title="1 Star">1</label>
                    </div>
                    <br>
                    <div class="mb-4 d-flex justify-content-start align-items-start">
                        <button type="submit" class="btn btn-primary btn-sm">Submit <i class="fa-regular fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    var i = 0;
    var texts = ["Welcome to JC Dental", "Smile Confidentaly.", "Book an appointment."];

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
<?php include('./includes/footer.php'); ?>
<script>
    var flktyOptionsWhatsNew = {
        freeScroll: true,
        prevNextButtons: true,
        pageDots: true,
        adaptiveHeight: true
    };

    var flktyOptionsFeedback = {
        freeScroll: true,
        contain: false,
        prevNextButtons: false,
        pageDots: false,
        adaptiveHeight: true,
        groupCells: true
    };
    var flktyMain = new Flickity('.main-carousel', flktyOptionsWhatsNew);
    var flktyFeedback = new Flickity('.carousel_feedback', flktyOptionsFeedback);
</script>