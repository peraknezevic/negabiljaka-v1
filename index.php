<?php get_header(); ?>

<main id="top">

<section>

    <h1 class="archive">Najnovije</h1>

    <div class="articles-list type">
        <?php $args = array( 'post_type' => array('biljke', 'tekstovi', 'kakoda', 'uradisam'), 'numberposts' => 12, 'order' => 'DES', 'orderby' => 'date' );
        $myposts = get_posts( $args ); foreach( $myposts as $post ) :	setup_postdata($post); ?>
        <div class="card">
            <a href="<?php the_permalink(); ?>">
                <?php $post_type = get_post_type( $post->ID ); 
                $ime = $post->post_name;
                $alt = $post->post_title;
                if ($post_type == 'biljke') echo '<img src="https://houseplants.xyz/images/plants/' . $ime . '/' . $ime . '-01-400x500.jpg" width="400" height="500" alt="' . $alt . ' vodič za negu"></a><small><strong>Profil biljke</strong>'; 
                if ($post_type == 'tekstovi') echo '<img src="https://negabiljaka.com/slike/tekstovi/' . $ime . '/' . $ime . '-400x500.jpg" width="400" height="500" alt="' . $alt . '"></a><small><strong>Tekstovi</strong>'; 
                if ($post_type == 'kakoda') echo '<img src="https://negabiljaka.com/slike/kako-da/' . $ime . '/' . $ime . '-01-400x500.jpg" width="400" height="500" alt="' . $alt . '"></a><small><strong>Kako da...</strong>'; 
                if ($post_type == 'uradisam') echo '<img src="https://negabiljaka.com/slike/uradi-sam/' . $ime . '/' . $ime . '-01-400x500.jpg" width="400" height="500" alt="' . $alt . '"></a><small><strong>Uradi sam</strong>';
                if ($post_type == 'knjige') echo '<img src="https://negabiljaka.com/slike/knjige/' . $ime . '/' . $ime . '-01-400x500.jpg" width="400" height="500" alt="' . $alt . '"></a><small><strong>Knjige</strong>';  
                ?>
            <!--<time><?php the_date('j. m. Y.') ?></time>--></small>
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        </div>
        <?php endforeach; ?>
    </div>

</section>

</main>
    
<?php get_footer(); ?>