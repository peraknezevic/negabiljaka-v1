<footer>
    <p>Pratite nas na: <a class="facebook" href="https://www.facebook.com/negabiljaka" title="Nega biljaka na Facebooku">Facebooku</a> <a class="instagram" href="https://www.instagram.com/negabiljaka" title="Nega biljaka na Instagramu">Instagramu</a> <a class="twitter" href="https://www.twitter.com/negabiljaka" title="Nega Biljaka na Twitteru">Twitteru</a> <a class="pinterest" href="https://www.pinterest.com/negabiljaka" title="Nega biljaka na Pinterestu">Pinterestu</a> <a class="patreon" href="https://www.patreon.com/houseplants" title="Nega Biljaka na Patreonu">Patreonu</a></p>
    <nav class="footer-nav">
        <ul>
            <li><a href="https://negabiljaka.com/politika-privatnosti/">Politika privatnosti</a></li>
            <li><a href="mailto:negabiljaka@gmail.com">Kontakt</a></li>
            <li>
                <?php 
                if ( is_home() ) echo '<a href="https://houseplants.xyz" class="english">English</a>'; 
                else if ( is_post_type_archive( $post_types = 'biljke' )) echo '<a href="https://houseplants.xyz/plants/" class="english">English</a>'; 
                else if ( is_post_type_archive( $post_types = 'kakoda' )) echo '<a href="https://houseplants.xyz/how-to/" class="english">English</a>'; 
                else if ( is_post_type_archive( $post_types = 'tekstovi' )) echo '<a href="https://houseplants.xyz/articles/" class="english">English</a>'; 
                else if ( is_post_type_archive( $post_types = 'uradisam' )) echo '<a href="https://houseplants.xyz/do-it-yourself/" class="english">English</a>'; 
                else if ( is_post_type_archive( $post_types = 'knjige' )) echo '<a href="https://houseplants.xyz/books/" class="english">English</a>'; 
                else if ( is_post_type_archive( $post_types = 'gdekupiti' )) echo '<a href="https://houseplants.xyz/where-to-buy-plants/" class="english">English</a>'; 
                else if ( is_post_type_archive( $post_types = 'recnik' )) echo '<a href="https://houseplants.xyz/glossary/" class="english">English</a>'; 
                else if ( get_field( 'english' ) ) echo  '<a href="' . get_field( 'english' ) . '" class="english">English</a>';  
                else echo '<a href="https://houseplants.xyz" class="english">English</a>'; 
                ?>
            </li>
        </ul>
    </nav>
    <p>&copy; 2021 Pera Knezevic. Sva prava zadržana.</p>
</footer>
<?php wp_footer(); ?>
<?php if ( is_singular( 'biljke' ) ) { echo '<script type="text/javascript" src="https://houseplants.xyz/js/gallery.min.js">'; } ?>
<script type="text/javascript" id="cookieinfo" src="https://houseplants.xyz/js/scripts.min.js" data-message="Kako bismo poboljšali vaše iskustvo na veb sajtu koristimo kolačiće (cookies)." data-linkmsg="Politika privatnosti" data-moreinfo="https://negabiljaka.com/politika-privatnosti/" data-bg="#fff" data-font-family="'Inter', sans-serif;" data-link="#0E260D" data-divlinkbg="#fff"></script>
</body>
</html>