
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Ma bibliothèque d'amour</title>
  </head>
  <body>
    <main class="container">
        <div class="jumbotron">
            <h1 class="display-4">MEZIALIB</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                <a href="index.php?order=titreOuverage&amp;page=bibliothèque" class="btn btn-primary">Trier par nom</a>&nbsp;
                <a href="index.php?order=idAuteur&amp;page=bibliothèque" class="btn btn-info">Trier par auteur</a>&nbsp;
                <!-- TODO #2 n'afficher ce bouton que s'il y a un tri -->
                <?php if (isset($_GET['order'])) :?>
                <a href="index.php" class="btn btn-dark">Annuler le tri</a><br> 
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
                    </tr>
                </thead>
                <tbody>
                    <!-- TODO #1 boucler sur le tableau $bookList contenant tous les livres
                    (supprimez ces 2 lignes d'exemple) -->
                    <?php foreach ($bookList as $book) :?>
                    <tr>
                        <td><?= $book['idOuvrage'];?></td>
                        <td><?= $book['titreOuvrage'];?></td>
                        <td><?= $auteurList[$book['idAuteur']];?></td>
                        <td><?= $book['anneeeditionOuvrage'];?></td>
                        <!--Ici je ne veux pas que ce soit l'id du genre qui s'affiche mais bien le name du genre, du coup je vais utiliser ma variable $genreList qui est un tableau qui stocke tout mes genres en lui transmettant l'id comme clé-->
                        <td><?= $genreList[$book['idGenre']];?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
            </div>
            <div class="col-12 col-md-4">
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
