<button class="btn btn-primary syrulli_ai rounded-circle btn-syrulli-ai" title="Use AI" type="button" data-bs-toggle="offcanvas" data-bs-target="#syrulli_ai" aria-controls="staticBackdrop">
    <i class="fa-solid fa-robot"></i>
</button>
<div class="offcanvas offcanvas-end" tabindex="-1" id="syrulli_ai" aria-labelledby="staticBackdropLabel" style="border-top-left-radius: 15px !important; border-bottom-left-radius: 15px !important;">
    <div class="offcanvas-body">
        <div>
            <p class="text-start mt-2" style="font-size: smaller !important;">
                <small>
                    <span class="display-2 fw-bold" style="font-size: clamp(2rem, 5vw, 3rem);">Syrulli</span>
                    is an AI designed to revolutionize dental care by identifying specific common dental issues.
                    Whether you're catching problems early or ensuring your dental health is on track, Syrulli provides quick and reliable assessments to help you stay informed and proactive about your oral health.
                </small>
            </p>
        </div>
        <div class="card mt-2" style="border: none !important;">
            <div class="card-body shadow p-3 mb-5 bg-body-white rounded">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <img src="img/robot.gif" id="hideGif" style="width: 50%;">
                        <img id="uploadedImage" src="#" alt="Uploaded Image" class="img-fluid d-none" />
                    </div>
                    <p class="mt-3" style="font-size: smaller;"><small id="label-container"></small></p>
                </div>

                <div class="input-group flex-nowrap">
                    <input type="file" id="imageUpload" accept="image/*" onchange="handleImageUpload(event)" class="form-control form-control-sm" placeholder="Upload Teeth Image" aria-label="Upload Teeth Image" aria-describedby="addon-wrapping">
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="button" id="detectButton" class="btn btn-primary btn-sm mt-3" onclick="predict()" disabled><small>Detect <i class="fa-solid fa-expand"></i></small></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer" style="background-color: #F8D7DA; border-left: 0.25rem solid #FA4245; border-bottom-left-radius: 15px !important;">
        <p style="font-size: smaller !important;" class="text-center pt-3"><i class="fa-solid fa-circle-exclamation" style="color: red !important;"></i><small> It's important to remember that <span>syrulli</span> can make a mistake. Consult with your dentist for a thorough evaluation.</small></p>
    </div>
</div>
<footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <p class="mb-0"><span style="font-weight: bold; font-size: 20pt;">KV Dental Clinic</span><br> <small> 2024 Policies and Disclaimer.</small><br><small>Lot 26 Blk 69 4th Flr Campeon Commercial Leasing Bayani Rd. AFPOVAI , Western Bicutan Taguig</small> <br><small>Tel No: 0917 7145226</small> </p>
                </div>
                <div class="col-auto me-lg-4">
                    <p class="mb-0 mt-3"><span style="font-weight: bold; font-size: 15pt;">Let's Connect</span></p>
                    <a class="social-icons" href="https://www.facebook.com/profile.php?id=100083638991034"><i class="fa-brands fa-facebook"></i></a>
                    <a class="social-icons" href="#"> <i class="fa-brands fa-instagram"></i></a>
                    <a class="social-icons" href="#"><i class="fa-brands fa-viber"></i></a>
                    <a class="social-icons" href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="admin/lib/js/minified.js" crossorigin="anonymous"></script>
<script src="admin/lib/js/function.js"></script>
<script src="admin/lib/js/closed_clinic.js"></script>
<script src="admin/lib/js/tf.min.js"></script>
<script src="admin/lib/js/teachablemachine-image.min.js"></script>

