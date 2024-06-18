<section class="speakers">
    <div class="container">
        <h2 class="text-center">Speakers</h2>

        <div>
            <div class="swiper mySwiper6">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="speaker__box text-center">
                            <div class="speaker__img">
                                <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/HIS-Africa-Website-Design_Khaled-M-Abbas-Deputy-Minister-of-Housing-Utilities-and-Urban-Communities-for-National-Projects-M.png"
                                    alt="">
                            </div>
                            <h5>Khaled M Abbas</h5>
                            <p>Deputy Minister of Housing</p>
                            <p>Utilities and Urban Communities for National Projects</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="speaker__box text-center">
                            <div class="speaker__img">
                                <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/HIS-Africa-Website-Design_Kola-Ashiru-Balogun-2.png"
                                    alt="">
                            </div>
                            <h5>Kola Ashiru</h5>
                            <p></p>
                            <p>Balogun</p>
                        </div>
                    </div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 5</div>
                </div>
                <div class="position-relative mt-5">
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>


        <div class="text-center speaker__btn d-none">
            <a href="#">View All</a>
        </div>
    </div>
</section>

<script>
var swiper = new Swiper(".mySwiper6", {
    slidesPerView: 5,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,

        },
        640: {
            slidesPerView: 2,
        },
        1400: {
            slidesPerView: 5,
        }
    },
});
</script>