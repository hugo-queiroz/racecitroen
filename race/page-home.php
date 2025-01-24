<?php // Template name: Home ?>

    <!-- header wp -->
    <?php get_header(); ?>

    <!-- header template -->
    <?php require 'templates/header.php' ?>
    <!-- banner template -->
    <?php require 'templates/banner.php' ?>

    <!-- premios -->
    <section class="premios">
        <div class="container">
            <h2 class="section-title">Prêmios</h2>

            <!-- pills -->
            <div class="pills"> 
                <div class="pills-container">
                    <div class="pill active" data-target="janeiro">Janeiro</div>
                    <div class="pill" data-target="premios-fevereiro">Fevereiro</div>
                    <div class="pill" data-target="premios-marco">Março</div>
                    <div class="pill" data-target="premios-abril">Abril</div>
                    <div class="pill" data-target="premios-maio">Maio</div>
                    <div class="pill" data-target="premios-junho">Junho</div>
                </div>

                <div class="content" id="janeiro">
                    <div class="items">
                        <div class="item">
                            <div class="">
                                <p>Consultor(a) de Vendas</p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/premios-divisor.svg">
                                <figcaption>Cervejeira Consul</figcaption>
                            </div>
                            <figure>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/premios-cervejeira.png" alt="Imagem de cervejeira">
                            </figure>
                        </div>
                        <div class="item">
                            <div class="">
                                <p>Gerente de Vendas</p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/premios-divisor.svg">
                                <figcaption>TV tudo em 1</figcaption>
                            </div>
                            <figure>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/premios-tv.png" alt="Imagem de tv"  id="tv">
                            </figure>
                        </div>
                        <div class="item">
                            <div class="">
                                <p>MKT/CRM e Qualidade</p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/premios-divisor.svg">
                                <figcaption>Music Frame Samsung</figcaption>
                            </div>
                            <figure>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/premios-music.png" alt="Imagem Music Frame Samsung">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="content hidden" id="premios-fevereiro">Conteúdo Fevereiro</div>
                <div class="content hidden" id="premios-marco">Conteúdo Março</div>
                <div class="content hidden" id="premios-abril">Conteúdo Abril</div>
                <div class="content hidden" id="premios-maio">Conteúdo Maio</div>
                <div class="content hidden" id="premios-junho">Conteúdo Junho</div>
            </div>
            <!-- --- -->

        </div>
    </section>

    <!-- placar -->
    <section class="placar">
        <div class="container">
            <h2 class="section-title">Placar</h2>
            
        </div>
    </section>

    <!-- fun zone -->
    <section class="funzone">
        <div class="container">
            <h2 class="section-title">Fun Zone</h2>
            <p class="section-text">Leve a Race Citroën sempre com você!</p>
            <div class="items">
                <div class="item">
                    <a href="#">
                        <p>Backgrounds</p>
                        <div>
                            <span>Desktop</span>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/download.png" alt="Ícone de download">
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/desktop.png" alt="Imagem de um notebook">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <p>Backgrounds</p>
                        <div>
                            <span>Mobile</span>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/download.png" alt="Ícone de download">
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mobile.png" alt="Imagem de um celular">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- fullscreen video section -->
    <section class="fullscreen-video">
        
    </section>

    <!-- footer -->
    <?php require 'footer.php' ?>
</body>
</html>