<script type="text/javascript">
    const URL = "./model/";
    let model, labelContainer, maxPredictions;
    let uploadedImage = null;

    async function init() {
        try {
            const modelURL = URL + "model.json";
            const metadataURL = URL + "metadata.json";

            model = await tmImage.load(modelURL, metadataURL);
            maxPredictions = model.getTotalClasses();

            labelContainer = document.getElementById("label-container");
            for (let i = 0; i < maxPredictions; i++) {
                labelContainer.appendChild(document.createElement("div"));
            }
        } catch (error) {
            alertify.error('Error loading the model', error);
        }
    }

    function handleImageUpload(event) {
        const file = event.target.files[0];
        const hideGif = document.getElementById('hideGif');
        const uploadedImageElement = document.getElementById('uploadedImage');
        const detectButton = document.getElementById('detectButton');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = new Image();
                img.src = e.target.result;
                img.onload = function() {
                    uploadedImage = img;

                    uploadedImageElement.src = e.target.result;
                    uploadedImageElement.style.display = "block";
                    detectButton.disabled = false;
                };
            };
            reader.readAsDataURL(file);
        } else {
            uploadedImageElement.src = "#";
            uploadedImageElement.classList.add('d-none');
            hideGif.style.display = "block";
            detectButton.disabled = true;
            uploadedImage = null;
        }
    }

    async function predict() {
        if (!uploadedImage) {
            alertify.error('Please upload an image first.');
            return;
        }
        if (!model) {
            alertify.error('Model is not loaded. Please wait.');
            return;
        }

        const uploadedImageElement = document.getElementById('uploadedImage');
        const hideGif = document.getElementById('hideGif');
        const detectButton = document.getElementById('detectButton');
        const appointmentDateInput = document.getElementById('appointment_date');

        function triggerDateChange() {
            const appointmentDateInput = document.getElementById('appointment_date');
            if (appointmentDateInput.value) {
                const event = new Event('change');
                appointmentDateInput.dispatchEvent(event);
            }
        }

        try {
            hideGif.style.display = "block";
            uploadedImageElement.classList.add('d-none');
            detectButton.disabled = true;

            const prediction = await model.predict(uploadedImage);

            const thresholdProbability = 0.5; 

            let highestPrediction = prediction[0];
            for (let i = 1; i < prediction.length; i++) {
                if (prediction[i].probability > highestPrediction.probability) {
                    highestPrediction = prediction[i];
                }
            }

            labelContainer.innerHTML = '';

            let paragraphText = '';
            let recommendationsText = '';
            let serviceText = '';

            if (highestPrediction.probability < thresholdProbability) {
                paragraphText = "I can't identify the image you uploaded. Please try again with a clearer image of your teeth.";
            } else {
                let daysToAdd = 0;

                if (highestPrediction.className === "Healthy Teeth") {
                    paragraphText = "Your teeth seem to be in excellent condition! I carefully examined your tooth image and discovered no evidence of discoloration, malocclusion, or decay. This indicates how well your dental hygiene regimen is working. To keep this healthy smile intact, keep up the good work and your successful oral hygiene routine!";
                } else if (highestPrediction.className === "Severe Tooth Decay (Cavities)") {
                    daysToAdd = 1;
                    paragraphText = "I noticed you have a Severe Tooth Decay (Cavities) It's important to see your dentist for further evaluation and treatment. If left untreated, tooth decay can progress rapidly. Within the first 1-2 months, the decay can penetrate deeper into the enamel, leading to increased sensitivity and discomfort. By 3-4 months, the decay may reach the dentin, causing more significant pain and possibly forming cavities. In 5-6 months, the decay could reach the pulp of the tooth, leading to severe pain, infection, and the potential need for root canal treatment or even tooth extraction. Early intervention is crucial to prevent these complications and preserve your dental health. To treat the decay and protect your oral health, please make an appointment as soon as possible.";
                    recommendationsText = "Urgent Care Appointment: If the decay is causing significant pain or signs of infection, see a dentist within 24-48 hours.";
                    serviceText = "KV Dental Clinic offers treatments for severe tooth decay, including root canals, crowns, or extractions, based on your condition. Our team ensures you receive the best care for your dental health.";

                } else if (highestPrediction.className === "Mild Tooth Decayed (Cavities)") {
                    daysToAdd = 7;
                    paragraphText = "There appears to be some mild tooth decay, which, if left untreated, can progress over time. Within a few months, the enamel may continue to deteriorate, leading to more noticeable discoloration and the development of small cavities. If the decay is not addressed within 3-4 months, it could advance to affect the dentin, potentially causing increased sensitivity and discomfort.";
                    recommendationsText = "Make an appointment: within this week to prevent worsening. Brush twice a day with fluoride toothpaste and avoid sugary foods.";
                    serviceText = "For mild tooth decay, a fluoride treatment is essential. It helps to remineralize the enamel and prevent further progression.";

                } else if (highestPrediction.className === "Gingivitis") {
                    daysToAdd = 7; 
                    paragraphText = "Your gums seem to have some gingivitis if left untreated, can lead to more severe periodontal issues over time. Within the first month, you might notice increased redness, swelling, and bleeding of the gums, especially during brushing or flossing. If not addressed, gingivitis can progress, leading to more pronounced symptoms such as persistent bad breath and gum recession within 2 to 3 months. Over 6 months to a year, untreated gingivitis can develop into periodontitis, causing deeper gum infection, potential loss of tooth-supporting bone, and more serious oral health complications.";
                    recommendationsText = "Consult the Dentist: within this week if you feel symptoms like red, swollen, or bleeding gums, persistent bad breath, or tenderness while brushing or flossing, To manage gingivitis effectively, maintain excellent oral hygiene practices. Brush your teeth at least twice daily with a fluoride toothpaste and floss daily to remove plaque buildup wom between teeth and under the gumline. Use an antimicrobial mouthwash to help reduce plaque and bacteria. Regularly clean your toothbrush and replace it every 3 to 4 months.";
                    serviceText = "KV Dental Clinic offers a dental cleaning service to remove plaque and tartar, allowing your gums to heal and reducing the risk of further progression.";
                } else if (highestPrediction.className === "Malocclusion") {
                    daysToAdd = 30; 

                    paragraphText = "There appears to be some misalignment in your teeth. If left untreated,  Within a month, you might notice increased difficulty in biting or chewing, as well as discomfort or irregular wear on your teeth. If the condition persists untreated, it can exacerbate, potentially leading to uneven tooth wear, jaw pain, and difficulties with speech or dental hygiene. Over several months, untreated malocclusion can contribute to more severe problems, including temporomandibular joint (TMJ) disorders and accelerated tooth decay due to misaligned teeth making it harder to clean effectively.";
                    recommendationsText = "Make an appointment: you can consult the dentist with this month to see the condition of your malocclusion. To manage malocclusion, it's important to maintain good oral hygiene and avoid habits that could worsen the condition, such as teeth grinding or nail-biting. In addition to regular brushing and flossing, consider using a mouthguard if you grind your teeth at night. It is also beneficial to monitor any changes in bite or jaw alignment and address discomfort promptly.";
                    serviceText = "Visit KV Dental Clinic to evaluate your alignment and provide treatments such as braces or aligners to correct misalignment.";
                } else if (highestPrediction.className === "Discolored Teeth") {
                    daysToAdd = 15;

                    paragraphText = "Your teeth seem to have some discoloration, If discolored teeth are left untreated, the progression can vary based on the underlying cause. In 1 to 3 months, the discoloration may become more pronounced, especially if it is due to staining from foods, beverages, or smoking. If the discoloration is due to deeper issues like tooth decay or internal damage, it could become more severe and noticeable within 3 to 6 months. Over 6 to 12 months, untreated discoloration may lead to more significant aesthetic concerns, potentially affecting self-esteem and requiring more intensive treatments to address the underlying cause and improve the appearance of the teeth.";
                    recommendationsText = "Make an appointment: To address discolored teeth, start by practicing good oral hygiene. Brush your teeth twice a day with a whitening toothpaste to help remove surface stains, and floss daily to prevent plaque buildup. Avoid foods and beverages that can cause staining, such as coffee, tea, and red wine. Additionally, consider using an over-the-counter whitening product if the discoloration is superficial. For persistent or severe discoloration, professional whitening treatments or dental evaluations may be necessary to determine the underlying cause and appropriate solutions.";
                    serviceText = "KV Dental Clinic offers cleaning and polishing treatment to effectively remove deeper stains and enhance the brightness of your teeth.";
                } else if (highestPrediction.className === "Missing Teeth") {
                    daysToAdd = 7; 

                    paragraphText = "It looks like there are some missing teeth. If teeth are missing and not replaced or treated, the consequences can unfold over time. Within 1 to 3 months, surrounding teeth may begin to shift towards the gap, potentially leading to misalignment and bite issues. The loss of tooth structure can also affect chewing efficiency and impact overall oral health. Over the next 6 to 12 months, the bone in the jaw where the tooth was lost may start to deteriorate due to lack of stimulation, which can further complicate future restorative options. If the missing teeth are not addressed within 1 to 2 years, significant changes in bite alignment and bone loss can occur, making restorative treatments more complex and costly.";
                    recommendationsText = "Consult a dentist: To manage missing teeth, consider scheduling a consultation with a dentist to discuss replacement options. Dental implants, bridges, or dentures can restore function and aesthetics, preventing the shifting of adjacent teeth and maintaining proper bite alignment. Immediate attention to missing teeth is crucial to avoid complications such as bone loss and misalignment.";
                    serviceText = "KV Dental Clinic offers dental implants or bridge placement to restore function and prevent adjacent teeth from shifting.";
                }

                if (highestPrediction.className !== "Healthy Teeth" && highestPrediction.probability >= thresholdProbability) {
                    const today = new Date();
                    today.setDate(today.getDate() + daysToAdd);
                    const formattedDate = today.toISOString().split('T')[0];

                    recommendedDate = formattedDate;
                    document.getElementById('appointment_date').value = recommendedDate;
                    triggerDateChange();
                }
            }

            const paragraphElement = document.createElement("p");
            labelContainer.appendChild(paragraphElement);
            typeWriter(paragraphText, paragraphElement, () => {
                if (highestPrediction.className !== "Healthy Teeth" && highestPrediction.probability >= thresholdProbability) {
                    if (highestPrediction.className !== "I can't identify the image you uploaded.") {
                        const recommendationsHeader = document.createElement("b");
                        recommendationsHeader.textContent = "RECOMMENDATIONS";
                        labelContainer.appendChild(recommendationsHeader);

                        const recommendationsElement = document.createElement("p");
                        labelContainer.appendChild(recommendationsElement);
                        typeWriter(recommendationsText, recommendationsElement, () => {
                            const serviceHeader = document.createElement("b");
                            serviceHeader.textContent = "SERVICE";
                            labelContainer.appendChild(serviceHeader);

                            const serviceElement = document.createElement("p");
                            labelContainer.appendChild(serviceElement);
                            typeWriter(serviceText, serviceElement);
                        });
                    }
                }
            });

        } catch (error) {
            alertify.error('Error during prediction', error);
        } finally {
            uploadedImageElement.src = uploadedImage.src;
            uploadedImageElement.classList.remove('d-none');
            hideGif.style.display = "none";
            detectButton.disabled = false;
        }
    }

    function typeWriter(text, element, callback) {
        element.innerHTML = "";
        let i = 0;
        const speed = 20;

        function type() {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                setTimeout(type, speed);
            } else if (callback) {
                callback();
            }
        }
        type();
    }
    document.getElementById('syrulli_ai').addEventListener('shown.bs.offcanvas', init);
