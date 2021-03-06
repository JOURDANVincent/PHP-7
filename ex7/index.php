<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
    <title>Partie 7 - ex7</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">

                <h1>Partie 7 - ex7</h1>
                <p>
                    Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. 
                    Afficher en plus de ce qui est demandé à l'exercice 6, 
                    le nom et l'extension du fichier.  
                </p>

    <?php
        if (!empty($_GET['gender']) AND !empty($_GET['lastname']) AND !empty($_GET['firstname']) AND !empty($_GET['file']) )   // si age existe
        {
            echo '<br> Bonjour ' .$_GET['gender']. ' ' .$_GET['lastname']. ' ' .$_GET['firstname']. '<br>';
            echo 'Nom du fichier: ' .$_GET['file']. '<br>';
            echo 'Extension du fichier: ' .pathinfo($_GET['file'], PATHINFO_EXTENSION). '<br>';
        }
        else   // sinon l'indiquer
        {  // ouverture formulaire
    ?>

            </div> <!-- fin col-8 -->
        </div> <!-- fin row -->
    </div> <!-- fin container -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 mt-5">

                <form action="index.php" method="get">

                    <div class="form-group">

                        <select class="form-control mb-3" id="gender" name="gender">
                            <option>your gender</option>
                            <option value="Mister">Mister</option>
                            <option value="Miss">Miss</option>
                        </select>

                        <input type="text" class='form-control mb-3' name="lastname" placeholder="your lastname">
                        <input type="text" class='form-control mb-3' name="firstname" placeholder="your firstname">

                        <!-- Input dépôt de fichier -->
                        <label for="file"></label>
                        <input type="file" class="form-control mb-3" name="file" id="file">

                        <!-- btn submit -->
                        <div class="text-center">
                            <input type="submit" class="btn btn-dark px-5" value="SUBMIT">
                        </div>

                    </div>

                </form>
                
            </div>
        </div>
    </div>

    <?php
        } // ... fermeture formulaire
    ?>

    <!-- script js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous ">
    </script>

</body>

</html>