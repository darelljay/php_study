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
        height: 24rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center; 
    }
    .holder{
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    .hero{
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }
    .holder input[type="text"]{
        height: 30px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 20px;
        border-bottom: 2px solid green;
    }
    .holder input[type="submit"]{
        display: block;
        height: 32px;
        font-size: 20px;
        color: #fff;
        border: 1px solid;
        width: 250px;
        outline: none;
        background-color: crimson;
    }
    .footer{
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
    <h1 class="hero">
        <?php
        if(isset($_POST['submit'])){
            echo "The user's name is ". $_POST['name'] ."🚀🚀🔥🔥";
        }else{
            echo "Enter your name";
        }
        ?>
    </h1>
    <div class="container">
        <div class="holder">
            <form method="post" action="1.php">
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