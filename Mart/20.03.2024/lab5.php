<!DOCTYPE html>
<html>
<body>

<?php
   
 $num1 = 10;
  
  $num2 = 5;

    $emeliyyat = "+";
 
  // $emeliyyat = "-";
 
  // $emeliyyat = "*";
 
  // $emeliyyat = "/"
 ;
   $result = '';
        
    switch ($emeliyyat) {
   
             case '+':
   
                 $result = $num1 + $num2;
  
                  break;
           
     case '-':
           
         $result = $num1 - $num2;
 
                   break;
     
           case '*':
         
           $result = $num1 * $num2;
    
                break;
              
  case '/':
               
     if ($num2 != 0) { 
 
                       $result = $num1 / $num2;
  
                  } 
else {
     
                   $result = '0-a bolunmur!';
   
                 }
            
        break;
  
              default:
  
                  $result = 'bel? bir emeliyyat yoxdur';
  
                  break;
       
     }
            echo "Cavab: $result";
    ?>



</body>
</html>