<section class="you__meet">
    <?php $youmeet = get_field("you_meet"); ?>
    <div class="container">
        <h2 class="text-center">Who you will Meet?</h2>
        <div class="row g-0 mt-5">
        <?php foreach  ($youmeet as $youmeet) : ?>
            <div class="col-6 col-md-4">
                <div class="meet_card">
                    <h4 class="text-center"><?= $youmeet['designation']?></h4>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- <div class="col-6 col-md-4">
                <div class="meet_card">
                    <h4 class="text-center">Designers</h4>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="meet_card">
                    <h4 class="text-center">Developers</h4>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="meet_card">
                    <h4 class="text-center">Operators</h4>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="meet_card">
                    <h4 class="text-center">Owners</h4>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="meet_card">
                    <h4 class="text-center">Consultants</h4>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="meet_card">
                    <h4 class="text-center">Contractors</h4>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="meet_card">
                    <h4 class="text-center">Global Solution Providers</h4>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="meet_card">
                    <h4 class="text-center">Media</h4>
                </div>
            </div> -->
        </div>
    </div>
</section>