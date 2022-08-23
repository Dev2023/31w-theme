<?php get_header(); ?> 
<section class="site__main">
    <div class="blocs__horizontaux">
        <!-- <h1>Category-cours.php</h1> -->
        <article class="cours__article">
            <?php
            if (have_posts()):
                while(have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php $lien = " ... <a class='bouton' href='" 
                            . get_permalink()  
                            . "'>"
                            . substr(get_the_title(),0,8) 
                            ."</a>"; 

            ?>
            <p><?= wp_trim_words(get_the_content(), 20, $lien) ?></p>

                <?php endwhile; ?>
            <?php endif; ?>
        </article>
    </div>    
</section>
<?php get_footer(); ?>