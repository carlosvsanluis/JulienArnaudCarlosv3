
  <body style="background: white">
      <div id="content"> 
        <!-- je veux tester si mon utilisateur est bien connecté et que donc la super global $_SESSION existe et que  la clé name existe aussi et est bien renseignée -->
        <?php var_dump($_SESSION);?>
        <?php if (empty($_SESSION)) : ?>
        <h1>Vous n'êtes pas autorisé à voir cette page</h1>        
        <?php else :?>
        <div class="content-message">
            <h1>Bonjour <?=$_SESSION['name'];?></h1>
            <p> bienvenue, vous êtes connecté </p>
        </div>
        <img src="docs/Mezia_LIb.jpg">
        <a href="deconnexionController.php" class="btn btn-dark offset-md-4 mt-3"> Se déconnecter </a>
        <?php endif;
        // pour changer la durée d'une session, ca se passe dans le php.ini et c'est la fonction session.gc_maxlifetime . cf toutes les fonctions de config des sessions ici dans la documentation : https://www.php.net/manual/fr/session.configuration.php#ini.session.gc-maxlifetime
        ?>
      </div>
  </body>
</html>
