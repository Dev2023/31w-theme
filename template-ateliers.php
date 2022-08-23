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
            $heure = get_field("heure");
            $nombre_dheures_par_seance = get_field("nombre_dheures_par_seance");
            $niveau_de_dificultee = get_field("niveau_de_dificultee");
            $heure = get_field("heure");
            $prix = get_field("prix");
            echo "<p class='atelier__animateur'>Animateur : " . $animateur . "</p>";
            echo "<p class='atelier__type_de_formation'>Type de formation : " . $type_de_formation . "</p>";
            echo "<p class='atelier__date_de_debut'>Date de début : " . $date_de_debut . "</p>";
            echo "<p class='atelier__duree'>Durée : " . $duree . "</p>";
            echo "<p class='atelier__heure'>L'heure : " . $heure . "</p>";
            echo "<p class='atelier__nombre_dheures_par_seance'>Nombre d'heures par séance : " . $nombre_dheures_par_seance . "</p>";
            echo "<p class='atelier__niveau_de_dificultee'>Niveau de dificultée : " . $niveau_de_dificultee . "</p>";
            echo "<p class='atelier__lieu'>Lieu : " . $lieu . "</p>";
            echo "<p class='atelier__prix'>Prix : " . $prix . "</p>";
            $image = get_field('image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" 
                    alt="<?php echo esc_attr($image['alt']); ?>" />       
                <?php endif; ?>    
    
          
        </article>
    <?php endif; ?>  
    
</main>
<?php get_footer(); ?>

