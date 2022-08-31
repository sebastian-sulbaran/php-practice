<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            text-align: center;
            padding: 2em;
            background-color: #e3e3e3;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <?php
                //sanitizing input
                echo "Hello you ! " . (htmlspecialchars($_GET['name']) ? htmlspecialchars($_GET['name']) : "user") . ". But if you trying to put code it wont work.";
            ?>
        </h1>
        <!-- 
            <?= "Hello, " . htmlspecialchars($_GET['name']); ?>
         -->
    </header>
</body>
</html>