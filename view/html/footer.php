

<footer>
<div class = "div-footer">
  <h1> <span class = "bienvenue">Bienvenue</span> </br> École Saint Jean-Baptiste</h1>
  <p class ="sous-titre_p">École maternelle et primaire</p>
</div></footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src = "public/js/accueil.js"></script>
<script src = "public/js/gallery-lightbox.js"></script>
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
<?php 
  if (isset ($_SESSION["login_admin"])) {
    echo '<script src = "public/js/agenda.js"></script>';
  }
?>


</body>
</html>