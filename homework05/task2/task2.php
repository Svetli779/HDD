<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="task2.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body> 
        <?php
        define("COLS", 4);
        define("ROWS", 5);
        $c=  constant("COLS");
        $r= constant("ROWS");
        echo "<table><br/>";
        for ($row = 1; $row <= $r; $row ++) {
        echo "<tr>";
        for ($col = 1; $col <= $c; $col ++) {
        echo "<td>",($row .','. $col), "</td>";
        }
        echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>