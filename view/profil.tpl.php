
  <body>
      
   
  <?php

//Random Background 
      $bg = array('bg1.jpg', 'bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg', 'bg6.jpg'); // array of filenames
       $i = rand(0, count($bg)-1); // generate random number size of the array
       $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
    <style type="text/css">
      <!--
        body{
        color: white;
        background: url(docs/<?php echo $selectedBg; ?>) no-repeat;
      

        }
      -->
    </style>
    
  
      <div id="content"> 
      
        <div class="content-message">
            <h1>Bonjour <?=$_SESSION['name'];?></h1>
            <p> bienvenue, vous êtes connecté </p>


            <h1>Mes Infos</h1>
            <h4>Nom: <?=$_SESSION['lastname'];?></h4>
            <h4>PreNom: <?=$_SESSION['name'];?></h4>
            <h4>Telephone: <?=$_SESSION['telephone'];?></h4>
            <h4>Email: <?=$_SESSION['email'];?></h4>
            <h4>Adresse: <?=$_SESSION['adress'];?></h4>

            <a href="mesinfos.php" class="btn btn-primary">update info</a>

        </div>
        <img src="docs/Mezia_LIb.png">
        <a href="deconnexionController.php" class="btn btn-dark offset-md-4 mt-3"> Se déconnecter </a>
      </div>
  </body>
</html>


