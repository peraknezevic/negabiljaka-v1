<?php get_header(); ?>

    <main id="top">

    <?php if (have_posts()) : ?>
		
    <?php while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

        <article itemscope itemtype="https://schema.org/Article">
        
        <div class="article-head">
            <small class="category">
                <a href="https://negabiljaka.com/biljke/">Profil biljke</a>
            </small>
            <h1 itemprop="headline name" class="article-title"><?php the_title(); ?> </h1>
            <meta itemprop="about" content="<?php echo $desc ?>">
            <span class="publisher" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                    <meta itemprop="url" content="https://negabiljaka.com/slike/negabiljaka-logo.png">
                    <meta itemprop="width" content="1200">
                    <meta itemprop="height" content="1200">
                </span>
                <meta itemprop="name" content="Nega Biljaka">
            </span>
            <p><strong itemprop="author"><?php echo get_the_author_meta( 'display_name' ) ?></strong>, <time itemprop="datePublished" datetime="<?php echo get_the_time('c'); ?>" content="<?php echo get_the_time('c'); ?>"><?php the_date('j. n. Y.'); ?></time></p>
            <meta itemprop="image" content="<?php echo $image; ?>-1600x900.jpg">
        </div>
        
        <?php get_template_part('inc/social'); ?>
        
        <div itemprop="articleBody">

            <section class="plant intro">
                
                <?php 

                    if ( get_field( 'botanicki_naziv' ) ) {
                        echo '<p><strong>Botanički naziv: </strong>' . get_field( 'botanicki_naziv' ) . '</p>';
                    }

                    if ( get_field( 'sinonimi' ) ) {
                        echo '<p><strong>Sinonimi: </strong>' . get_field( 'sinonimi' ) . '</p>';
                    }

                    if ( get_field( 'imenovao' ) ) {
                        echo '<p><strong>Imenovao/la: </strong>' . get_field( 'imenovao' ) . '</p>';
                    }

                    if ( get_field( 'porodica' ) ) {
                        echo '<p><strong>Porodica: </strong>' . get_field( 'porodica' ) . '</p>';
                    }

                    if ( get_field( 'potporodica' ) ) {
                        echo '<p><strong>Potporodica: </strong>' . get_field( 'potporodica' ) . '</p>';
                    }

                    if ( get_field( 'rod' ) ) {
                        echo '<p><strong>Rod: </strong>' . get_field( 'rod' ) . '</p>';
                    }

                    if ( get_field( 'podrucje_porekla' ) ) {
                        echo '<p><strong>Područje porekla: </strong>' . get_field( 'podrucje_porekla' ) . '</p>';
                    }

                    if ( get_field( 'trgovacko_ime' ) ) {
                        echo '<p><strong>Trgovačko ime: </strong>' . get_field( 'trgovacko_ime' ) . '</p>';
                    }

                    if ( get_field( 'imenovao_kultivar' ) ) {
                        echo '<p><strong>Imenovao/la kultivar: </strong>' . get_field( 'imenovao_kultivar' ) . '</p>';
                    }

                    if ( get_field( 'patent' ) ) {
                        echo '<p><strong>Patent: </strong>' . get_field( 'patent' ) . '</p>';
                    }

                    if ( get_field( 'narodni_naziv' ) ) {
                        echo 
                        '<p><strong>Narodni nazivi: </strong>' . get_field( 'narodni_naziv' ) . '</p>';
                    }

                ?>

            </section>

            <div class="gallery">

                <figure class="main-img">
                    <img src="http://houseplants.xyz/images/plants/<?php echo $name ?>/<?php echo $name ?>-01-800x1000.jpg" alt="<?php the_title() ?> vodič za negu" id="current">
                    <figcaption><?php the_title() ?> <br> Autor slike: <?php if ( get_field( 'photo_credit' ) ) { echo get_field( 'photo_credit' ); } ?></figcaption>
                </figure>
                <div class="imgs">
                    <img src="http://houseplants.xyz/images/plants/<?php echo $name ?>/<?php echo $name ?>-01-800x1000.jpg" alt="<?php the_title() ?>">
                    <img src="http://houseplants.xyz/images/plants/<?php echo $name ?>/<?php echo $name ?>-02-800x1000.jpg" alt="<?php the_title() ?>">
                    <img src="http://houseplants.xyz/images/plants/<?php echo $name ?>/<?php echo $name ?>-03-800x1000.jpg" alt="<?php the_title() ?>">
                </div>

            </div>

            <section class="plant">
                
                <?php 

                if ( get_field( 'nega' ) ) {
                    echo 
                    '<p class="ic care"><strong>Nega: </strong>' . get_field( 'nega' ) . '</p>';
                }

                if ( get_field( 'svetlo' ) ) {
                    echo 
                    '<p class="ic light"><strong>Svetlo: </strong>' . get_field( 'svetlo' ) . '</p>';
                }

                if ( get_field( 'minimalna_temperatura' ) ) {
                    echo 
                    '<p class="ic minimum-temperature"><strong>Minimalna temperatura: </strong>' . get_field( 'minimalna_temperatura' ) . '</p>';
                }

                if ( get_field( 'optimalna_temperatura' ) ) {
                    echo 
                    '<p class="ic optimal-temperature"><strong>Optimalna temperatura: </strong>' . get_field( 'optimalna_temperatura' ) . '</p>';
                }

                if ( get_field( 'vlaznost_vazduha' ) ) {
                    echo 
                    '<p class="ic humidity"><strong>Vlažnost vazduha: </strong>' . get_field( 'vlaznost_vazduha' ) . '<span class="tooltip tooltip-mobile" data-tooltip="niska: ispod 40%, srednja: 40-60%, visoka: preko 60%"><i class="question" focusable="false" aria-hidden="true"></i></span></p>';
                }

                if ( get_field( 'zalivanje' ) ) {
                    echo 
                    '<p class="ic watering"><strong>Zalivanje: </strong>' . get_field( 'zalivanje' ) . '</p>';
                }

                if ( get_field( 'prihrana' ) ) {
                    echo 
                    '<p class="ic feeding"><strong>Prihrana: </strong>' . get_field( 'prihrana' ) . '</p>';
                }

                if ( get_field( 'supstrat' ) ) {
                    echo 
                    '<p class="ic soil"><strong>Supstrat: </strong>' . get_field( 'supstrat' ) . '</p>';
                }

                if ( get_field( 'kiselost_supstrata' ) ) {
                    echo 
                    '<p class="ic soil-ph"><strong>pH: </strong>' . get_field( 'kiselost_supstrata' ) . '<span class="tooltip tooltip-mobile" data-tooltip="kiselo: manje od 6.5, neutralno: 6.5-7.5, alkalno: preko 7.5"><i class="question" focusable="false" aria-hidden="true"></i></span></p>';
                }

                if ( get_field( 'presadivanje' ) ) {
                    echo 
                    '<p class="ic repotting"><strong>Presađivanje: </strong>' . get_field( 'presadivanje' ) . '</p>';
                }

                ?>
            
            </section>

            <section class="plant">

                <?php

                    if ( get_field( 'brzina_rasta' ) ) {
                        echo 
                        '<p class="ic speed-of-growth"><strong>Brzina rasta: </strong>' . get_field( 'brzina_rasta' ) . '</p>';
                    }

                    if ( get_field( 'velicina_odrasle_biljke' ) ) {
                        echo 
                        '<p class="ic mature-size"><strong>Veličina odrasle biljke: </strong>' . get_field( 'velicina_odrasle_biljke' ) . '</p>';
                    }

                    if ( get_field( 'cvet' ) ) {
                        echo 
                        '<p class="ic flower"><strong>Cvet: </strong>' . get_field( 'cvet' ) . '</p>';
                    }

                    if ( get_field( 'razmnozavanje' ) ) {
                        echo 
                        '<p class="ic propagation"><strong>Razmnožavanje: </strong>' . get_field( 'razmnozavanje' ) . '</p>';
                    }

                    if ( get_field( 'stetocine' ) ) {
                        echo 
                        '<p class="ic pests"><strong>Štetočine: </strong>' . get_field( 'stetocine' ) . '</p>';
                    }

                    if ( get_field( 'bolesti' ) ) {
                        echo 
                        '<p class="ic diseases"><strong>Bolesti: </strong>' . get_field( 'bolesti' ) . '</p>';
                    }

                    if ( get_field( 'toksicnost' ) ) {
                        echo 
                        '<p class="ic toxicity"><strong>Toksičnost: </strong>' . get_field( 'toksicnost' ) . '</p>';
                    }

                    ?>
    
                </section>
    
                <?php

                    if ( get_field( 'beleske' ) ) {
                        echo 
                        '<section class="plant"><p class="ic notes"><strong>Beleške: </strong><br>' . get_field( 'beleske' ) . '</p></section>';
                    }
                    
                ?>

                <?php get_template_part('inc/povezane-biljke'); ?>

            </div>

            <?php get_template_part('inc/patreon'); ?>

        </article>

    </main>

		<?php endwhile; ?>
				
        <?php else : ?>
            
        <?php endif; ?>

<?php get_footer(); ?>