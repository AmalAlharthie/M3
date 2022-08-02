<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           $number = $_GET["num"];
           $connection = new mysqli("localhost","root","","db");
           $statement = $connection ->prepare("insert into sensorvalue (num) values(?); ");
           $statement->bind_param("i",$num);
           $statement->execute();
           echo"Done";
        ?>
    </body>
</html>