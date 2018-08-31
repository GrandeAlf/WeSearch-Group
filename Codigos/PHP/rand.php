<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 6 digit int

    $random_string = chr(rand(65,90)) . chr(rand(65,90)); // random(ish) 2 character string
    
    echo "$random_string"."$random_number <br>";
    
   
    
    
 


    ?>
</body>
</html>