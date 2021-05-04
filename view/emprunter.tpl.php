<body>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Emprunter Une Livre</title>
  </head>

  <main class="container">
        <div class="jumbotron">
            <h1 class="display-4">Les Emprunts du <?=$_SESSION['name'];?> <?=$_SESSION['owner'];?> </h1>
        </div>
        <div id="container">
        <form action="emprunterController.php" method="POST">
                <h1>Emprunter</h1>
                <label><strong>idOuvrage</strong></label>
                <input type="text" class="form-control" name="idOuvrage" required>
                <label><strong>Titre d'Ouvrage</strong></label>
                <input type="text" class="form-control" name="titre" required>
                <label><strong>Auteur d'Ouvrage</strong></label>
                <input type="text" class="form-control" name="auteur" required>
                <input type="submit" value="Emprunt">
                <a href="privatespace.php?page=bibliothèque" class="btn btn-info offset-md-80">Bibliothèque</a>  
            </form>
        </div>
 </body>

