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

                    <div class="tab-pane active" id="tab-item1">
                    
                        <!-- group -->
                        <?php $grupo = get_field('placar-destaque');
                        if ($grupo): ?>
                            <div class="info-wrapper">
                                <div class="pic">
                                    <span class="place">1º</span>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/placar-pic.png" alt="Imagem de Nome e Sobrenome">
                                </div>
                                <div class="info">
                                    <p id="name"><?php echo esc_html($grupo['destaque-name']); ?></p>
                                    <span><?php echo esc_html($grupo['destaque-info']); ?></span>
                                    <p id="points"><?php echo esc_html($grupo['destaque-points']); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- group -->

                        <div class="ranking-wrapper">                         
                            <div class="ranking">
                                <!-- custom post type -->
                                <?php
                                    $args = array (
                                        'post_type' => 'placar',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'placar-items',
                                                'field' => 'slug', // 'slug' | 'term_id'
                                                'terms' => 'item1',
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
                                    <div>
                                        <span class="place">2º</span>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/placar-arrows.svg">
                                        <p>Nome Sobrenome</p>
                                    </div>
                                    <div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/placar-arrows.svg">
                                        <p>Concessionária</p>
                                    </div>
                                    <div>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/placar-arrows.svg">
                                        <p>00 pontos</p>
                                    </div>
                                </div>
                                <?php endwhile; else: endif; ?>
                                <!-- custom post type -->
                            </div>
                        </div>

                    </div>

                






                    <div class="tab-pane" id="tab-item2">Item 2</div>
                    <div class="tab-pane" id="tab-item3">Item 3</div>
                    <div class="tab-pane" id="tab-item4">Item 4</div>
                </div>
            </div> 