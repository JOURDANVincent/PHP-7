<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
    <title>Partie 7 - ex2</title>
</head>

<body>

    <h1>Partie 7 - ex2</h1>

    <p>
        Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.
    </p>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 mt-5">

                <form action="user.php" method="post">

                    <input type="text" class='form-control mb-3' name="lastname" placeholder="your lastname">
                    <input type="text" class='form-control mb-3' name="firstname" placeholder="your firstname">
                    <div class="text-center">
                        <input type="submit" class="btn btn-dark px-5" value="SUBMIT">
                    </div>

                </form>
                
            </div>
        </div>
    </div>

    <!-- script js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous ">
    </script>

</body>

</html>