<?php // Template name: Home ?>

    <!-- header wp -->
    <?php get_header(); ?>

    <!-- loader -->
    <div id="loader">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg">
        <div class="progress-container">
            <div class="progress-bar" id="progress-bar"></div>
        </div>
    </div>

    <!-- header template -->
    <?php require 'templates/header.php' ?>
    <!-- banner template -->
    <?php require 'templates/banner.php' ?>

    <!-- premios -->
    <section class="premios" id="premios">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/placar-arrows.png" class="arrows">
        <div class="container">
            <h2 class="section-title">Prêmios</h2>

            <!-- pills -->
            <div class="pills"> 
                <div class="pills-container">
                    <div class="pill active" data-target="premios-janeiro">Janeiro</div>
                    <div class="pill" data-target="premios-fevereiro">Fevereiro</div>
                    <div class="pill" data-target="premios-marco">Março</div>
                    <div class="pill" data-target="premios-abril">Abril</div>
                    <div class="pill" data-target="premios-maio">Maio</div>
                    <div class="pill" data-target="premios-junho">Junho</div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/premios-arrow.svg">
                </div>

                <!-- janeiro -->
                <div class="content visible hidden" id="premios-janeiro">
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
                        <!-- custom post type -->
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
    <section class="placar" id="placar">
        <div class="container">
            <header>
                <h2 class="section-title">Placar</h2>
            </header>
            
            <!-- pills -->
            <div class="placar-pills">
                <nav class="nav" id="nav-pills">
                    <button class="nav-button active" data-target="tab-item1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/placar-divisor.svg">
                        <p><?php the_field('placar-item1'); ?></p>
                    </button>
                    <button class="nav-button" data-target="tab-item2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/placar-divisor.svg">
                        <p><?php the_field('placar-item2'); ?></p>
                    </button>
                    <button class="nav-button" data-target="tab-item3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/placar-divisor.svg">
                        <p><?php the_field('placar-item3'); ?></p>
                    </button>
                    <button class="nav-button" data-target="tab-item4">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/placar-divisor.svg">
                        <p><?php the_field('placar-item4'); ?></p>
                    </button>
                </nav>
                <div class="tab-content" id="tab-content">
                    
                    <!-- item 1 -->
                    <?php
                    $args = array(
                        'post_type' => 'placar',
                        'orderby' => 'meta_value_num', 
                        'meta_key' => 'placar-points',
                        'order' => 'DESC', 
                        'posts_per_page' => -1,
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'placar-items',
                                'field'    => 'slug',
                                'terms'    => 'item1',
                            ),
                        ),
                    );

                    $the_query = new WP_Query($args);
                    ?>

                    <?php if ($the_query->have_posts()): ?>
                        <div class="tab-pane active" id="tab-item1">

                            <?php $i = 0; ?>

                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <!-- item destaque -->
                            <?php if ($i === 0): ?>
                            <div class="info-wrapper">
                                <div class="pic">
                                    <span class="place">1º</span>
                                    <?php if (has_post_thumbnail()): ?>
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
                                    <?php else: ?>
                                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/placar-pic.png" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="info">
                                    <p id="name"><?php the_title(); ?></p> 
                                    <span><?php the_field('placar-info'); ?></span> 
                                    <p id="points"><?php the_field('placar-points'); ?> pontos</p> 
                                </div>
                            </div>

                            
                            <div class="ranking-wrapper">
                                <div class="ranking">
                                    <!-- outros itens -->
                                    <?php else: ?>
                                    <div class="item">
                                        <div>
                                            <span class="place"><?php echo ($i + 1); ?>º</span>
                                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/icons/placar-arrows.svg">
                                            <p><?php the_title(); ?></p>
                                        </div>
                                        <div>
                                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/icons/placar-arrows.svg">
                                            <p><?php the_field('placar-info'); ?></p>
                                        </div>
                                        <div>
                                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/icons/placar-arrows.svg">
                                            <p><?php the_field('placar-points'); ?> pontos</p>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <!-- incremento -->
                                    <?php $i++; ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                    <!-- item 2 -->
                    <?php
                    $args = array(
                        'post_type' => 'placar',
                        'orderby' => 'meta_value_num', 
                        'meta_key' => 'placar-points',
                        'order' => 'DESC', 
                        'posts_per_page' => -1,
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'placar-items',
                                'field'    => 'slug',
                                'terms'    => 'item2',
                            ),
                        ),
                    );

                    $the_query = new WP_Query($args);
                    ?>

                    <?php if ($the_query->have_posts()): ?>
                        <div class="tab-pane" id="tab-item2">

                            <?php $i = 0; ?>

                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <!-- item destaque -->
                            <?php if ($i === 0): ?>
                            <div class="info-wrapper">
                                <div class="pic">
                                    <span class="place">1º</span>
                                    <?php if (has_post_thumbnail()): ?>
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
                                    <?php else: ?>
                                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/placar-pic.png" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="info">
                                    <p id="name"><?php the_title(); ?></p> 
                                    <span><?php the_field('placar-info'); ?></span> 
                                    <p id="points"><?php the_field('placar-points'); ?> pontos</p> 
                                </div>
                            </div>

                            
                            <div class="ranking-wrapper">
                                <div class="ranking">
                                    <!-- outros itens -->
                                    <?php else: ?>
                                    <div class="item">
                                        <div>
                                            <span class="place"><?php echo ($i + 1); ?>º</span>
                                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/icons/placar-arrows.svg">
                                            <p><?php the_title(); ?></p>
                                        </div>
                                        <div>
                                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/icons/placar-arrows.svg">
                                            <p><?php the_field('placar-info'); ?></p>
                                        </div>
                                        <div>
                                            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/icons/placar-arrows.svg">
                                            <p><?php the_field('placar-points'); ?> pontos</p>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <!-- incremento -->
                                    <?php $i++; ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                    <!-- item 3 -->
                    <div class="tab-pane" id="tab-item3">Item 3</div>

                    <!-- item 4 -->
                    <div class="tab-pane" id="tab-item4">Item 4</div>
                </div>
            </div> 
        </div>
        <?php wp_reset_postdata(); ?>
    </section>

    <!-- fun zone -->
    <section class="funzone">
        <div class="container">
            <header>
                <h2 class="section-title"><?php the_field('funzone-title'); ?></h2>
                <p class="section-text"><?php the_field('funzone-text'); ?></p>
            </header>
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

    <!-- fullscreen video -->
    <section class="fullscreen-video"></section>

    <!-- footer -->
    <?php require 'footer.php' ?>
</body>
</html>