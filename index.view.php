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
    </ul>
    </h1>
</body>

</html>

