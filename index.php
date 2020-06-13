<?php include_once("./inc/head.php"); ?>
<?php include_once("./inc/header.php"); ?>

    <!-- Início do carousel-->
    <div id="carouselSite" class="carousel slide" data-interval="false"> <!-- data-ride="carousel"-->

        <!--<div class="container"> inicio do container, deixei comentado para ver isso no final do site-->

        <!--Abaixo são aquelas barrinhas que indicam qual imagem do carousel você está vendo -->
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
            <li data-target="#carouselSite" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner" width:100%; height: 500px !important;">

            <div class="carousel-item active">
                <img src="img/banner/Banner-bike-2-2.jpg" class="img-fluid d-block" width="1920" height="500">
                <div class="carousel-caption">
                    <h3>Bicileta Elétrica</h3>
                    <p>Aqui tem um texto muito louco falando sobre nossos produtos eletricos</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/banner/banner-patinete-1-2.jpg" class="img-fluid d-block" height="700" width="1920">
                <div class="carousel-caption">
                    <h3>Patinete Elétrico</h3>
                    <p>Aqui tem um texto muito louco falando sobre nossos produtos eletricos</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/banner/banner-monociclo-1-2.jpg" class="img-fluid d-block">
                <div class="carousel-caption">
                    <h3>Monociclo Elétrico</h3>
                    <p>Aqui tem um texto muito louco falando sobre nossos produtos eletricos</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/banner/banner-moto-2.jpg" class="img-fluid d-block">
                <div class="carousel-caption">
                    <h3>Moto Elétrica</h3>
                    <p>Aqui tem um texto muito louco falando sobre nossos produtos eletricos</p>
                </div>
            </div>

            <!--</div>fim do container-->
        </div>

        <!-- Início dos controles de Próximo e Anterior do carousel-->
        <!--<a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>-->
        <!--<a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Próximo</span>
        </a> -->
        <!-- Fim dos controles do carousel-->

    </div>
    <!-- Fim do carousel-->

    <!-- <div class="container"> -->
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="display-3">O futuro é elétrico!</h1>
            <p>Veja abaixo nossos produtos e apaixone-se 
            </p>
        </div>
    </div>
    <main>
        <div>
            <!-- inicio dos cards abaixo-->
            <div class="row w-75 mx-auto mt-5">

                <div class="col-sm">
                    <div class="card mx-auto">
                        <img class="card-img-top" src="img/card/card-bicicleta-2.jpg">
                        <div class="card-body">
                            <h4 class="card-tittle">Bicicletas</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Conforto e performance para suas atividades</h6>
                            <!--<p class="card-text">Aqui tem o primeiro card, yeah!</p>-->
                            <a href="#" class="card-link">Ver modelos</a>
                            
                        </div>
                    </div>

                </div>

                <div class="col-sm">
                    <div class="card mx-auto">
                        <img class="card-img-top" src="img/card/card-patinete-2.jpg">
                        <div class="card-body">
                            <h4 class="card-tittle">Patinetes</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Mobilidade e economia para qualquer hora</h6>
                            <!--<p class="card-text">Aqui tem o primeiro card, yeah!</p>-->
                            <a href="#" class="card-link">Ver modelos</a>
                            
                        </div>
                    </div>

                </div>

                <div class="col-sm">
                    <div class="card mx-auto">
                        <img class="card-img-top" src="img/card/card-monociclo-2.jpg">
                        <div class="card-body">
                            <h4 class="card-tittle">Monociclos</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Praticidade para o dia a dia</h6>
                            <!--<p class="card-text">Aqui tem o primeiro card, yeah!</p>-->
                            <a href="#" class="card-link">Ver modelos</a>
                            
                        </div>
                    </div>

                </div>

                <div class="col-sm">
                    <div class="card mx-auto">
                        <img class="card-img-top" src="img/card/card-scooter-3.jpg">
                        <div class="card-body">
                            <h4 class="card-tittle">Motos</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Elegância e economia na sua rotina</h6>
                            <!--<p class="card-text">Aqui tem o primeiro card, yeah!</p>-->
                            <a href="#" class="card-link">Ver modelos</a>
                            
                        </div>
                    </div>

                </div>


            </div> <!-- fim dos cards-->
        </div>
        <!--</div> -->

        <article class="article-font">
            <div>
                <h2>Veículos elétricos são o futuro da mobilidade urbana</h2>
                <p class="text-muted">Venha com a gente saber mais sobre esse futuro!</p>
                <a href="#" rel="noopener noreferrer" title="Não há link, nem precisa clicar">Acessar</a>
            </div>
            <div>
                <img src="img/view/view-cidade-4.jpg" alt="Imagem 02">
            </div>
        </article>

        <article class="article-font">
            <div>
                <h2>Inscreva-se para receber novidades e promoções!</h2>
                <p class="text-muted"></p>
                <a href="#" rel="noopener noreferrer" title="Não há link, nem precisa clicar">Me inscrever</a>
            </div>
            <div>
                <img src="img/view/view-cidade-6.jpg" alt="Imagem 02">
            </div>
        </article>

        <article class="article-font">
            <div>
                <h2>Fale conosco ;)</h2>
                <p>Entre em contato com a gente e tire suas dúvidas.</p>
                <a href="#" rel="noopener noreferrer" title="Não há link, nem precisa clicar">Entrar em contato</a>
            </div>
            <div>
                <img src="img/view/view-fale-conosco.jpg" alt="Imagem 02">
            </div>
        </article>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

<?php include_once("./inc/footer.php"); ?>