<?php 

    $customTaxonomyTerms = wp_get_object_terms( $post->ID, 'tip', array('fields' => 'ids') );

    //query arguments
    $args = array(
        'post_type' => 'tekstovi',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'orderby' => 'rand',
        'tax_query' => array(
            array(
                'taxonomy' => 'tip',
                'field' => 'id',
                'terms' => $customTaxonomyTerms
            )
        ),
        'post__not_in' => array ($post->ID),
    );

    //the query
    $relatedPosts = new WP_Query( $args );

    //loop through query
    if($relatedPosts->have_posts()){
        echo '<section><h3>Povezani tekstovi:</h3><div class="related-list">';
        while($relatedPosts->have_posts()){ 
            $relatedPosts->the_post();
    ?>
            <div class="card">
                <?php $imageUrl = $post->post_name; ?>
                <a href="<?php the_permalink(); ?>">
                <img src="https://negabiljaka.com/slike/tekstovi/<?php echo $imageUrl ?>/<?php echo $imageUrl ?>-200x250.jpg">
                <h4><?php the_title(); ?></h4></a>
            </div>
    <?php
        }
        echo '</div></section>';
    }else{
        //no posts found
    }

    //restore original post data
    wp_reset_postdata();
        
?>