<?php get_header(); ?>

<div class="container">
    <h1>Présidentielles Françaises
        Évolution des Données autour des Élections au cours de ces 20 dernières années (2002 - 2017)</h1>
    <p>Ceci est un texte de présentation. Vous trouverez ici des informations intéressantes.</p>

    <div class="card-container">
        <a href="lien_vers_page_1" class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/graph1-2.png" alt="Titre de la carte 1">
            <h2>Répartition des Candidats Majoritaires par Département - Élection Présidentielle 2017 & 2022 </h2>
        </a>
        <a href="lien_vers_page_2" class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/graph3.png" alt="Titre de la carte 2">
            <h2>Évolution du Taux d'Abstention aux Élections Présidentielles en France (2002-2022)</h2>
        </a>
        <a href="lien_vers_page_3" class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/graph4-5.png" alt="Titre de la carte 3">
            <h2>Résultats du Deuxième Tour des Élections Présidentielles Française de 2017 & de 2022</h2>
        </a>
    </div>
</div>

<?php get_footer(); ?>
