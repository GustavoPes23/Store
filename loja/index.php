<!DOCTYPE html>

<html>

<?php include "parts/head.php"; ?>

<body class="preloader">

    <?php include "parts/navbar.php"; ?>

    <progress id="js-progressbar" class="uk-progress progress-muted" value="1" max="100"></progress>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push; autoplay:true; autoplay-interval: 10000;">

        <ul class="uk-slideshow-items">

            <?php

            $imgArray = array(['img01', 'Calçados'], ['img02', 'Camisetas'], ['img03', 'Calças'], ['img04', 'Outros']);

            foreach ($imgArray as $auxImg) {

            ?>
                <li>
                    <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                        <img src="img/index/<?= $auxImg[0]; ?>.jpg" alt="" uk-cover>
                    </div>
                </li>

            <?php } ?>

        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    </div>

    <hr class="uk-divider-icon uk-margin-large">

    <h2 class=" uk-text-center uk-margin-large uk-text-bold"><span>Destaques</span></h2>

    <div class="uk-child-width-1-3@m uk-column-1-2 uk-flex uk-flex-center " uk-grid>

        <?php

        $imgArray2 = array(['img01', 'Calçados'], ['img02', 'Camisetas'], ['img03', 'Calças'], ['img04', 'Outros']);

        foreach ($imgArray2 as $auxImg) {

        ?>

            <div class="uk-card uk-card-default">

                <div class="uk-card-media-top">

                    <img src="img/index/<?= $auxImg[0]; ?>.jpg" alt="" style="height:300px; width: 376px;">

                </div>

                <div class="uk-card-body">

                    <h3 class="uk-card-title">Media Top</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

                </div>

            </div>


        <?php } ?>

    </div>

    <hr class="uk-divider-icon uk-margin-large">

    <h2 class=" uk-text-center uk-margin-large uk-text-bold"><span>Ofertas</span></h2>

    <div class=" uk-flex uk-flex-center" uk-grid>

        <div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: 2021-12-13T16:47:14+00:00">
            <div>
                <div class="uk-countdown-number uk-countdown-days"></div>
                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Days</div>
            </div>
            <div class="uk-countdown-separator">:</div>
            <div>
                <div class="uk-countdown-number uk-countdown-hours"></div>
                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hours</div>
            </div>
            <div class="uk-countdown-separator">:</div>
            <div>
                <div class="uk-countdown-number uk-countdown-minutes"></div>
                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
            </div>
            <div class="uk-countdown-separator">:</div>
            <div>
                <div class="uk-countdown-number uk-countdown-seconds"></div>
                <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Seconds</div>
            </div>
        </div>

    </div>

    <div class="uk-child-width-1-3@m uk-column-1-2 uk-grid-match uk-flex uk-flex-center" uk-grid>

        <div>
            <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <h3 class="uk-card-title">Left</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                <h3 class="uk-card-title">Right</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

    </div>

    <hr class="uk-divider-icon uk-margin-large">

    <h2 class=" uk-text-center uk-margin-large uk-text-bold"><span>Outros</span></h2>

    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-3@s uk-margin" uk-grid>

        <div class="uk-card-media-left uk-cover-container">

            <div class="uk-text-center">

                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">

                    <img class="uk-transition-scale-up uk-transition-opaque" src="img/index/img01.jpg" style="height: 25rem; max-width: 45rem;" alt="">


                </div>

            </div>

        </div>

        <div>

            <div class="uk-card-body">

                <h3 class="uk-card-title">Media Left</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

            </div>

        </div>

    </div>

    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>

        <div class="uk-flex-last@s uk-card-media-right uk-cover-container">

            <div class="uk-text-center">

                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">

                    <img class="uk-transition-scale-up uk-transition-opaque" src="img/index/img02.jpg" style="height: 25rem; max-width: 45rem;" alt="">

                </div>

            </div>

        </div>

        <div>

            <div class="uk-card-body">

                <h3 class="uk-card-title">Media Right</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

            </div>

        </div>

    </div>

    <!-- Contato -->

    <div class="uk-child-width-1-3@m uk-column-1-3 uk-flex uk-flex-center uk-background-cover uk-background-fixed" uk-grid data-src="img/index/contato.jpg" uk-img>
        

        <fieldset class="uk-fieldset" style="padding-bottom: 50px;">

            <legend class="uk-legend" style="padding-top: 50px; color: white;">Contato</legend>

            <div class="uk-margin">

                <div class="uk-inline uk-width-1-1">

                    <a class="uk-form-icon" href="#" uk-icon="icon: pencil"></a>

                    <input class="uk-input" type="text" placeholder="Nome">

                </div>

            </div>

            <div class="uk-margin">

                <div class="uk-inline uk-width-1-1">

                    <a class="uk-form-icon" href="#" uk-icon="icon: mail"></a>

                    <input class="uk-input" type="email" placeholder="Email">

                </div>

            </div>

            <div class="uk-margin">

                <textarea class="uk-textarea" rows="5" placeholder="Descrição"></textarea>

            </div>

            <button class="uk-button uk-button-primary">Enviar</button>

        </fieldset>

    </div>

</body>

<?php include "parts/footer.php"; ?>

<!-- Jquery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="js/uikit.min.js"></script>

<script src="js/uikit-icons.min.js"></script>

<script src="js/app.js"></script>

</html>