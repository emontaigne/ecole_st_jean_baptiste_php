<div class="container2">
    <div class="header-img-acti" id="header-img"></div>
    <div class="div-rose activites-rose">
        <a href="">
            <h1 class="activ-titre">Activités</h1>
        </a>

        <div class="fleche-retour-info"><a href="?section=accueil">Accueil</a>><a href="?section=info"> Informations générales</a>><a href="?section=activites">Activités</a></div>
    </div>

    <div class="texte-info-activites">
    <div class="info-onglet" id="activites">
            <p>Nous accompagnerons les élèves dans une pédagogie active pour les amener à devenir des êtres responsables. Les activités viseront la curiosité, l'émerveillement, tout en utilisant la demarche scientifique.
            </p>
            <p>
            Tous les exemples qui seront cités le sont à titre indicatif et sont susceptibles d'être modifiés ou enrichis en fonction des projets de l'année. Les enfants auront ainsi l'occasion d'explorer un maximum de ces activités au cours de leur scolarité dans notre établissement.

Nous leur preparons les milles joies de la découverte!
            </p>
            <p> Concrètement, voici ce que nous allons mettre en place:</p>
        </div>

        <h3>Activités ponctuelles</h3>
        <div class="activity-cards-info">
            <a <?php
                if (isset($_SESSION["login"])) {
                    echo ' href="?section=galerie"';
                } else {
                    echo ' href="?section=connexion"';
                }
                ?> class="activites-lien-photo-card">
                <div class="activity-card-info acti-ponctuelle-1">
                    <div class="activity-card-info-img danse-ecole"></div>
                    <div class="activity-card-info-text">
                        <h3>Danse à l’école</h3>
                        <p>Toutes les activités d’expression à but artistique, à savoir les rondes, le mime, la danse ou les jeux dansés, permettent à l’enfant à travers des gestes maîtrisés de s’exprimer et le développer son imaginaire.</p>
                        <p class="section-activites-photo-lien">Voir les photos <i class="fas fa-arrow-right"></i></p>
                    </div>
                </div>
            </a>

        </div>
        <div class="activity-cards-info">
            <a <?php
                if (isset($_SESSION["login"])) {
                    echo ' href="?section=galerie"';
                } else {
                    echo ' href="?section=connexion"';
                }
                ?> class="activites-lien-photo-card">
                <div class="activity-card-info acti-ponctuelle-2">
                    <div class="activity-card-info-img balade-image"></div>
                    <div class="activity-card-info-text">
                        <h3>Balade en forêt</h3>
                        <p>Qu'il trône dans le jardin, au coin de la rue, ou entouré d'autres au parc ou en forêt, l'arbre vit et est un point d'ancrage important dans les relations de l'homme à la nature.</p>
                        <p class="section-activites-photo-lien">Voir les photos <i class="fas fa-arrow-right"></i></p>

                    </div>
                </div>
            </a>

        </div>

        <div class="activity-cards-info">
            <a <?php
                if (isset($_SESSION["login"])) {
                    echo ' href="?section=galerie"';
                } else {
                    echo ' href="?section=connexion"';
                }
                ?> class="activites-lien-photo-card">
                <div class="activity-card-info acti-ponctuelle-3">
                    <div class="activity-card-info-img"></div>
                    <div class="activity-card-info-text">
                        <h3>Pédagogie Montessori</h3>
                        <p>Cette belle méthode consiste à favoriser la confiance en soi et l’autonomie en respectant le rythme de l’enfant. Elle place l’enfant au centre des apprentissages. L’enfant va manipuler avec ses 5 sens et tout cela avec du matériel adapté.</p>
                        <p class="section-activites-photo-lien">Voir les photos <i class="fas fa-arrow-right"></i></p>

                    </div>
                </div>
            </a>
        </div>

        <h3>Activités permanentes</h3>
        <div class="activity-cards-info">
            <a <?php
                if (isset($_SESSION["login"])) {
                    echo ' href="?section=galerie"';
                } else {
                    echo ' href="?section=connexion"';
                }
                ?> class="activites-lien-photo-card">
                <div class="activity-card-info acti-permanente">
                    <div class="activity-card-info-img"></div>
                    <div class="activity-card-info-text">
                        <h3>Visite de l'Académie de musique</h3>
                        <p>L'école St Jean-Baptiste amène les enfants à l'Académie de musique. Ils font une découverte sensorielle, explorant les posibilités du son et du rythme à travers les différents instruments.</p>
                        <p class="section-activites-photo-lien">Voir les photos <i class="fas fa-arrow-right"></i></p>

                    </div>
                </div>
            </a>
        </div>

        <h3>Voyages</h3>
        <div class="activity-cards-info">
            <a <?php
                if (isset($_SESSION["login"])) {
                    echo ' href="?section=galerie"';
                } else {
                    echo ' href="?section=connexion"';
                }
                ?> class="activites-lien-photo-card">
                <div class="activity-card-info acti-verte">
                    <div class="activity-card-info-img"></div>
                    <div class="activity-card-info-text">
                        <h3>Classes vertes</h3>
                        <p>Une année sur deux (pas cette année-ci), les élèves de 1ère, 2ème , 3 ème et 4ème primaires partent 5 jours en classes vertes. Le prochain voyage se déroulera à Wellin du 15 au 19 mars 2021.</p>
                        <p class="section-activites-photo-lien">Voir les photos <i class="fas fa-arrow-right"></i></p>

                    </div>
                </div>
            </a>
        </div>

        <div class="activity-cards-info">
            <a <?php
                if (isset($_SESSION["login"])) {
                    echo ' href="?section=galerie"';
                } else {
                    echo ' href="?section=connexion"';
                }
                ?> class="activites-lien-photo-card">
                <div class="activity-card-info acti-neige">
                    <div class="activity-card-info-img"></div>
                    <div class="activity-card-info-text">
                        <h3>Classes de neige</h3>
                        <p>Une année sur deux (pas cette année-ci), les élèves de 5ème et 6ème primaires partiront 8 jours en classes de neige.
                        Le prochain voyage aura lieu dans le courant du 2ème trimestre de l’année scolaire 2020-2021. </p>
                        <p class="section-activites-photo-lien">Voir les photos <i class="fas fa-arrow-right"></i></p>
                    </div>
                </div>
            </a>
        </div>
    </div>