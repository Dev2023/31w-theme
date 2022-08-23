<?php get_header(); ?> 
<section class="site__main">
    <!--  <div class="blocs__horizontaux"></div> -->
        <!-- <h1>Category-cours.php</h1> -->
       
            <?php
            if (have_posts()):
                while(have_posts()) : the_post(); ?> 
                <article class="cours__article"></article>
                   <!-- --> <h2><?php  the_title();  ?></h2> 
                    <?php $lien = " ... <a class='bouton' href='" 
                            . get_permalink()  
                            . "'>"
                            . substr(get_the_title(),0,8) 
                            ."</a>"; 

            ?>
            <p><?= wp_trim_words(get_the_content(), 20, $lien) ?></p>

                <?php endwhile; ?>
            <?php endif; ?>
        
       
</section>
<?php get_footer(); ?>