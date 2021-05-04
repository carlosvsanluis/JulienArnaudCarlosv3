
  <body>
      
      <div id="content"> 
        
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




        <div class="content-message">
            <h1>Bonjour <?=$_SESSION['name'];?></h1>
            <p> bienvenue, vous êtes connecté </p>
            <?php

                       
                        
                        date_default_timezone_set("Europe/Paris");
                        echo "C'est <br>" . date("H:i <br>");
                        echo date("m-d-Y") . "<br>"; 


                        //if $owner != emprunts 
                        //echo "Vous pouvez emprunt une livre
                        //else {

                        $d=strtotime("+ 3 weeks");
                        //ajout sum(emprunts where = session owner plus tard
                          echo "Vous avez 2 livre a retourner à <br>";
                         echo date("m-d-Y H:i", $d) . "<br>";                  
                     
                         //}



            ?>


            
        </div>
        <img src="docs/mezia.png">
        <a href="deconnexionController.php" class="btn btn-dark offset-md-4 mt-3"> Se déconnecter </a>

      </div>
  </body>
</html>
?>

