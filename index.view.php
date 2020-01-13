<!DOCKTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laracast PHP</title>
</head>

<body>
    <h1>Task of the day</h1>
    <ul>
        <?php foreach ($task as $heading => $value): ?>
        <li>
            <strong><?=ucwords($heading);?></strong> : <?=$value?>
        </li>
        <?php endforeach;?>
    </ul>
    </h1>
</body>

</html>

