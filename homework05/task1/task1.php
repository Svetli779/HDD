<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="task1.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body> 
        <?php
        $diviter=7;
        for ($i=0;$i <= 100;$i++)
        { 
                  if($i%$diviter ==0)
             {
                   if($i%2==1)
                          {
                          echo '<div class="uncount">';
                          echo "BINGO   ".$i;
                          echo '</div>';
                          }
                        else 
                            {
                        if($i%2==0)
                           {
                           echo '<div class="count">';
                           echo "BINGO ".$i;
                           echo '</div>';
                           }
                            }       
             }
                  else 
                      {
                      if($i%2==1)
                          {
                          echo '<div class="uncount">';
                          echo $i;
                          echo '</div>';
                          }
                        else 
                            {
                        if($i%2==0)
                           {
                           echo '<div class="count">';
                           echo $i;
                           echo '</div>';
                           }
                            }
                      }
        }
        ?>
        
    </body>
</html>
