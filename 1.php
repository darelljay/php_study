<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php First App</title>
</head>
<style>
    *{
        font-family: sans-serif;
    }
    .container{
        height: 24px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center; 
    }
</style>
<body>
    <h1 class="hero">
        The user's name is 🚀🚀🔥🔥
    </h1>
    <div class="container">
        <div class="holder">
            <form method="post" action="index.php">
                <div class="wrapper">
                    <input type="text" placeholder="Enter Username" name="name">
                </div>
                <br>
                <br>
                <div class="wrapper">
                    <input type="submit" value="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <h4 class="footer">Made with  <span>❤️</span> by Langat Fortune</h4>
</body>
</html>