<?php if (file_exists("todo.json")) {
    $json = file_get_contents("todo.json");
    $todoitems = json_decode($json, true);
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="new-task" action="newtask.php" method="POST">
        <!-- <label for="newtask">Enter new task: </label> -->
        <input type="text" name="taskname" placeholder="Enter your new task">
        <button type="submit">Go</button>
    </form>
    <table>
        <tr>
            <th>Task</th>
            <th>Complete?</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($todoitems as $todoName => $todo) {
            $complete = "";
            if ($todo["complete"]) {
                $complete = "checked";
            }
            echo "<tr><td>" . $todoName . "</td><td><input type='checkbox' " . $complete . "></td>" . "<td><form action='delete.php' method='post'><input type='hidden' name='todo_name' value='" . $todoName ."'><button>Delete</button></form></td></tr>";
        } ?>
    </table>
</body>
</html>