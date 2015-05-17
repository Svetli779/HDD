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
        ?>
            </div>
         <div>
            <h1>Case 2.</h1>
        <?php
        $car=  array("BMW","Lotus","Volvo","Ferrari","Porshe",);
        foreach ($car as $key=>$value )
            {
            echo '<p>';
            echo "I will buy ".$value;
            echo '</p>';
            }
        ?>
            </div>
    </body>
</html>