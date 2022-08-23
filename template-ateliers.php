<?php
   /** 
    * Template name: Ateliers
    * 
    */
?>
<?php get_header(); ?>

<main class="site__main">
    <mark>Produits en vedette</mark>
        <?php if (have_posts()): the_post(); ?>

        <article class="produit__article">
            <h1><?= get_the_title(); ?></h1>
        <?php the_content(); ?> 
            <?php
            $animateur = get_field("animateur");
            $type_de_formation = get_field("type_de_formation");
            $date_de_debut = get_field("date_de_debut");
            $duree = get_field("duree");
            $date_de_debut = get_field("date_de_debut");
            $date_de_debut = get_field("date_de_debut");
            $prix = get_field("prix");
            echo "<p class='animateur'>Animateur : " . $animateur . "</p>";
            echo "<p class='type_de_formation'>type_de_formation : " . $type_de_formation . "</p>";
            echo "<p class='animateur'>Animateur : " . $animateur . "</p>";
            echo "<p class='produit__prix'>Prix : " . $date . "</p>";
            /* echo "<p class='produit__heure'>L'heure : " . $heure . "</p>"; */
            echo "<p class='produit__description'>Description : " . $description . "</p>";
            
            $image = get_field('image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>   
            
        </article>
    <?php endif; ?>
    
</main>
<?php get_footer(); ?>

