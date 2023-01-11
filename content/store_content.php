<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Planning</span>
                        <span class="section-heading-lower">Jeu libre</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <?php
                        foreach ($array as $day => $hours) {
                            echo '<li class="list-unstyled-item list-hours-item d-flex">' . $day . '<span class="ms-auto">' . $hours . '</span></li>';
                        }
                        ?>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>Gymnase Jean Mermoz</strong>
                            <br />
                            717 Av, Jean Mermoz, 34000 Montpellier
                        </em>
                    </p>

                    <!-- <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=3.8889402151107793%2C43.61025727253034%2C3.8914507627487187%2C43.61159921350419&amp;layer=mapnik" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/#map=19/43.61093/3.89020">Afficher une carte plus grande</a></small> -->
                        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=717%20avenue%20jean%20mer&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <p class="mb-0">
                        <small><em>Contact</em></small>
                        <br />
                        (+33) 6.45.78.32.45
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

include 'content/about_content.php';
?>