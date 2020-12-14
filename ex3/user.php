<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
    <title>Partie 7 - ex3</title>
</head>

<body>

    <?php

    $lastname = "";
    $firstname = "";

    if (isset($_GET['lastname']) AND isset($_GET['firstname']) )   // si age existe
        {
            $lastname = $_GET['lastname'];
            $firstname = $_GET['firstname'];
        }
        else   // sinon l'indiquer
        {
            echo '<br> N\'existe pas !!!';
        }
    ?>

    <p> 
        <?="Bonjour $lastname $firstname, comment vas-tu ?"; ?>
    </p>

    <!-- script js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous ">
    </script>

</body>

</html>