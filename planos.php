<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grupo Ciatos Contabilidade</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/owl.css">
    </head>
    <body>
        <div class="owl-carousel owl-theme owl-planos">
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

        <div class="clearfix"></div>
        <script src="assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="assets/plugins/remodal/remodal.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script>
            jQuery(document).ready(function () {
                $('.owl-planos').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: true,
                    autoplayHoverPause: false,
                    autoplay: 5000,
                    smartSpeed: 700,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        800: {
                            items: 2
                        },
                        1024: {
                            items: 3
                        },
                        1100: {
                            items: 3
                        }
                    }
                });
            });
        </script>
    </body>

</html>