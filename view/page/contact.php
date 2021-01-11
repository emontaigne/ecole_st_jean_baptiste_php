<div class = "container2">
<div class="containerContact">
      <div class="formulaireContact">
        <h2>NOUS CONTACTER</h2>

        <p>
          Besoin de nous poser une question, d'avoir un renseignement concernant
          nos services ou de nous transmettre une remarque ? Prenez-contact avec
          nous.
        </p>
        <div class="contactCenter">
          <div class="contactChoix">
            <h3>Contactez-nous via téléphone</h3>
            <p>
              Tel: 123456972 <br />
              Heures d'ouvertures <br />
              Du lundi au vendredi <br />
              De 8h à 13h
            </p>
          </div>
          <div class="contactChoix">
            <h3>Via le formulaire de contact</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
            </p>
            <button class="btnContactForm" id="btnContactForm">
              Envoyez votre message
            </button>
          </div>
        </div>
        <div class="popupContact" id="popupContact">
          <form action="#" method="post" id="form">
            <div>
              <label for="nom" class="label-form">Nom*:</label>
              <input type="text" name="nom" id="nom" value="" class="lesInputsContact"required />
            </div>
            <div>
              <label for="prenom" class="label-form">Prénom*:</label>
              <input type="text" name="prenom" id="prenom" value="" class="lesInputsContact" required />
            </div>
            <div>
              <label for="telephone" class="label-form"
                >Numéro de téléphone*:</label
              >
              <input
                type="text"
                name="phone"
                id="telephone"
                value=""
                required
                class="lesInputsContact"
              />
            </div>
            <div>
              <label for="email" class="label-form">Email*:</label>
              <input type="text" name="mail" id="email" value="" required class="lesInputsContact"/>
            </div>
            <div>
              <label for="message" class="label-form">Votre message*:</label>
              <input type="text" name="message" maxlenght="500" id="message-box" class="lesInputsContact" required />
            </div>
            <div class="d-flex btnFormContact">
            <button type="reset" class="btnDelete">Effacer</button>
            <span><?= $etat;?></span>
            <button type="submit" id="btnSubmit" class="btnSubmit">
              Valider
            </button>
            </div>
          </form>
        </div>
      </div>
      <section class="sectionContactForm">
        <iframe
        class = "carte"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10120.476098565574!2d4.3203579!3d50.6434806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9f26c67073fa0e0!2sEcole%20Prim.et%20Mat.st-Jean-Baptiste!5e0!3m2!1snl!2sbe!4v1601280783364!5m2!1snl!2sbe"
          width="600"
          height="450"
          frameborder="0"
          style="border: 0"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
      </section>

    </div>
    <div id="overlayContactForm" class="overlayContactForm">
      <div id="popupContactForm" class="popupContactForm">
        <h2>
          Merci pour votre message !
          <span id="btnCloseContactForm" class="btnCloseContactForm">&times;</span>
        </h2>
        <div class="popupTextContactForm">
          Nous vous répondrons dans les plus bref délais.
        </div>
      </div>
    </div>

     
      <script>
      // faire apparaitre la partie formulaire avec les inputs au click
const popupContact = document.getElementById('popupContact');
const btnContact = document.getElementById('btnContactForm');

btnContact.addEventListener('click', () => {
  console.log('toto');
  //e.preventDefault();
  if (popupContact.style.display !== 'block') {
    popupContact.style.display = 'block';
  } else {
    popupContact.style.display = 'none';
  }
});

// faire apparaître ma pop-up
const btnSubmit = document.getElementById('btnSubmit');
const btnClose = document.getElementById('btnCloseContactForm');

const overlay = document.getElementById('overlayContactForm');
btnSubmit.addEventListener('click', openMoadl);
function openMoadl() {
 // e.preventDefault();
  if (document.querySelector('form').checkValidity()) {
    overlay.style.display = 'block';
  }
}

// faire disparaitre ma pop-up

btnClose.addEventListener('click', closeModal);
function closeModal() {
  overlay.style.display = 'none';
  popupContact.style.display = 'none';
}

</script>

