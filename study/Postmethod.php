<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo $_POST["title_1"]."<br>";
        echo $_POST["secret-code_1"]."<br>";


    ?>

    <form action="Postmethod.php" method="post">
        <input type="text" name="title_1" placeholder="Book Title" value="">
        <input type="password" name="secret-code_1" placeholder="Enter Your Pin" value="">
        <input type="submit" name="enter" value="Submit"> 
    </form>
</body>
</html>