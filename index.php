<?php
session_start();
?>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SAADS - Semana Academica do curso de Análise e Desenvolvimento de Sistemas</title>

    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Roboto+Condensed" rel="stylesheet"> 

    <!-- Bootstrap Core JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script src="js/valform.js" type="text/javascript"></script>
    
    <link href="css/style.css" rel="stylesheet">

</head>
<body class="">

    <header>
        <div class="header"> 
            <img class="logo" src="img/logo-saads.png" />          
            <nav class="menu">
                <ul>                
                    <li><a href="#inicio">INICIO</a></li>
                    <li><a href="#programacao">PROGRAMAÇÃO</a></li>
                    <li><a href="#inscricao">INSCRIÇÃO</a></li>
                    <li><a href="#localizacao">LOCALIZAÇÃO</a></li>
                </ul>
            </nav> 
            <div class="logo-saads">
                <img src="img/saads.png" />
            </div>
        </div>
    </header>
    <div class="slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item item active">
                    <img src="img/Palestrantes/AnneliseGripp/Annelise_1.jpg" alt="Slider 1" />
                </div>
                <div class="carousel-item item">
                    <img src="img/Palestrantes/AnneliseGripp/Annelise_2.jpg" alt="Slider 2" />
                </div>
                <div class="carousel-item item">
                    <img src="img/Palestrantes/FabriziodeRoyesMello/Fabrizio_1.jpg" alt="Slider 3" />
                </div>
                <div class="carousel-item item">
                    <img src="img/Palestrantes/FabriziodeRoyesMello/Fabrizio_2.jpg" alt="Slider 4" />
                </div>
                <div class="carousel-item item">
                    <img src="img/Palestrantes/OtavioSantana/Otavio_1.jpg" alt="Slider 5" />
                </div>
                <div class="carousel-item item">
                    <img src="img/Palestrantes/OtavioSantana/Otavio_2.jpg" alt="Slider 6" />
                </div>
                <div class="carousel-item item">
                    <img src="img/Palestrantes/RodrigoFerrugemCardoso/Rodrigo_1.jpg" alt="Slider 7" />
                </div>
                <div class="carousel-item item">
                    <img src="img/Palestrantes/RodrigoFerrugemCardoso/Rodrigo_2.jpg" alt="Slider 8" />
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="information">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12" id="programacao">   
                    <div class="cards">
                        <h3 class="title"><i class="glyphicon glyphicon-time"></i> Palestras</h3>
                        <div class="row eventos">                    
                            <div class="date">                        
                                <span class="day">18</span>
                                <span class="month">out</span>
                            </div>
                            <div class="itens-evento">
                                <ul>                            
                                    <li><br>
                                        <span class="time">18:50 - 19:10</span>
                                        <span>Credenciamento</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">19:10 - 20:00</span>
                                        <span class="col-xs-10">Palestra: Otávio Gonçalves de Santana - JNoSQ: Uma API, milhões de possibiilidades para uma aplicação poliglota</span><br><br>
                                    </li>
                                    <li><br>
                                        <span class="time">20:00 - 20:20</span>
                                        <span>Coffee Break</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">20:25 - 21:15</span>
                                        <span>Palestra: Annelise Gripp - Metodologias utilizadas no mercado para gerenciar projetos</span><br><br>  
                                    </li>
                                    <li><br>
                                        <span class="time">21:20 - 22:10</span>
                                        <span>Rodrigo Ferrugem - A lição do elefante acorrentado X Empreendedorismo</span><br><br>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12" id="programacao">
                    <div class="cards">
                        <h3 class="title"><i class="glyphicon glyphicon-time"></i> Oficinas</h3>
                        <div class="row eventos">                    
                            <div class="date">                        
                                <span class="day">19</span>
                                <span class="month">out</span>
                            </div>
                            <div class="itens-evento">
                                <ul>
                                    <li><br>
                                        <span class="time">18:50 às 19:10</span>
                                        <span>Credenciamento</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">19:10 às 21:50</span>
                                        <span>Cobol - Prof. Alex - Lab 1</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">19:10 às 21:50</span>
                                        <span>PostgreSQL para Desenvolvedores - Fabrizio Mello - Lab 2</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">19:10 às 21:50</span>
                                        <span>Introdução ao LaTeX - Prof. Simone - Lab 3</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">19:10 às 20:30</span>
                                        <span>Introdução ao Arduino - Prof. Leandro Camargo - Lab 4</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">20:50 às 21:50</span>
                                        <span>Introdução ao Arduino - Prof. Leandro Camargo - Lab 4</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">19:10 às 21:50</span>
                                        <span>Mini-Curso: Introdução a Jogos com engine Unity - Prof. Marcelo - Lab 5</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">20:30 às 20:50</span>
                                        <span>Coffee Break</span><br><br>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12" id="programacao">
                    <div class="cards">
                        <h3 class="title"><i class="glyphicon glyphicon-time"></i> Palestras</h3>
                        <div class="row eventos">                    
                            <div class="date">                        
                                <span class="day">20</span>
                                <span class="month">out</span>
                            </div>
                            <div class="itens-evento">
                                <ul>                            
                                    <li><br>
                                        <span class="time">18:50 - 19:10</span>
                                        <span>Credenciamento</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">19:10 - 20:00</span>
                                        <span class="col-xs-10">Palestra: Fabrízio de Royes Mello - Bad Smells (mal cheiros) em Bancos de Dados</span><br><br>
                                    </li>
                                    <li><br>
                                        <span class="time">20:00 - 20:20</span>
                                        <span>Coffee Break</span><br><br>
                                    </li>
                                    <li>
                                        <span class="time">20:25 - 21:15</span>
                                        <span>Palestra: Rodrigo Freitas - Git: Além do versionamento</span><br><br>  
                                    </li>
                                    <li><br>
                                        <span class="time">21:20 - 22:10</span>
                                        <span>Palestra: Daniel Wildt - Qual é o teu presente?</span><br><br>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
			<?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                }
                if(isset($_SESSION['msgcpfemail'])){
                echo $_SESSION['msgcpfemail'];
                unset($_SESSION['msgcpfemail']);
                }
                if(isset($_SESSION['msgcpf'])){
                echo $_SESSION['msgcpf'];
                unset($_SESSION['msgcpf']);
                }
                if(isset($_SESSION['msgemail'])){
                echo $_SESSION['msgemail'];
                unset($_SESSION['msgemail']);
                }
                if(isset($_SESSION['msgcad'])){
                echo $_SESSION['msgcad'];
                unset($_SESSION['msgcad']);
            }
            ?>
                <form action="php/cadastro.php" method="get" class="col-md-3 col-xs-12" id="inscricao">
                <!--<div class="col-md-4 col-xs-12" id="inscricao">-->
                    <div class="cards">
                        <h3 class="title"><i class="glyphicon glyphicon-envelope"></i> Inscrição</h3>
                        <br><br>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control txt" name="nome" placeholder="Nome Completo" x-moz-errormessage="Ops. Por favor, digite seu nome completo." title="Nome completo." minlength="5" maxlength="60" required autofocus oninvalid="setCustomValidity('Por favor, digite seu nome completo.')" onchange="try{setCustomValidity('')}catch(e){}"/>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control txt" name="email" placeholder="E-mail" x-moz-errormessage="Ops. Digite um email valido. exemplo@exemplo.com" title="exemplo@exemplo.com" minlength="8" maxlength="50" required oninvalid="setCustomValidity('Digite um email valido. exemplo@exemplo.com')" onchange="try{setCustomValidity('')}catch(e){}"/>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control txt" id="failCpf" name="cpf" placeholder="CPF" x-moz-errormessage="Ops. CPF somente numeros." title="CPF somente números." pattern="[0-9]*" minlength="11" maxlength="11" required onchange="faz()"/>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control txt" name="inst" placeholder="Instituição" x-moz-errormessage="Ops. Por favor, Sua Instituição." title="Sua Instituição." minlength="3" maxlength="60" required oninvalid="setCustomValidity('Por favor, Sua Instituição.')" onchange="try{setCustomValidity('')}catch(e){}"/>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="submit" name="btnCadUsuario" class="form-control btn-confirm" id="Cadastrar" value="CONFIRMAR"/>
                            </div>
                        </div>
               <!-- </div>-->
			   </form>
            </div>
        </div>
    </div>
    <br><br>
    <div class="maps" id="localizacao">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.9680774793746!2d-54.07404188526101!3d-31.3322546993219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9505dfedb04c332b%3A0x827091ddfbf1068a!2sIFSul+Campus+Bag%C3%A9!5e0!3m2!1spt-BR!2sbr!4v1474135971589" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
    <footer class="footer">        
        <nav class="menu-footer">            
            <ul>                
                <li><a href="#inicio">INICIO</a></li>
                <li><a href="#programacao">PROGRAMAÇÃO</a></li>
                <li><a href="#inscricao">INSCRIÇÃO</a></li>
                <li><a href="#localizacao">LOCALIZAÇÃO</a></li>
            </ul>
        </nav>

        <div class="content-footer">
            <div class="link-facebook">                
                <img class="icon-facebook" src="img/icon-facebook.png"/>
                <a href="https://www.facebook.com/saadsifsul/"><span class="facebook">SAADS - IFSul Câmpus Bagé</span></a>
            </div>  
            <div class="link-email">                
                <img class="icon-email" src="img/icon-email.png"/>
                <span class="facebook">contato.saads@gmail.com</span>
            </div>
        </div>
        <div class="subfooter">            
            <div class="copyright">                
                <div class="icon-saads">
                    <img src="img/icon-saads.png" class="icon-saads"/>
                </div>
                <div class="right-by">
                    <span>TODOS OS DIREITOS RESERVADOS - SAADS 2017</span>
                    <address>AV. LEONEL DE MOURA BRIZOLA, 2501 - BAIRRO PEDRAS BRANCAS</address>
                </div>
            </div>  
        </div>
    </footer>
    <script language="javascript" type="text/javascript">
        $("#myCarousel").carousel();

        $(".item").click(function () {
            $("#myCarousel").carousel(1);
        });

        $(".left").click(function () {
            $("#myCarousel").carousel("prev");
        });
    </script>
</body>
</html>