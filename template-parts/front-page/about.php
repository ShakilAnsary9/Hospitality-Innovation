<section class="about">
    <?php $aboutevent = get_field("about_event"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="about__info">
                    <h2><?= $aboutevent['title']?></h2>
                    <p>
                        <?= $aboutevent['paragraph']?>
                    </p>
                </div>

            </div>

            <div class="col-12 col-md-6">
                <div class="about__img">
                    <img src="https://i.postimg.cc/nV0z1N2w/meetings-4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>