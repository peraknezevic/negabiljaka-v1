<?php get_header(); ?>

<main id="top">

<section>

    <h1 class="archive">
        <span>
        <?php 
            $post_type = get_post_type( $post->ID ); 
            if ($post_type == 'biljke') echo 'Profili biljaka';
            if ($post_type == 'kakoda') echo 'Kako da...'; 
            if ($post_type == 'tekstovi') echo 'Tekstovi'; 
            if ($post_type == 'uradisam') echo 'Uradi sam';
            if ($post_type == 'knjige') echo 'Recenzije knjiga';
            if ($post_type == 'recnik') echo 'Rečnik';
            if ($post_type == 'gdekupiti') echo 'Gde kupiti biljke'; 
        ?>
        </span>
    </h1>

    <div class="<?php if ($post_type == 'recnik') echo 'glossary-list'; else echo 'articles-list'?>">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="card">
        <a href="<?php the_permalink() ?>">
        <?php 
            $ime = $post->post_name;
            $alt = $post->post_title;
            if ($post_type == 'biljke') echo '<img src="https://houseplants.xyz/images/plants/' . $ime . '/' . $ime . '-01-400x500.jpg" width="400" height="500" alt="' . $alt . ' vodič za negu"></a>';
            if ($post_type == 'tekstovi') echo '<img src="https://negabiljaka.com/slike/tekstovi/' . $ime . '/' . $ime . '-400x500.jpg" width="400" height="500" alt="' . $alt . '"></a>';
            if ($post_type == 'kakoda') echo '<img src="https://negabiljaka.com/slike/kako-da/' . $ime . '/' . $ime . '-01-400x500.jpg" width="400" height="500" alt="' . $alt . '"></a>';
            if ($post_type == 'uradisam') echo '<img src="https://negabiljaka.com/slike/uradi-sam/' . $ime . '/' . $ime . '-01-400x500.jpg" width="400" height="500" alt="' . $alt . '"></a>';
            if ($post_type == 'knjige') echo '<img src="https://negabiljaka.com/slike/knjige/' . $ime . '/' . $ime . '-01-400x500.jpg" width="400" height="500" alt="' . $alt . '"></a>';
            if ($post_type == 'gdekupiti') echo '<img src="https://negabiljaka.com/slike/gde-kupiti/' . $ime . '/' . $ime . '-01-400x500.jpg" width="400" height="500" alt="' . $alt . '"></a>';
            ?>
            <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2>
        </a>  
    </div>

    <?php endwhile; ?>

    </div>

    <div class="row">
        <?php
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => '&#8592;',
                'next_text' => '&#8594;',
            ) );
        ?>
    </div>

    <?php endif; ?>
        
</section>

</main>
    
<?php get_footer(); ?>