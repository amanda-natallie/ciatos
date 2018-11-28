<?php require 'header.php'; ?>
<div class="banner_home service-banner relative" style="background: #fff">

    <section class="section-home ptb-home">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-lg-12 ">
                    <div class="clearfix"></div>
                    <h2 class="heading-about-inverse">Planos de<br>Contabilidade
                        <hr>
                    </h2>
                    <p>Selecione um para ser redirecionado à página.</p>
                    <div class="space-50"></div>
                    <div class="padding-left">
                        <?php for ($i = 0; $i <= 5; $i++) { ?>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <img src="assets/img/1.png" alt="" title="" class="img-center img-responsive">
                                <div class="clearfix"></div>
                                <div class="text-center">
                                    <a href="#modal" class="another-red-button hvr-float-shadow"><span>PLANO UM</span></a>
                                </div>
                            </div>
                        <?php } ?>

                    </div>



                </div>
            </div>
        </div>
    </section>
    <?php require 'footer.php'; ?>    
</div>


<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" style="background: url(assets/img/bg_planos.jpg) top center no-repeat;background-size: cover !important">
    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
    <div class="owl-carousel owl-theme">
        <div class="item"><h4>1</h4></div>
        <div class="item"><h4>2</h4></div>
        <div class="item"><h4>3</h4></div>
        <div class="item"><h4>4</h4></div>
        <div class="item"><h4>5</h4></div>
        <div class="item"><h4>6</h4></div>
        <div class="item"><h4>7</h4></div>
        <div class="item"><h4>8</h4></div>
        <div class="item"><h4>9</h4></div>
        <div class="item"><h4>10</h4></div>
        <div class="item"><h4>11</h4></div>
        <div class="item"><h4>12</h4></div>
    </div>
</div>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    })
</script>