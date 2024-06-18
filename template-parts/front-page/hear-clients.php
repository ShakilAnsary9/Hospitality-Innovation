<section class="hear__clients">
    <div class="container">
        <h2 class="text-center">Hear from our Clients</h2>
        <div class="client__sliders">
            <div class="swiper mySwiper4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="video__img cli-thumb" data-video="https://www.youtube.com/embed/n5wHflDj2s0">
                            <img src="http://europe.redevelopmentsummit.com/wp-content/uploads/2024/03/Testimonial-Videos_Thumbnail-01.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video__img cli-thumb" data-video="https://www.youtube.com/embed/6LzHmGpuc4I">
                            <img src="http://europe.redevelopmentsummit.com/wp-content/uploads/2024/03/Testimonial-Videos_Thumbnail-02.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video__img cli-thumb" data-video="https://www.youtube.com/embed/jWelgfZhk7Y">
                            <img src="http://europe.redevelopmentsummit.com/wp-content/uploads/2024/03/Testimonial-Videos_Thumbnail-03.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video__img cli-thumb" data-video="https://www.youtube.com/embed/axDrXkL2NMs">
                            <img src="http://europe.redevelopmentsummit.com/wp-content/uploads/2024/03/Testimonial-Videos_Thumbnail-04.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video__img cli-thumb" data-video="https://www.youtube.com/embed/J73Q4_f6xgk">
                            <img src="http://europe.redevelopmentsummit.com/wp-content/uploads/2024/03/Testimonial-Videos_Thumbnail-05.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video__img cli-thumb" data-video="https://www.youtube.com/embed/z1pCB-sDdfw">
                            <img src="http://europe.redevelopmentsummit.com/wp-content/uploads/2024/03/Testimonial-Videos_Thumbnail-06.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video__img cli-thumb" data-video="https://www.youtube.com/embed/U8vritOR0FY">
                            <img src="http://europe.redevelopmentsummit.com/wp-content/uploads/2024/03/Testimonial-Videos_Thumbnail-07.jpg"
                                alt="">
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </div>
</section>

<script>
var swiper = new Swiper(".mySwiper4", {
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,

        },
        640: {
            slidesPerView: 3,
        },
    },
});
</script>

<script>
// Modal Script
document.addEventListener("DOMContentLoaded", function() {
    var cliThumbs = document.querySelectorAll('.cli-thumb');
    cliThumbs.forEach(function(cliThumb) {
        cliThumb.addEventListener('click', function() {
            var videoUrl = this.getAttribute('data-video');
            var iframe = document.querySelector('#videoModal iframe');
            iframe.setAttribute('src', videoUrl);
            var videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
            videoModal.show();
        });
    });

    // Close button click event listener
    var closeButton = document.querySelector('#videoModal .close');
    closeButton.addEventListener('click', function() {
        var videoModal = bootstrap.Modal.getInstance(document.getElementById('videoModal'));
        videoModal.hide();
    });

    // Clear the video url when modal is closed
    var videoModal = document.getElementById('videoModal');
    videoModal.addEventListener('hidden.bs.modal', function() {
        document.querySelector('#videoModal iframe').setAttribute('src', '');
    });
});
</script>