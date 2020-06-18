<body>
    <!-- Início da navbar, é o menu superior com os links para os produtos e a barra de pesquisa-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

        <!-- <div class="container"> -->

        <a class="navbar-brand"  href="index.php">Mobilidade Urbana</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">
            <!-- Essa classe faz com que habilite um menu hamburguer quando a tela começa a ficar pequena como em smartphones-->

            <ul class="navbar-nav mr-auto">
                <!-- Início dos links no menu-->

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bicicletas-eletricas.php">Bicicletas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="patinetes-eletricos.php">Patinetes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="monociclos-eletricos.php">Monociclos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="motos-eletricas.php">Motos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>

            </ul><!-- Fim dos itens no menu-->
            <!-- Início do menu de redes sociais-->
            <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin"><i class="fas fa-user"></i></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></i></a>
                </li>

            </ul><!-- Fim do menu de redes sociais-->
            <!-- Início da barra de pesquisa-->
            <form class="form-inline mb-0">
                <input class="form-control ml-2 bg-light" type="search" placeholder="Buscar...">
                <button class="btn btn-light ml-2" type="Submit">Ok</button>
            </form><!-- Fim da barra de pesquisa-->

        </div>

        </div>

    </nav><!-- Fim da navbar-->