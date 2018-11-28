<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - Grupo Ciatos Contabilidade</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/hover-min.css">
        <link rel="stylesheet" href="assets/plugins/remodal/remodal-default-theme.css">
        <link rel="stylesheet" href="assets/plugins/remodal/remodal.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/zepto/1.1.4/zepto.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="assets/plugins/remodal/remodal.min.js"></script>


    </head>

    <body>

        <div class="banner_login" style="background: url(assets/img/contabilidade.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center login-page">
                        <h4>Nosso cliente é no ativo mais importante.</h4>
                        <h5>Na Ciatos Contabilidade todos os serviços são <b>online</b>.</h5>
                    </div>
                </div>
            </div>
            <div class="container fotms">
                <div class="row">
                    <div class="col-md-4">
                        <h6>Gestão<br>Financeira</h6>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Login">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Senha">
                            </div>
                        </form>                        
                    </div>
                    <div class="col-md-4">
                        <h6>Gestão<br>Pessoal</h6>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Login">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Senha">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h6>Gestão<br>de Notas Fiscais</h6>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Login">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Senha">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#modal" class=" relative video hvr-float-shadow" style="background: url(assets/img/video.png) top center no-repeat; background-size: 100%">
                            <span>Vídeo 1</span> 
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#modal" class=" relative video hvr-float-shadow" style="background: url(assets/img/video.png) top center no-repeat; background-size: 100%">
                            <span>Vídeo 2</span> 
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#modal" class=" relative video hvr-float-shadow" style="background: url(assets/img/video.png) top center no-repeat; background-size: 100%">
                            <span>Vídeo 3</span> 
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div>
                <h2 id="modal1Title">Vídeo 1</h2>
               <iframe width="560" height="315" src="https://www.youtube.com/embed/XXz7JEvOHiw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <br>
            <button data-remodal-action="cancel" class="remodal-cancel">Cancelar</button>
            <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
        </div>



