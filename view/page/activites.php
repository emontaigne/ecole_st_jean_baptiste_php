<div class="container2">
    <div class="header-img-acti" id="header-img"></div>
    <div class="div-rose activites-rose">
        <a href="">
            <h1 class="activ-titre">Activités</h1>
        </a>

        <div class="fleche-retour-info"><a href="?section=accueil">Accueil</a>><a href="?section=info"> Informations générales</a>><a href="?section=activites">Activités</a></div>
    </div>

    <div class="texte-info-activites">

        <div class="activity-cards-info">
            <a <?php
                if (isset($_SESSION["login"])) {
                    echo ' href="?section=galerie"';
                } else {
                    echo ' href="?section=connexion"';
                }
                ?> class="activites-lien-photo-card">
                <div class="activity-card-info acti-ponctuelle">
                    <div class="activity-card-info-img"></div>
                    <div class="activity-card-info-text">
                        <h3>Activité</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat veritatis accusantium id fugit doloremque, ea maiores! Fugiat, molestiae repellendus! Maiores. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat veritatis accusantium id fugit doloremque, ea maiores! Fugiat, molestiae repellendus! Maiores.</p>
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
                <div class="activity-card-info acti-ponctuelle">
                    <div class="activity-card-info-img"></div>
                    <div class="activity-card-info-text">
                        <h3>Activité</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat veritatis accusantium id fugit doloremque, ea maiores! Fugiat, molestiae repellendus! Maiores.</p>
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
                <div class="activity-card-info acti-ponctuelle">
                    <div class="activity-card-info-img"></div>
                    <div class="activity-card-info-text">
                        <h3>Activité</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat veritatis accusantium id fugit doloremque, ea maiores! Fugiat, molestiae repellendus! Maiores.</p>
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
                <div class="activity-card-info acti-permanente">
                    <div class="activity-card-info-img"></div>
                    <div class="activity-card-info-text">
                        <h3>Activité</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat veritatis accusantium id fugit doloremque, ea maiores! Fugiat, molestiae repellendus! Maiores.</p>
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
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat veritatis accusantium id fugit doloremque, ea maiores! Fugiat, molestiae repellendus! Maiores.</p>
                        <p class="section-activites-photo-lien">Voir les photos <i class="fas fa-arrow-right"></i></p>
                    </div>
                </div>
            </a>
        </div>

        <div class="info-onglet" id="activites">
            <h3><a name="acti">Les activités</a></h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est
                quibusdam perferendis, obcaecati aperiam, earum voluptates aliquid
                praesentium eum pariatur eligendi, rem officia porro vero a sapiente
                error iusto neque odit.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In
                temporibus consectetur dicta aliquid, iusto laborum rem praesentium
                fugiat nam aut exercitationem, saepe corrupti, mollitia dignissimos
                libero fugit! Ex, culpa consectetur?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                doloribus dolorum eius a, quisquam recusandae distinctio amet
                aspernatur ut ullam corporis ea ipsum nesciunt, quidem ipsa facere
                libero tempore assumenda!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                doloribus dolorum eius a, quisquam recusandae distinctio amet
                aspernatur ut ullam corporis ea ipsum nesciunt, quidem ipsa facere
                libero tempore assumenda!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                doloribus dolorum eius a, quisquam recusandae distinctio amet
                aspernatur ut ullam corporis ea ipsum nesciunt, quidem ipsa facere
                libero tempore assumenda!
            </p>
        </div>
    </div>