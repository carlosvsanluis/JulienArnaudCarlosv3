
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Mes Livres</title>
  </head>

  <body>
    <main class="container">
        <div class="jumbotron">
            <h1 class="display-4">Les LIVRES du <?=$_SESSION['name'];?> <?=$_SESSION['owner'];?> </h1>
        </div>
        <div class="row">

                
            
                <a href="mesLivresController.php?order=titre&amp;page=mesLivres" class="btn btn-primary">Trier par nom</a>&nbsp;
                <a href="mesLivresController.php?order=auteur&amp;page=mesLivres" class="btn btn-info">Trier par auteur</a>&nbsp;
                <!-- TODO #2 n'afficher ce bouton que s'il y a un tri -->
                <?php if (isset($_GET['order'])) :?>
                <a href="mesLivresController.php?&amp;page=mesLivres" class="btn btn-dark">Annuler le tri</a><br> 
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
                    <!-- TODO #1 boucler sur le tableau $bookList contenant tous les livres
                    (supprimez ces 2 lignes d'exemple) -->
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
