
        <div class="share">
            <?php 
            if ( is_post_type_archive() ) $pimage = 'https://negabiljaka.com/slike/negabiljaka-pinterest.jpg';
            elseif ( $post_type == 'biljke' ) $pimage = 'https://houseplants.xyz/images/plants/' . $name . '/' . $name . '-pinterest-sr.jpg';
            elseif ( $post_type == 'tekstovi' ) $pimage = 'https://negabiljaka.com/slike/tekstovi/' . $name . '/' . $name . '-pinterest-sr.jpg';
            elseif ( $post_type == 'kakoda' ) $pimage = 'https://negabiljaka.com/slike/kako-da/' . $name . '/' . $name . '-pinterest.jpg';
            elseif ( $post_type == 'uradisam' ) $pimage = 'https://negabiljaka.com/slike/uradi-sam/' . $name . '/' . $name . '-pinterest.jpg';
            elseif ( $post_type == 'knjige' ) $pimage = 'https://negabiljaka.com/slike/knjige/' . $name . '/' . $name . '-pinterest.jpg';
            elseif ( $post_type == 'gdekupiti' ) $pimage = 'https://negabiljaka.com/slike/gde-kupiti-biljke/' . $name . '/' . $name . '-pinterest.jpg';
            else $pimage = 'https://negabiljaka.com/slike/negabiljaka-pinterest.jpg';
            ?>
        Podeli:
            <a title="Podelite tekst na Facebook-u" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>&t=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="_blank" rel="noopener noreferrer" class="facebook"><span>Facebook</span></a>
            <a title="Podelite tekst na Twitter-u" href="https://twitter.com/intent/tweet?source=webclient&amp;amp;text=<?php echo rawurlencode(strip_tags(get_the_title())) ?> <?php echo urlencode(get_permalink($post->ID)); ?>" target="_blank" rel="noopener noreferrer" class="twitter"><span>Twitter</span></a>
            <a title="Podelite tekst na Pinterest-u" href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;media=<?php echo $pimage ?>&amp;description=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="_blank" class="pinterest"><span>Pinterest</span></a>
            <a href="mailto:unesite email adresu?subject=Tekst sa <?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>&#32;&#32;<?php the_permalink(); ?>" title="Podelite tekst preko email-a" class="email"><span>E-mail</span></a>
            <a href="#" onclick="copyToClipboard();" title="Kopirajte link ka ovom tekstu" class="copy"><span>Kopiraj link</span></a>
        </div>