</script>

<script>
    alertify.set('notifier', 'position', 'bottom-right');
    <?php
    if (isset($_SESSION['message'])) {
    ?>
        alertify.success('<?= $_SESSION['message']; ?>');
    <?php
        unset($_SESSION['message']);
    }
    ?>
</script>

<script>
    AOS.init();
</script>

<!-- SCROLL REVEAL -->
<script>
    function checkScrollPosition() {
        var header = document.getElementById('header');
        if (window.scrollY > 50) {
            header.classList.add('scroll', 'navbar-collapse-open');
        } else {
            header.classList.remove('scroll', 'navbar-collapse-open');
        }
    }

    // Add passive: true to the scroll event listener
    window.addEventListener('scroll', checkScrollPosition, {
        passive: true
    });
    window.addEventListener('load', checkScrollPosition);

    var navbarCollapse = document.getElementById('navbarSupportedContent');
    var header = document.getElementById('header');

    navbarCollapse.addEventListener('show.bs.collapse', function() {
        header.classList.add('navbar-collapse-open');
    });

    navbarCollapse.addEventListener('hide.bs.collapse', function() {
        header.classList.remove('navbar-collapse-open');
    });
</script>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        <?php if (isset($_SESSION['message'])) : ?>
            alertify.success("<?php echo $_SESSION['message']; ?>");
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['error_message'])) : ?>
            alertify.error("<?php echo $_SESSION['error_message']; ?>");
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>
    });
</script>

</body>

</html>