<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <?php
       $words=array('ferrari','ford','bmw','lotus','LamborghiniAventador','alfa romeo');
       foreach ($words as $value) {
            convert($value, $num);
            
        }
        function convert($string,&$num){
            $num=5;
            $result=strlen($string);
            if($result%2==0){
    $sbor = $num + 12;
                echo $num.'+12 = '.$sbor .' | ';
            }
            else {
     $result3 = $num-3;
     echo $num.'-3 ='.$result3 .' | ';
                 if($result3>10){
                     $vz2=$result3-22;
                     echo $result3.'-22 = '. $vz2 .' | ';
                     if($vz2<0){
                         $vz3=$vz2+14;
                         echo $vz2.'+14 = '.$vz3 .' | ';
                     }
                 }
           }
        }
     ?>
    </body>
</html>