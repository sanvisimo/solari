 <?php
    include('php/classe.php');
    $classe = new Classe;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php 
            $query="SELECT * FROM contenuto";
            echo $classe->getDbValues($query);
       ?>
    </body>
</html>
