<?php get_header(); ?>

    <main id="top">

	    <?php if (have_posts()) : ?>
		
        <?php while (have_posts()) : the_post(); ?>

        <article itemscope itemtype="https://schema.org/Article">

        <div class="article-head">
            <small itemprop="about" class="category">
                <?php 
                    $post_type = get_post_type( $post->ID ); 
                    if ($post_type == 'tekstovi') echo '<a href="https://negabiljaka.com/tekstovi/">Tekst</a>'; 
                    if ($post_type == 'kakoda') echo '<a href="https://negabiljaka.com/kako-da/">Kako da...</a>'; 
                    if ($post_type == 'uradisam') echo '<a href="https://negabiljaka.com/uradi-sam/">Uradi sam</a>';
                    if ($post_type == 'knjige') echo '<a href="https://negabiljaka.com/knjige/">Recenzija knjige</a>';
                    if ($post_type == 'recnik') echo '<a href="https://negabiljaka.com/recnik/">Rečnik</a>';
                    if ($post_type == 'gdekupiti') echo '<a href="https://negabiljaka.com/gde-kupiti-biljke/">Gde kupiti biljke?</a>'; 
                ?>
            </small>
            <h1 itemprop="name headline" class="article-title"><?php the_title(); ?> </h1>
            <meta itemprop="about" content="<?php echo $desc ?>">
            <span class="publisher" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                    <meta itemprop="url" content="//negabiljaka.com/slike/negabiljaka-logo.png">
                    <meta itemprop="width" content="1200">
                    <meta itemprop="height" content="1200">
                </span>
                <meta itemprop="name" content="Nega Biljaka">
            </span>
            <p><strong itemprop="author"><?php echo get_the_author_meta( 'display_name' ) ?></strong> / <time itemprop="datePublished" datetime="<?php echo get_the_time('c'); ?>" content="<?php echo get_the_time('c'); ?>"><?php the_date('j. n. Y.'); ?>, ažužiran: <?php echo get_the_modified_time('j. n. Y.'); ?></time></p>
            <meta itemprop="image" content="<?php echo $image; ?>-1600x900.jpg">
        </div>
        
        <?php get_template_part('inc/social'); ?>
			
		<div itemprop="articleBody">
            <?php the_content(); ?>
        </div>
        
        <?php get_template_part('inc/patreon'); ?>
        
        </article>

		<?php endwhile; ?>
				
        <?php else : ?>
            
        <?php endif; ?>

    </main>
    
<?php get_footer(); ?>