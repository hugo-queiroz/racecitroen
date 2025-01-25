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

                <!-- janeiro -->
                <div class="content" id="janeiro">
                    <div class="items">
                        <!-- custom post type -->
                        <?php
                            $args = array (
                                'post_type' => 'premios',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'premios-mes',
                                        'field' => 'slug', // 'slug' | 'term_id'
                                        'terms' => 'janeiro',
                                    ),
                                ),
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'posts_per_page' => -1,
                            );
                            $the_query = new WP_Query ( $args );
                        ?>
                        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="item">
                            <div class="">
                                <p class="premio-item-title"><?php the_field('premios-funcao'); ?></p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/premios-divisor.svg">
                                <figcaption><?php the_title()?></figcaption>
                            </div>
                            <figure>
                                <?php the_post_thumbnail()?>
                            </figure>
                        </div>

                        <?php endwhile; else: endif; ?>
                        <!-- fim do custom post type -->
                    </div>
                </div>

                <!-- fevereiro -->
                <div class="content hidden" id="premios-fevereiro">
                    <div class="items">
                        <!-- custom post type -->
                        <?php
                            $args = array (
                                'post_type' => 'premios',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'premios-mes',
                                        'field' => 'slug', // 'slug' | 'term_id'
                                        'terms' => 'fevereiro',
                                    ),
                                ),
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'posts_per_page' => -1,
                            );
                            $the_query = new WP_Query ( $args );
                        ?>
                        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="item">
                            <div class="">
                                <p class="premio-item-title"><?php the_field('premios-funcao'); ?></p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/premios-divisor.svg">
                                <figcaption><?php the_title()?></figcaption>
                            </div>
                            <figure>
                                <?php the_post_thumbnail()?>
                            </figure>
                        </div>

                        <?php endwhile; else: endif; ?>
                        <!-- fim do custom post type -->
                    </div>
                </div>

                <!-- março -->
                <div class="content hidden" id="premios-marco">Conteúdo Março</div>
                <!-- abril -->
                <div class="content hidden" id="premios-abril">Conteúdo Abril</div>
                <!-- maio -->
                <div class="content hidden" id="premios-maio">Conteúdo Maio</div>
                <!-- junho -->
                <div class="content hidden" id="premios-junho">Conteúdo Junho</div>
            </div>
            <!-- --- -->

        </div>
        <?php wp_reset_postdata(); ?>
    </section>

    <!-- placar -->
    <section class="placar">
        <div class="container">
            <header>
                <h2 class="section-title">Placar</h2>
            </header>
            
            <!-- pills -->
            

        </div>
    </section>

    <!-- fun zone -->
    <section class="funzone">
        <div class="container">
            <h2 class="section-title"><?php the_field('funzone-title'); ?></h2>
            <p class="section-text"><?php the_field('funzone-text'); ?></p>
            <div class="items">
                <!-- loop -->
                <?php if(have_rows('funzone-item')): while(have_rows('funzone-item')) : the_row(); ?>
                    <div class="item">
                        <a href="<?php the_sub_field('funzone-item-link'); ?>">
                        <p><?php the_sub_field('funzone-item-title'); ?></p>
                        <div>
                            <span><?php the_sub_field('funzone-item-text'); ?></span>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/download.png" alt="Ícone de download">
                        </div>
                        <img src="<?php the_sub_field('funzone-item-img'); ?>" alt="Imagem <?php the_sub_field('funzone-item-text'); ?>">
                    </a>
                    </div>
                <?php endwhile; else : endif; ?>
                <!-- fim do loop -->
            </div>
        </div>
    </section>

    <!-- fullscreen video section -->
    <section class="fullscreen-video"></section>

    <!-- footer -->
    <?php require 'footer.php' ?>
</body>
</html>