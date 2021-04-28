

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Emprunts le Livres</title>
  </head>

  <body>
    <main class="container">
        <div class="jumbotron">
            <h1 class="display-4">Les Emprunts du <?=$_SESSION['name'];?> <?=$_SESSION['owner'];?> </h1>
        </div>
        <div class="row">

 
 
        <form action="users.php" method="GET">
<input id="search" name="search" type="text" placeholder="Recherche le Titre">
<input id="submit" type="submit" value="Search">
</form>
 
 <div class="container">
    <a href="mesLivresController.php"  class="btn1"> Emprunt</a>
    <a href="cmesLivresController.php" class="btn2"> Rendre le Livres</a>
    </div>

                <?php if (isset($_GET['ordermeslivres'])) :?>
               
                <?php endif ;?>            
                <br>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Date de publication</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Disponible</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookList as $book) :?>
                    <tr>
                        <td><?= $book['idOuvrage'];?></td>
                        <td><?= $book['titreOuvrage'];?></td>
                        <td><?= $book['auteur'];?></td>
                        <td><?= $book['anneeeditionOuvrage'];?></td>
                        <td><?= $book['genre'];?></td>
                        <td><?= $book['disponible'];?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
            </div>
           
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
