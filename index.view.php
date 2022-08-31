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
                echo $greetings;
            ?>
        </h1>
    </header>

    <h2> List of animals </h2>
    <ul>
        <?php foreach ($animals as $animal):?>
            <li><?= $animal ?></li>
        <?php endforeach?>
        
        <br>
        
        <?php 
            foreach ($animals as $animal) {
                echo "<li>$animal</li>";
            }
        ?>
    </ul>
</body>
</html>