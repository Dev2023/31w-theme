<?php get_header(); ?> 
<section class="site__main">
    <h1>Yordan WP</h1>
    <div class="blocs__horizontaux">
        <?php
        if (have_posts()):
            while(have_posts()) : the_post(); ?>
                <article>
                    <div>
                        <?php $image = get_field('image');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <h2><a href="<?=get_permalink() ?>"><?php the_field('titre'); ?></a></h2>
                    <h3><?php the_field('sous_titre')?></h3>
                    <p><?php the_field('resume')?></p>
                </article>
            <?php endwhile; ?>
        <?php endif; ?> 
    </div> 
    <div>
        <?php wp_nav_menu(array(
                    'menu' => 'menu accueil',
                    'container' => 'nav',
                    
                    )); ?>
    </div>
</section> 

<?php get_footer(); ?>

