<?php
$swiperImages=HOHE_SWIPER_IAMGE;
$service_images=SERVICE_IMAGE;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon-32x32.png') ?>">
    <title>Panaceamedicare | Home </title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

    <style>
    .menu-hidden {
        display: none;
    }


    #top-button {
        display: none;
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        background-color: rgb(123, 5, 106);
        border-radius: 60%;
        padding: 0.1rem 0.5rem;
        font-size: 1.5rem;
        color: white;
        cursor: pointer;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        z-index: 999;
    }

    #whatsapp-button {
        position: fixed;
        bottom: 20px;
        left: 20px;
        background-color: #25D366;
        color: white;
        padding: 12px 15px;
        border-radius: 50%;
        font-size: 22px;
        cursor: pointer;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    }

    .custom-swiper-button {
        @apply absolute top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 p-4 rounded-full;
        @apply text-white text-lg flex items-center justify-center cursor-pointer;
        @apply transition duration-300 ease-in-out hover: bg-gray-900;
        width: 45px;
        height: 45px;
        z-index: 10;
    }

    .swiper-button-prev {
        @apply left-4;
    }

    .swiper-button-next {
        @apply right-4;
    }

    .swiper-button-prev::after,
    .swiper-button-next::after {
        font-size: 20px;
        font-weight: bold;
        color: rgba(72, 69, 69, 0.2);
    }

    @media screen {}
    </style>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50 ">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600 "><img
                    src="<?php echo base_url('assets/images/logo.png') ?>" alt="logo" srcset=""
                    class="w-[120px] h-[40px] sm:w-[150px] sm:h-[50px] md:w-[180px] md:h-[60px] lg:w-[200px] lg:h-[70px] object-contain"></a>
            <button class="md:hidden text-gray-600 focus:outline-none" id="menu-toggle">☰</button>
            <ul class="hidden md:flex space-x-6" id="menu">
                <li><a href="#home" class="text-gray-600 font-medium hover:text-blue-600 ">Home</a></li>
                <li><a href="#about" class="text-gray-600 font-medium hover:text-blue-600">About</a></li>
                <li><a href="#services" class="text-gray-600 font-medium hover:text-blue-600">Services</a></li>
                <li><a href="#contact" class="text-gray-600  font-medium hover:text-blue-600">Contact</a></li>
            </ul>
        </div>
        <div class="md:hidden bg-white p-4 menu-hidden" id="mobile-menu">
            <a href="#home" class="block py-2 text-gray-600 hover:text-blue-600">Home</a>
            <a href="#about" class="block py-2 text-gray-600 hover:text-blue-600">About</a>
            <a href="#services" class="block py-2 text-gray-600 hover:text-blue-600">Services</a>
            <a href="#contact" class="block py-2 text-gray-600 hover:text-blue-600">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="mt-24">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper ">
                <?php if(!empty($swiperImages)){ 
                foreach($swiperImages as $image){
                ?>
                <div class="swiper-slide ">
                    <img src="<?php echo base_url("$image");?>"
                        class="w-full h-[250px] sm:h-[280px] md:h-[320px] lg:h-[380px] xl:h-[520px] object-fill">
                </div>
                <?php } }?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services" class="w-full mx-auto px-4 py-16 bg-gray-200">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Services</h2>
        <div class="container w-[80%] mx-auto">
            <div class="flex flex-wrap justify-center gap-6">
                <?php if(!empty($service_images) ) {
                foreach($service_images as $image){     
            ?>

                <div class="flex flex-col items-center text-center w-full max-w-xs p-4 bg-inherit">
                    <a href="#">
                        <img src="<?= base_url($image['image'])?>" alt="Service Icon"
                            class="w-full h-auto object-cover rounded-lg">
                    </a>
                    <h3 class="mt-4 text-lg font-semibold text-gray-800"><?=$image['name'] ?></h3>
                </div>


                <?php } } ?>

            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section id="our-team" class="w-full mx-auto px-4 py-16 bg-white">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Team</h2>
        <div class="swiper ourTeamSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex flex-col md:flex-row items-center gap-6 ">
                    <div class="left w-full md:w-1/2 flex justify-center">
                        <img src="<?=base_url("assets/images/doctor_image/doctor_image_1.jpg")?>" alt="Team Member"
                            class="w-full md:w-3/4 rounded-lg shadow-lg h-[250px] sm:h-[280px] md:h-[320px] lg:h-[380px] xl:h-[520px] object-fill">
                    </div>
                    <div class="right w-full md:w-1/2 flex flex-col items-start p-4 text-center md:text-left">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. In omnis aspernatur totam ipsum
                            ratione libero placeat tempore nihil, sed amet distinctio, deserunt itaque soluta voluptatem
                            repellat explicabo tenetur. Sapiente, ratione?
                            Culpa distinctio mollitia numquam est veniam ex et ea amet alias dolore unde eum placeat
                            molestias magni id, laborum vitae non recusandae, ut provident. Minima obcaecati assumenda
                            tenetur consequuntur odit?
                            Molestias voluptates ad maiores corporis error beatae, accusantium impedit maxime illum
                            cupiditate modi, repellendus eveniet officiis incidunt ullam ut. Rerum explicabo vero fugit
                            non dolores? Blanditiis repellat inventore exercitationem facilis?
                            Sed maiores aspernatur perferendis porro accusantium voluptatum id ipsum impedit odit nemo,

                        </p>
                    </div>

                </div>
                <div class="swiper-slide flex flex-col md:flex-row items-center gap-6 ">
                    <div class="left w-full md:w-1/2 flex justify-center">
                        <img src="<?=base_url("assets/images/doctor_image/doctor_image_3.jpg")?>" alt="Team Member"
                            class="w-full md:w-3/4 rounded-lg shadow-lg h-[250px] sm:h-[280px] md:h-[320px] lg:h-[380px] xl:h-[520px] object-fill ">
                    </div>
                    <div class="right w-full md:w-1/2 flex flex-col items-start p-4 text-center md:text-left">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>

                </div>
                <div class="swiper-slide flex flex-col md:flex-row items-center gap-6">
                    <div class="left w-full md:w-1/2 flex justify-center">
                        <img src="<?=base_url("assets/images/doctor_image/doctor_image_2.jpg")?>" alt="Team Member"
                            class="w-full md:w-3/4 rounded-lg shadow-lg h-[280px] sm:h-[350px] md:h-[350px] lg:h-[380px] xl:h-[520px] object-fill">
                    </div>
                    <div class="right w-full md:w-1/2 flex flex-col items-start p-4 text-center md:text-left">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>

                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next custom-swiper-button"></div>
            <div class="swiper-button-prev custom-swiper-button"></div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center text-gray-800">Contact Us</h2>
        <p class="text-center text-gray-600 mt-4">Get in touch for more details.</p>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        &copy; 2025 MyWebsite. All Rights Reserved.
    </footer>

    <!-- Go to Top Button -->
    <button id="top-button" onclick="scrollToTop()"><i class="fa-solid fa-angle-up"></i>
        </i></button>

    <!-- WhatsApp Chat Button -->
    <a href="https://wa.me/1234567890" target="_blank" id="whatsapp-button">💬</a>

    <!-- Swiper.js Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });


    var swiper = new Swiper(".ourTeamSwiper", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


    document.querySelector('.ourTeamSwiper').addEventListener('mouseenter', function() {
        swiper.autoplay.stop();
    });
    document.querySelector('.ourTeamSwiper').addEventListener('mouseleave', function() {
        swiper.autoplay.start();
    });

    document.querySelector('.mySwiper').addEventListener('mouseenter', function() {
        swiper.autoplay.stop();
    });
    document.querySelector('.mySwiper').addEventListener('mouseleave', function() {
        swiper.autoplay.start();
    });

    document.getElementById("menu-toggle").addEventListener("click", function() {
        document.getElementById("mobile-menu").classList.toggle("menu-hidden");
        var toggleButton = document.getElementById("menu-toggle");
        toggleButton.textContent = toggleButton.textContent === "☰" ? "X" : "☰";

    });

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        var topButton = document.getElementById("top-button");
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            topButton.style.display = "block";
        } else {
            topButton.style.display = "none";
        }
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    </script>

</body>

</html>