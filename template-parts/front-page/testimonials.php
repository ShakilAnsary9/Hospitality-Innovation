<section class="testimonials">
    <?php $testimonials = get_field("testimonials"); ?>
    <div class="container">
        <div class="d-flex justify-content-center">
            <h3 class="text-center tag__title">Testimonials</h3>
        </div>
        <div>
            <div class="swiper mySwiper3">
                <div class="swiper-wrapper">
                <?php foreach  ($testimonials as $testimonial) : ?>
                    <div class="swiper-slide">
                        <div class="testimonial__wrapper">
                            <div class="testimonial__box">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <div class="testimonial__content">
                                            <p>
                                                <?= $testimonial['paragraph']?>
                                            </p>
                                            <div class="pt-3">
                                                <h5><?= $testimonial['company']?></h5>
                                                <h6><?= $testimonial['location']?></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="testimonial__logo">
                                            <img src="<?= $testimonial['image']?>"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!-- <div class="swiper-slide">
                        <div class="testimonial__wrapper">
                            <div class="testimonial__box">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <div class="testimonial__content">
                                            <p>We are a famous luxury experience brand, and I was here today to present
                                                our hospitality and real estate opportunities. I’m very happy about this
                                                experience. I had a chance to present what we do to the Saudi market,
                                                which is very important. We think that it is a great opportunity indeed,
                                                and I was very happy to be here and to have very interesting meetings. I
                                                would like to thank GBB for having me here. Everything was so well
                                                organized, and I’m really happy with the experience. I think it was
                                                highly professional but also very informal, and we were just very
                                                comfortable. We enjoyed it a lot! Thank you!
                                            </p>
                                            <div class="pt-3">
                                                <h5>Tonino Lamborghini </h5>
                                                <h6>COO Hospitality and Real Estate Development </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="testimonial__logo">
                                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/amb.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__wrapper">
                            <div class="testimonial__box">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <div class="testimonial__content">
                                            <p>Hospitality is booming in the region so it is definitely the right time
                                                to host such an event and bring together the hospitality leaders to
                                                discuss and to shape the future of the industry. It was a very good
                                                opportunity for the suppliers to meet the buyers, but at the same time,
                                                it was a good opportunity for the buyers to see the new innovations,
                                                technologies and products offered by the suppliers. I'm very happy to be
                                                a part of this event, and we are looking forward to the next one.
                                            </p>
                                            <div class="pt-3">
                                                <h5>LIXIL EMENA</h5>
                                                <h6>Leader Architecture and Design MENA </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="testimonial__logo">
                                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/grhe.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__wrapper">
                            <div class="testimonial__box">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <div class="testimonial__content">
                                            <p>I am the segment marketing manager for Signify Saudi Arabia and it's been
                                                a pleasure to be here at the hospitality innovation summit. I believe
                                                it's a very well-organized event, and we have been talking to certain
                                                suppliers and end users over the past two days with a lot of nice
                                                engagement in terms of workshops plus one-to-one meetings. This is the
                                                first time that I am attending, and I think it's a good ROI for us. We
                                                have managed to have some useful discussions with end users and on
                                                projects that are happening in Saudi today. It's very exciting to be
                                                engaged like this. The panel discussions were really useful when we were
                                                talking about innovation, sustainability and I think it really connects
                                                with what Signify is doing globally in terms of innovation, bringing
                                                sustainability into our operations and also going into certain
                                                innovative technologies that can benefit the future of these projects
                                                and the sustainability part. I'm so happy to be there, super excited and
                                                looking forward to more engagements like this in the future. Thank you
                                                very much.
                                            </p>
                                            <div class="pt-3">
                                                <h5>Signify</h5>
                                                <h6>Segment Marketing Manager - Retail & Hospitality | Office & Industry
                                                    and Market Intelligence Manager</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="testimonial__logo">
                                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/signify.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__wrapper">
                            <div class="testimonial__box">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <div class="testimonial__content">
                                            <p>This is my first time here in the Hospitality Innovation Summit and this
                                                has been a great experience for me, and I see a lot of opportunities.
                                                Hopefully, I get to come here many years to come, and I wish everyone
                                                the best of luck and we’ll do great! Thank you!
                                            </p>
                                            <div class="pt-3">
                                                <h5>Gruppo Bounifante</h5>
                                                <h6>VP of Sales</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="testimonial__logo">
                                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/bunin.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__wrapper">
                            <div class="testimonial__box">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <div class="testimonial__content">
                                            <p>I’m very happy to be here today at the HIS 2023. It’s an amazing place
                                                where we can meet industry leaders.
                                            </p>
                                            <div class="pt-3">
                                                <h5>Schneider Electric</h5>
                                                <h6>MEA Hotel Segment Director </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="testimonial__logo">
                                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/ns.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__wrapper">
                            <div class="testimonial__box">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <div class="testimonial__content">
                                            <p>I am the CEO and founder of RKF Group from France. I appreciate so much
                                                the way that it is because I came here for the third time because each
                                                time I feel like it's increasing the level, the category and the
                                                qualification of the people attending the event, from both sides, buyers
                                                and suppliers. The quality of the connection and the organisation itself
                                                is really high-end.  And when you know the key people coming here and
                                                that's why I congratulate the organizer for bringing these people.
                                            </p>
                                            <div class="pt-3">
                                                <h5>RKF Linen </h5>
                                                <h6>CEO and Founder</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="testimonial__logo">
                                            <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/rkf.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

<script>
var swiper = new Swiper(".mySwiper3", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>