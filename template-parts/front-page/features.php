<section class="features">
    <?php $features = get_field("features"); ?>
    <div class="container">
        <div class="d-flex justify-content-center">
            <h3 class="text-center tag__title">Features of the event</h3>
        </div>
        <div class="row g-3 mt-3">
        <?php foreach  ($features as $feature) : ?>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4><?= $feature['features']?></h4>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>Global Suppliers</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>Distinguished Speakers</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>Network of Industry Associations</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>Prior Notification of Attendees</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>Strategized Networking</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>Influential Media</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>Customized Business Meetings</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>Dedicated Account Managers</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>Engaging Agenda</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>End-to-end Seamless Experience</h4>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature__card">
                    <h4>Decision Makers Only Platform</h4>
                </div>
            </div> -->
        </div>
    </div>
</section>