

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Emprunts le Livres</title>
  </head>
  <body>
    <main class="container">
        <div class="jumbotron">
            <h1 class="display-4">Les LIVRES du <?=$_SESSION['name'];?> <?=$_SESSION['owner'];?> </h1>
        </div>
        <div class="row">

                
  
        <div class="row">
                <?php if (isset($_GET['ordermesemprunts'])) :?>     
                <?php endif ;?>            
                <br>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID Ouvrage</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Date Emprunter</th>
                        <th scope="col">Date Fin d'Emprunter</th>          
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookList as $book) :?>
                    <tr>
                        <td><?= $book['idOuvrage'];?></td>
                        <td><?= $book['titreOuvrage'];?></td>
                        <td><?= $book['auteur'];?></td>
                        <td><?= $book['datedebutEmprunter'];?></td>
                        <td><?= $book['datefinEmprunter'];?></td>

                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
            </div>  
           
        </div>
       <div class="content-message">
                <img src="docs/mezia.png"></div>
                </div>  
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
