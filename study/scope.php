<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = "out"; // globla scope

        function convert(){
            $a = "in"; // local scope 

        }

        echo $a;
        echo "<br>";
        convert();
    
    ?>
</body>
</html>