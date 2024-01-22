<?php get_header(); ?>

<main id="top">

<article itemscope itemtype="https://schema.org/Article">

<?php while(have_posts()) {
        the_post(); ?>
        <div class="article-head">
            <h1 class="article-title"><?php the_title(); ?></h1>
            <p>Published on <time itemprop="datePublished" datetime="<?php echo get_the_time('c'); ?>" content="<?php echo get_the_time('c'); ?>"><?php the_date('F jS Y'); ?>, updated on <?php echo get_the_modified_time('F jS Y'); ?></time></p>
        </div>
        <div itemprop="articleBody">
        <?php the_content(); ?>
        </div>
        
    <?php }

?>

</article>

</main>
    
<?php get_footer(); ?>