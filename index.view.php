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

    <h2>Todo list:</h2>
    <ul>
        <?php foreach ($tasks as $heading => $value):?>
            <li><strong><?= ucwords($heading) ?></strong> : <?= $value ?></li>
        <?php endforeach?>
        
    </ul>
    <h2>Todo list (with more control in code):</h2>
    <!-- de esta forma se tiene mas control sobre lo que se quiere mostrar, por ejemplo colocando cosas que estan desordenadas en el array de forma ordenada y con los label que queremos -->
    <ul>
        
        <li>
            <strong>Name</strong>: <?= $tasks['title'] ?>
        </li>
        
        <li>
            <strong>Description</strong>: <?= $tasks['description'] ?>
        </li>
        
        <li>
            <strong>Due date</strong>: <?= $tasks['due'] ?>
        </li>
        
        <li>
            <strong>Responsible person</strong>: <?= $tasks['assigned_to'] ?>
        </li>
        
        <li>
            <strong>Status</strong>: <?= $tasks['completed'] ? 'Completed': 'Imcompleted' ?>
        </li>
        
    </ul>
</body>
</html>