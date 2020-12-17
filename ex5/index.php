<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
    <title>Partie 7 - ex5</title>
</head>

<body>

    <div class="container">

        <h1 class=mt-5>Partie 7 - ex5</h1>

        <p>
            Créer un formulaire sur la page index.php avec :  
            Une liste déroulante pour la civilité (Mr ou Mme)
            Un champ texte pour le nom
            Un champ texte pour le prénom 

            Ce formulaire doit rediriger vers la page index.php. 
            Vous avez le choix de la méthode.
        </p>

        <div class="row justify-content-center">

            <div class="col-6 mt-5">

                <form action="" method="get">

                    <div class="form-group">
                        <select class="form-control" name="gender" id="selecta">
                            <option>your gender..</option>
                            <option value="Mister">Mister</option>
                            <option value="Miss">Miss</option>
                        </select>
                    </div>

                    <input type="text" class='form-control mb-3' name="lastname" placeholder="your lastname..">
                    <input type="text" class='form-control mb-3' name="firstname" placeholder="your firstname..">
                    <div class="text-center">
                        <input type="submit" class="btn btn-dark px-5" value="SUBMIT">
                    </div>

                </form>
                
            </div>
        </div>
    </div>

    <!-- script js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous ">
    </script>

</body>

</html>