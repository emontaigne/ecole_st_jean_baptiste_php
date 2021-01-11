<div class = "container2">
<div class="containerGarderie">
<div class="boxGarderie">

    <div class="flexGarderie">
    <div class="imgGarderie">
        <img src="public/images/gardiennes.png" alt="photo des gardiennes" class="img-gardiennes">
    </div>
    <div class="textGarderie" id="textGarderie">
    <h3 class="page-garderie-texte">Dites bonjour à nos gardiennes : Marie jo et Joëlle</h3>
           
           <p class="page-garderie-texte">
           Nos deux gardiennes, Marie jo et Joëlle assurent un accueil à caractère familial pour les enfants de notre école.
           <br>
           Nous leur offrons des conditions de vie saines avant et après l’école. Nous faisons partie intégrante de l’équipe d’encadrement et assurons non seulement une fonction de surveillance mais aussi d’éveil.</p>
           <p class="page-garderie-texte">
                Après le départ des institutrices, l’école nous est confiée avec les quelques enfants qui restent. Durant notre temps de travail, nous nous chargeons de l’aspect socialisation de vos enfants et de leur développement psychologique en groupe.
            </p>

            <p class="page-garderie-texte">
                Nous assurons aussi un rôle éducatif qui vise l’épanouissement individuel de chacun des enfants au sein du groupe. Pour cela, nous proposons des jeux et des activités comme, par exemple, des exercices de psychomotricité, des jeux d’adresses, et cela tout en apportant une attention particulière à l’adaptation des nouveaux arrivants, afin de réussir leur intégration dans le groupe et alléger la lourdeur de leur attente.
            </p>
    </div>
    </div>

    <div class="garderiePartie2">
   

        <div class=" all-garderie coordonneesGarderie">
        <h3>Coordonnées</h3>
           <p> 21, Rue du Cimetière 
               <br>1421 Ophain B-S-I </p>
           <p> Tél. : 023844399 </p>       
            <p>E-mail :  direction.ecoleannemarie@yahoo.fr </p> 
            <h3>Heures d'ouvertures</h3>
               <p>Tous les matins <br>De 7h à 8h30 </p>
               <p>Tous les soirs <br>De 15h30 à 18h </p>
        </div>

        <div class=" all-garderie msgGarderie">
            <h3>Message en ligne</h3>
            <form action="#" method="post" id="formGarderie">
                <div>
                    
                        <label for="kid" class="label-form-garderie">Nom et classe de l'enfant*:</label>
                        <input type="text" name="kid" id="kid-garderie" class="input-form-garderie" value="
                        <?php 
                  if (isset ($_SESSION["nom"], $_SESSION["prenom"], $_SESSION["classes"])) {
                    echo $_SESSION["nom"] . " " . $_SESSION["prenom"] . " " . $_SESSION["classes"];
                  }
                   ?>

                        " required />
                      </div>
                   
                <div>
              <label for="email" class="label-form-garderie"> Votre adresse email*:</label>
              <input type="text" name="mail" id="email" maxlenght="100" class="input-form-garderie" value="" required />
            </div>
            <div>
                  <label for="message" class="label-form-garderie">Votre message*:</label>
                  <input type="text" maxlenght="500" id="message-box-garderie" class="input-form-garderie"required value="" name="message"/>
                </div>
                <button type="reset" class="btnDeleteGarderie">Effacer</button>
                <button type="submit" id="btnSubmitGarderie" class="btnSubmitGarderie">
                  Envoyer
                </button>
                <div>
                <span><?= $etat;?></span>
                </div>
              </form>
              
        </div>

    </div>
</div>
</div>
</div>
