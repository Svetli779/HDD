<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
  function calculate(){
      $a=  rand(0, 15);
      $ha= rand(0, 15);
      $s=$a*$ha/2;
      
      
      switch ($s){
          case ($s<10):
              echo '<p style="color:green;">'.$s.'</p>';
                            break;
          case ($s>10 && $s<=23):
              echo '<p style="color:red;">'.$s.'</p>';
                            break;
                        case ($s>23):
              echo '<p style="color:blue;">'.$s.'</p>';
                            break;
      }
  }
  for ($i=0;$i<10;$i++){
      calculate();
  }
  ?>
    </body>
</html>