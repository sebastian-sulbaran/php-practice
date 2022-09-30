
<?php require("partials/head.php") ?>

    <h2>List of task from Database</h2>
    <ul>
        <?php foreach ($task_list as $task):?>

            
            <?php if ($task->isCompleted()):?>
                <strike>
                    <li><?= $task->description() ?></li>
                </strike>
            
            <?php else:?>

                <li><?= $task->description() ?></li>
            
            <?php endif?>
        <?php endforeach?>

    </ul>

<?php require("partials/footer.php") ?>

