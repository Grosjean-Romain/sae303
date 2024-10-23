<?php get_header(); ?>

<div class="container">
    <h1 class="title-hero">Présidentielles Françaises
        Évolution des Données autour des Élections au cours de ces 20 dernières années (2002 - 2017)</h1>
    <p class="text-hero">Bienvenue sur notre projet d'analyse des élections présidentielles françaises. Vous trouverez ici une exploration visuelle et comparative des données électorales couvrant les deux dernières décennies, de 2002 à 2022. À travers différents graphiques interactifs, nous analysons des sujets tels que l'évolution de l'abstention, la répartition géographique des candidats majoritaires, ainsi que les résultats du second tour des élections. Notre objectif est de mieux comprendre les dynamiques électorales françaises et d'apporter des perspectives sur les tendances politiques récentes.</p>

    <div class="card-container">
        <a href="repartition" class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/graph1-2.png" alt="Titre de la carte 1">
            <h2>Répartition des Candidats Majoritaires par Département - Élection Présidentielle 2017 & 2022 </h2>
        </a>
        <a href="abstention" class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/graph3.png" alt="Titre de la carte 2">
            <h2>Évolution du Taux d'Abstention aux Élections Présidentielles en France (2002 - 2022)</h2>
        </a>
        <a href="score" class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/graph4-5.png" alt="Titre de la carte 3">
            <h2>Résultats du Deuxième Tour des Élections Présidentielles Française de 2017 et de 2022</h2>
        </a>
    </div>
        <h2>Conclusion Générale sur la Totalité de la SAÉ et sur la Totalité des Graphiques</h2>
        <p>
            Cet examen/projet " DATA·ELEC " que nous avons réalisés tous les deux (Hugo Collin et Romain Grosjean) s’inscrit dans une démarche d’analyse approfondie des élections présidentielles françaises sur les 20 dernières années (2002 - 2022). À travers une série de graphiques et d’analyses comparatives, plusieurs tendances majeures ont été dégagées, et ces dernières mettent en lumière des dynamiques politiques clés, notamment en ce qui concerne la répartition géographique des partis, la participation électorale, l’évolution de l'abstention, ainsi que l'ascension de certaines figures politiques comme Marine Le Pen et Emmanuel Macron...
        </p>
        <h3>Principaux Points Analytiques</h3>
        <ul class="liste">
            <li><strong>Évolution de l'Abstention :</strong> L’abstention est l’un des indicateurs centraux de la désaffection politique en France. Notre projet a montré une augmentation progressive de l’abstention lors des premiers tours, avec des pics plus marqués pour les seconds tours, en particulier lors des élections de 2022. Cette tendance est révélatrice d’un désengagement croissant des citoyens vis-à-vis du processus démocratique, notamment lors des premiers tours où l'enjeu est perçu comme moins décisif.</li>
            <li><strong>Répartition des Candidats Majoritaires :</strong> Les graphiques représentant les candidats majoritaires par département permettent de visualiser l'évolution géographique des soutiens politiques. Par exemple, Marine Le Pen a progressivement étendu son influence dans de nombreux départements entre 2017 et 2022, tandis qu'Emmanuel Macron a consolidé son électorat dans certaines régions clé. Cette répartition illustre une relative polarisation de l'électorat français.</li>
            <li><strong>Comparaison des Résultats du Second Tour (2017 et 2022) :</strong> Les comparaisons entre les résultats du second tour montrent une progression significative de Marine Le Pen entre les deux élections. Avec environ 10 millions de voix en 2017, elle a augmenté à 13,3 millions en 2022. De son côté, Emmanuel Macron, bien qu'il ait remporté les deux élections, a vu une diminution de son soutien en passant de plus de 20 millions de voix à environ 18,7 millions. Cette évolution reflète un recul progressif du soutien à Macron, probablement en lien avec les crises qu'il a dû gérer durant son mandat (Gilets Jaunes, pandémie, inflation).</li>
            <li><strong>Polarisation Politique et Montée de l'Extrême Droite :</strong> Notre analyse met en évidence une polarisation croissante du paysage politique français. La montée en puissance de l'extrême droite est particulièrement marquée dans l'évolution des scores de Marine Le Pen. L’institutionnalisation de son parti, rebaptisé Rassemblement National, et la progression de son discours dans certaines classes sociales montrent un changement profond dans l’électorat et de leurs politiques aussi sur cet aspect.</li>
        </ul>
        <h3>Conclusion et Perspectives</h3>
        <p>Notre projet montre qu’au-delà de simples fluctuations électorales, la tendance générale est celle d'une société de plus en plus divisée, avec une montée en puissance des partis aux extrêmes et une érosion de la confiance dans les partis traditionnels, y compris chez les électeurs de Macron. Les dynamiques que nous avons analysées permettent d’anticiper une possible évolution similaire pour les prochaines élections françaises, notamment les prochaines élections présidentielles de 2027, où l'abstention pourrait encore jouer un rôle clé (ou au contraire un fort taux de participation puisque les gens reviennent plus aux urnes depuis les élections législatives et européennes de 2024), tout comme la progression de l'extrême droite. Quoiqu'il en soit, ce projet nous a permis de dégager des tendances électorales importantes, que ce soit en termes de participation ou de soutien aux candidats. L’évolution des votes entre 2002 et 2022 offre une perspective intéressante sur le paysage politique français et sur les possibles dynamiques à venir pour les prochaines élections. Cette analyse des élections présidentielles sur 20 ans a permis de dégager des tendances essentielles pour comprendre les enjeux actuels du paysage politique français et donc l'avenir pour de futures données !</p>
    </div>

<?php get_footer(); ?>