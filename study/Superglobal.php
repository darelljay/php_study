<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        if(isset($_GET['enter'])){
            echo $_REQUEST["title_1"]."<br>";
            echo $_REQUEST["secret-code_1"]."<br>";
        }


    ?>

    <form action="Superglobal.php" method="get">
        <input type="text" name="title_1" placeholder="Book Title" value="">
        <input type="password" name="secret-code_1" placeholder="Enter Your Pin" value="">
        <input type="submit" name="enter" value="Submit"> 
    </form>
</body>
</html>