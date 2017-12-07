<?php
include("config.php");
include("functions.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mail</title>
    </head>
    <body>
        <form method="post" action="">
            <input type="text" name="objet"><br>
            <textarea rows="4" cols="50"></textarea><br>
            <input type="submit" value="Envoi">
        </form>
        <br><br>
        <form method="post" action="">
            <input type="submit" name="Anniv" value="Check anniv">
        </form>
        <?php
            if(isset($_POST['Anniv'])){
                checkAnniv($bdd);
            }
        ?>
    </body>
</html>