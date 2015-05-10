<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Svetoslav Dimitrov</title>
        <link href="homework04.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>variable=64</h1>
        <div>    
        <?php
        $int=64;
        if($int==15){
            echo 'I am 15';
        }
        else {
        if($int>26){
            echo 'bigger than 26';
        }
        else {
            if($int==64 || $int<64){
                echo 'smaller or equal than 64';
            }
        }
        }
        ?>
        </div>
        <h1>variable=15</h1>
        <div>
            <?php
        $int=15;
        if($int==15){
            echo 'I am 15';
        }
        else {
        if($int>26){
            echo 'bigger than 26';
        }
        else {
            if($int==64 || $int<64){
                echo 'smaller or equal than 64';
            }
        }
        }
        ?>
        </div>
    </body>
</html>
