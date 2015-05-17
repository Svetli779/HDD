<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $cars= array('BMW'=>'bmw.com/com/en/','FERRARI'=>'ferrari.com/bg_bg/',
            'lotus'=>'lotuscars.com/','lamborghini'=>'lamborghini.com/en/home/',
            'Porshe'=>'porsche.com/');
       shuffle($cars);
       foreach ($cars as $value) {
           echo "<a href='http://www.$value'>$value</a><br/>";
       }
        ?>
    </body>
</html>