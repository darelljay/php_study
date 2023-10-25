<?php 
    echo"I Love Pizza <br>";
    echo"It's Really Good<br>";
    /*
    This is a comment
    This 
    is 
    a 
    multiline
    comment
    */
    $name = "Jason Darell";
    $email = "fake@gmail.com";

    $age = 21;
    $users = 2;
    $quantity = 3;

    $gpa = 3.5;
    $price = $quantity * $gpa;
    $tsx_rate = 5.1;

    $is_student = true;
    $online = true;
    if($is_student){
        echo "Student discount";
    }else{
        echo "Not a student";
    }
    
   $result = ($online ? "Online":"Offline");


   $arr = array(2,2,4,5,6,7,8,9);
   for($i=0; $i<count($arr); $i++){
    echo $arr[$i]."<br>";
   }

   $i =0;
   while($i<10){
    echo $i."<br>";
    $i++;
   }
    echo $name;
    echo "<br> hello {$name}";
    echo "Your email is {$email}";

    echo "You are {$age} years old<br>";
    echo "There are {$users} users online<br>";
    echo "There are {$quantity} pizzas in stock";
    echo "Your Gpa is {$gpa}";
    echo "Your pizza is \${$price}<br>";
    echo "the sales tax rate is \${$tsx_rate}}<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>oder a pizza</button>
</body>
</html>