

  <body>
      <div id="profile"> 
        <!-- je veux tester si mon utilisateur est bien connecté et que donc la super global $_SESSION existe et que  la clé name existe aussi et est bien renseignée -->
        <?php if (empty($_SESSION)) : ?>
        <h1>Vous n'êtes pas autorisé à voir cette page</h1>        
        <?php else :?>
        <div class="content-message">
            <h1>Bonjour <?=$_SESSION['name'];?></h1>
            <p> Ton Profil </p>
        </div>

        <?php
                    $bg = array('/docs/bg1.jpg', '/docs/bg3.jpg', '/docs/bg2.jpg' ); // array of filenames
                    $i = array_rand(3); // generate random number size of the array
                    $selectedBg = $bg[$i]; // set variable equal to which random filename was chosen
        ?>      
        <img src="docs/Mezia_LIb.png">
        <a href="deconnexionController.php" class="btn btn-dark offset-md-4 mt-3"> Se déconnecter </a>
        <?php endif;
        // pour changer la durée d'une session, ca se passe dans le php.ini et c'est la fonction session.gc_maxlifetime . cf toutes les fonctions de config des sessions ici dans la documentation : https://www.php.net/manual/fr/session.configuration.php#ini.session.gc-maxlifetime
        ?>
      </div>
  </body>
</html>


