<?php
$r=  rand(0, 255);
$g=  rand(0, 255);
$b=  rand(0, 255);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Svetoslav Dimitrov</title>
        <link href="task2.css" rel="stylesheet" type="text/css"/>
        <style>
            div{
                background-color:rgb(<?php echo $r;?>,<?php echo $g;?>,<?php echo $b;?>);
            }
        </style>
    </head>
    <body>
        <div>
              I am 'div' whit deferent colors.
        </div>
    </body>
</html>


