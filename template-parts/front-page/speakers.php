<section class="speakers">
    <?php $speakers = get_field("speaker"); ?>
    <div class="container">
        <h2 class="text-center">Speakers</h2>

        <div>
            <div class="swiper mySwiper6">
                <div class="swiper-wrapper">
                    <?php foreach  ($speakers as $speaker) : ?>
                    <div class="swiper-slide">
                        <div class="speaker__box text-center">
                            <div class="speaker__img">
                                <img src="<?= $speaker ['image']; ?>"
                                    alt="">
                            </div>
                            <h5><?= $speaker ['name']; ?></h5>
                            <p><?= $speaker ['designation']; ?></p>
                            <p><?= $speaker ['company']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
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