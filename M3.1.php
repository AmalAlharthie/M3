<html>
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
    </head>

    <body>
        <form action="M3.0.php" method="GET">
            Value of sensor:
            <input type="text" name ="num"><br/>
            <input type="submit">
        </form>
    <?php

    $connection = new mysqli("localhost","root","","db");
    $statement = $connection ->prepare("select * from sensorvalue ");
    $statement ->execute();

    $result = $statement->get_result();
    echo"<hr>";
    echo"Value is stored in database:";
    echo"<br/>"."<br/>";
    echo"";
    echo "<table border='1'>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td style=width:20%>". $row ['id']."-"."</td>"."<td>". $row ['num']."</td></tr>";
    }
    echo "</table>"
    ?>
    </body>
</html>