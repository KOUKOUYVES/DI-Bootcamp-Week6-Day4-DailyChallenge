<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exercice Daily Challenge</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <div class="container">
            <h1>Exercice Daily Challenge</h1>
        <?php
            echo("Your name is : " . $_POST['firstname'] . "<br>");
            echo("Your color is : " . $_POST['color'] . "<br>");
        ?>
        </div>
        
    </body>
</html>