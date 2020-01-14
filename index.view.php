<!DOCKTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laracast PHP</title>
</head>

<body>
    <h1>Task of the day</h1>
    <ul>
        <li>
            <strong>Name: </strong> <?=$task['task'];?>
        </li>

        <li>
            <strong>Due: </strong> <?=$task['due'];?>
        </li>

        <li>
            <strong>Responsible: </strong> <?=$task['assigned'];?>
        </li>

        <li>
            <strong>Status: </strong> <?=$task['completed'] ? 'Done' : 'Not done';?>
        </li>

        <li>
            <strong>Status: </strong>
            <?php
if ($task['completed']) {
    echo "Done";
} else {
    echo "Not done";
}
?>
        </li>

        <li>
            <strong>Status: </strong>
            <?=$task['completed'] ? '&#9989' : '&#10062';?>
        </li>

        <li>
            <strong>Status: </strong>
            <?php if ($task['completed']): ?>
                <span class="icon">&#9995</span>
            <?php else: ?>
                <span class="icon">&#9994</span>
            <?php endif;?>
    </li>

    </ul>
    </h1>
</body>

</html>

