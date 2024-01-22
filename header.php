<!DOCTYPE html> 
<html lang="sr">
        <?php 
        global $image;
        global $desc;
        $name = $post->post_name;
        $post_type = get_post_type( $post->ID ); 
        $wp_title_tag = wp_title( '', '', 'false' );

        if ( is_home() ) $permalink = "https://negabiljaka.com";
        elseif ( is_tax() ) $permalink = get_term_link( get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
        elseif ( is_post_type_archive() ) $permalink = get_post_type_archive_link( get_query_var('post_type') ); 
        else $permalink = get_permalink();

        if (get_field('description')) $desc = get_field('description'); else $desc = 'Sve o sobnim biljkama';

        if (get_field('keywords')) $keys = get_field('keywords'); else $keys = 'biljke, sobne biljke, nega biljaka, tropske biljke';

        if ( is_home() ) $title_tag = 'Sve o sobnim biljkama &ndash; Nega biljaka';
        elseif ( is_post_type_archive('biljke') ) $title_tag = 'Profili biljaka &ndash; Nega biljaka';
        elseif ( is_post_type_archive('kakoda') ) $title_tag = 'Kako da... tekstovi &ndash; Nega biljaka';
        elseif ( is_post_type_archive('tekstovi') ) $title_tag = 'Tekstovi &ndash; Nega biljaka';
        elseif ( is_post_type_archive('uradisam') ) $title_tag = 'Uradi sam tekstovi &ndash; Nega biljaka';
        elseif ( is_post_type_archive('knjige') ) $title_tag = 'Knjige o biljkama &ndash; Nega biljaka';
        elseif ( is_post_type_archive('recnik') ) $title_tag = 'Rečnik &ndash; Nega biljaka'; 
        elseif ( is_post_type_archive('gdekupiti') ) $title_tag = 'Gde kupiti biljke? &ndash; Nega biljaka';
        elseif ( $post_type == 'biljke' ) $title_tag = $wp_title_tag . ' profil biljke &ndash; Nega biljaka';
        else $title_tag = $wp_title_tag . ' &ndash; Nega biljaka';

        if ( is_post_type_archive() ) $image = 'https://negabiljaka.com/slike/negabiljaka';
        elseif ( $post_type == 'biljke' ) $image = 'https://houseplants.xyz/images/plants/' . $name . '/' . $name;
        elseif ( $post_type == 'tekstovi' ) $image = 'https://negabiljaka.com/slike/tekstovi/' . $name . '/' . $name;
        elseif ( $post_type == 'kakoda' ) $image = 'https://negabiljaka.com/slike/kako-da/' . $name . '/' . $name;
        elseif ( $post_type == 'uradisam' ) $image = 'https://negabiljaka.com/slike/uradi-sam/' . $name . '/' . $name;
        elseif ( $post_type == 'knjige' ) $image = 'https://negabiljaka.com/slike/knjige/' . $name . '/' . $name;
        elseif ( $post_type == 'gdekupiti' ) $image = 'https://negabiljaka.com/slike/gde-kupiti-biljke/' . $name . '/' . $name;
        else $image = 'https://negabiljaka.com/slike/negabiljaka';
 
        ?>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title_tag ?></title>
        <meta name="description" content="<?php echo $desc; ?>">
        <meta name="keywords" content="<?php echo $keys; ?>">
        <meta name="author" content="Pera Knezevic, Nega biljaka">
        <meta property="fb:app_id" content="208062811008961">
        <meta name='application-name' content='Nega biljaka'>
        <meta property="og:locale" content="sr_RS">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo $title_tag ?>">
        <meta property="og:description" content="<?php echo $desc; ?>">
        <meta property="og:url" content="<?php echo $permalink; ?>">
        <meta property="og:site_name" content="Nega biljaka">
        <meta property="og:image" content="<?php echo $image; ?>-og-sr.jpg">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="article:published_time" content="<?php echo get_the_time('c'); ?>">
        <meta property="article:author" content="Pera Knezevic, Houseplants">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@negabiljaka">
        <meta name="twitter:creator" content="@negabiljaka">
        <meta name="twitter:title" content="<?php echo $title_tag ?>">
        <meta name="twitter:description" content="<?php echo $desc; ?>">
        <meta name="twitter:image" content="<?php echo $image; ?>-og-sr.jpg">
        <link rel="stylesheet" href="https://houseplants.xyz/css/styles.min.css">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168683776-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-168683776-1');
        </script>
        <script data-ad-client="ca-pub-9235770621852756" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="https://negabiljaka.com/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://negabiljaka.com/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://negabiljaka.com/favicon-16x16.png">
        <link rel="manifest" href="https://negabiljaka.com/site.webmanifest">
        <link rel="mask-icon" href="https://negabiljaka.com/safari-pinned-tab.svg" color="#19322f">
        <meta name="apple-mobile-web-app-title" content="Nega biljaka">
        <meta name="application-name" content="Nega biljaka">
        <meta name="msapplication-TileColor" content="#19322f">
        <meta name="theme-color" content="#19322f">
    </head>
    
    <body>

    <button onclick="topFunction()" id="backtotop" title="Vrati na početak">&uarr;</button>

    <header>

        <div class="logo"><a href="<?php home_url() ?>/">Nega Biljaka</a></div>

        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

        <nav class="header-nav">
            <ul role="navigation" aria-label="Main" class="main-nav">
                <li><a href="https://negabiljaka.com/biljke/">Biljke</a></li>
                <!--<li><a href="https://negabiljaka.com/kako-da/">Kako da</a></li> -->
                <li><a href="https://negabiljaka.com/tekstovi/">Tekstovi</a></li>
                <!--<li><a href="https://negabiljaka.com/uradi-sam/">Uradi sam</a></li>
                <li><a href="https://negabiljaka.com/knjige/">Knjige</a></li>
                <li><a href="https://negabiljaka.com/recnik/">Rečnik</a></li>
                <li><a href="https://negabiljaka.com/gde-kupiti-biljke/">Gde kupiti</a></li>-->
            </ul>
            <ul class="social-links">
                <li><a class="instagram" href="https://www.instagram.com/negabiljaka" title="Nega Biljaka na Instagramu"><span>Instagram</span></a></li>
                <li><a class="facebook" href="https://www.facebook.com/negabiljaka" title="Nega Biljaka na Facebooku"><span>Facebook</span></a></li>
                <li><a class="twitter" href="https://www.twitter.com/negabiljaka" title="Nega Biljaka na Twitteru"><span>Twitter</span></a></li>
                <li><a class="pinterest" href="https://www.pinterest.com/negabiljaka" title="Nega Biljaka na Pinterestu"><span>Pinterest</span></a></li>
                <li><a class="patreon" href="https://www.patreon.com/houseplants" title="Nega Biljaka on Patreonu"><span>Patreon</span></a></li>
            </ul>
        </nav>

    </header>
    