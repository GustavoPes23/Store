<?php

include "../../../config/caminho.php";

?>

<!DOCTYPE html>

<html>

<?php include "../../../parts/head.php"; ?>

<body class="preloader">

    <?php

    include "../../../preloader/app.php";

    include "../../../parts/navbar.php";

    ?>

    <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-4@s uk-text-center uk-padding-large uk-margin-large-top" uk-grid>

        <?php $arrayItens = array(['Nike', '20,90'], ['Adidas', '30,90'], ['Olympikus', '10,90'], ['Puma', '20,90'], ['Nike', '20,90'], ['Adidas', '30,90'], ['Olympikus', '10,90'], ['Puma', '20,90']);

        foreach ($arrayItens as $auxItens) { ?>

            <div>

                <div class="uk-card uk-card-default uk-card-body"><?= $auxItens[0]; ?></div>

            </div>

        <?php } ?>

    </div>

    <hr class="uk-divider-icon uk-margin-large">

    <h2 class=" uk-text-center uk-margin-large uk-text-bold"><span>Destaques</span></h2>

    <div class="uk-child-width-1-3@m uk-column-1-2 uk-flex uk-flex-center " uk-grid>

        <?php

        $imgArray2 = array(['img01', 'Calçados'], ['img02', 'Camisetas'], ['img03', 'Calças'], ['img04', 'Outros']);

        foreach ($imgArray2 as $auxImg) {

        ?>

            <div class="uk-card uk-card-default uk-button uk-button-default uk-button-card">

                <div class="uk-card-media-top">

                    <img src="img/index/<?= $auxImg[0]; ?>.jpg" alt="" style="height:300px; width: 376px;">

                </div>

                <div class="uk-card-body">

                    <h3 class="uk-card-title">Media Top</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

                </div>

                <div class="uk-card-footer">

                    <div class="uk-grid-medium uk-flex uk-flex-center@m uk-flex-right@l" uk-grid>

                        <a href="" class="uk-text-primary uk-text-bold" style="margin-top: 6px!important;" uk-icon="icon: cart"></a>

                        <div class="uk-text-danger uk-text-bold">$20.90</div>

                    </div>

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

    <?php include "../../../parts/contato.php"; ?>

</body>

<?php

include "../../../parts/footer.php";

include "../../../parts/scripts.php";

?>

<script src="js/carrega.js"></script>

</html>