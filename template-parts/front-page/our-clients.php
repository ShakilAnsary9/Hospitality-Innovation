<section class="our__clients">
    <?php $clients = get_field("client"); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <h3 class="text-center tag__title">Our Clients</h3>
        </div>
        <div class="our__client_logos01">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">

                    <?php $firstrowlogos = $clients['client_first_row'];
                    foreach ($firstrowlogos as $firstrowlogo) : ?>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="<?= $firstrowlogo ['image']; ?>"
                                alt="">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Al-Bawani-1.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Alrajhi-1.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Boutique-Group-1.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Diriyah-Company.jpg"
                                alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="our__client_logos02">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/IHG-Hotels.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/IHG-Hotels.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Jabal-Omar-Development-Company.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Jumeira-Hotels.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Kristina-Zanic-1.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center client_02_title">
            <h3 class="text-center tag__title">Media & Supporting Partners</h3>
        </div>
        <div class="our__client_logos01">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/hotelcatering-1.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/businesstoday.me_-1.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/construction-1.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Security-info.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/HVAC.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Souece-security.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/TheBigRedGuide.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Saidi-project.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/IFDM.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Fedai.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/Furniture-from-spain.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/EFEC.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/knight-prank-1.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__logo">
                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/finance-world.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 5,
    spaceBetween: 0,
    loop: true,
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        0: {
            slidesPerView: 2,

        },
        640: {
            slidesPerView: 4,
        },
        1400: {
            slidesPerView: 5,
        }
    },
});
</script>