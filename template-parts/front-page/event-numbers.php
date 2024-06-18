<section class="event__numbers">
    <div class="container-fluid g-0">
        <div class="d-flex justify-content-center">
            <h3 class="text-center tag__title">Event Numbers</h3>
        </div>
        <div class="number__wrapper">
            <div class="container">
                <div class="row gy-5 flex justify-content-center text-center">
                    <div class="col-6 col-lg-3">
                        <div class="number__box">
                            <div class="d-flex align-items-center justify-content-center">
                                <h5 class="odometer" data-value="19">0</h5>
                                <span class="sign"></span>
                            </div>
                            <h6>Events</h6>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="number__box">
                            <div class="d-flex align-items-center justify-content-center">
                                <h5 class="odometer" data-value="430">0</h5>
                                <span class="sign">+</span>
                            </div>
                            <h6>Speakers</h6>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="number__box">
                            <div class="d-flex align-items-center justify-content-center">
                                <h5 class="odometer" data-value="1200">0</h5>
                                <span class="sign">+</span>
                            </div>
                            <h6>Solution Provider</h6>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="number__box">
                            <div class="d-flex align-items-center justify-content-center">
                                <h5 class="odometer" data-value="2000">0</h5>
                                <span class="sign">+</span>
                            </div>
                            <h6>Buyers</h6>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="number__box">
                            <div class="d-flex align-items-center justify-content-center">
                                <h5 class="odometer" data-value="19000">0</h5>
                                <span class="sign">+</span>
                            </div>
                            <h6>B2B Meetings</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/waypoints/lib/noframework.waypoints.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var odometers = document.querySelectorAll('.odometer');

    odometers.forEach(function(odometer) {
        new Waypoint({
            element: odometer,
            handler: function() {
                odometer.innerHTML = odometer.getAttribute('data-value');
                this.destroy(); // Trigger only once
            },
            offset: '80%' // Trigger when the element is 75% in view
        });
    });
});
</script>