<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <div>
            <h1>Case 1.</h1>
        <?php
        $cars=  array("BMW","Lotus","Volvo","Ferrari","Porshe","Lamborghini");
        foreach ($cars as $key=>$value )
            {
            echo '<p>';
            echo "I want to buy ".$value;
            echo '</p>';
            }
            unset($cars[5]);
        ?>
            </div>
         <div>
            <h1>Case 2.</h1>
        <?php
        foreach ($cars as $key=>$value )
            {
            echo '<p>';
            echo "I will buy ".$value;
            echo '</p>';
            }
        ?>
            </div>
    </body>
</html>