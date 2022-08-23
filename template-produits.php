<?php
   /** 
    * Template name: Produits
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
            $nom_du_produit = get_field("nom_du_produit");
            $categorie = get_field("categorie");
            $prix = get_field("prix");
            $description = get_field("description");
            echo "<p class='produit__nom'>Nom du produit : " . $nom_du_produit . "</p>";
            echo "<p class='produit__categorie'>Categorie : " . $categorie . "</p>";
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

