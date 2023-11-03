<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $days = ["sunday","monday","Tuseday","wendsday","thursday","Friday","saterday"];

    // for($count = 0; $count < count($days); $count++){

    //     echo $days[$count] . "<br>"; 
    // }
    
    foreach($days as $key=> $day){
        echo $day . ":". $key+1 . "<br>";
        
    }
    
    ?>

</body>
</html>