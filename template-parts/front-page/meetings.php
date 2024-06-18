<section class="meetings">
    <?php $meeting = get_field("sig_meeting"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="meeting__img">
                    <img src="http://saudiarabia.redevelopmentsummit.com/wp-content/uploads/2024/06/meetings-4y.jpg"
                        alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="meeting__info">
                    <h2><?= $meeting['title']?></h2>
                    <p>
                        <?= $meeting['paragraph']?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>