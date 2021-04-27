
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
        </div>
        <img src="docs/Mezia_LIb.png">
        <a href="deconnexionController.php" class="btn btn-dark offset-md-4 mt-3"> Se déconnecter </a>

      </div>
  </body>
</html>


