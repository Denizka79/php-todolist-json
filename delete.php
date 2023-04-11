<?php

if (file_exists("todo.json")) {
    $json = file_get_contents("todo.json");
    $jsonArray = json_decode($json, true);
}

if (!empty($_POST["todo_name"])) {
    $todoName = $_POST["todo_name"];
    unset($jsonArray[$todoName]);
    file_put_contents("todo.json", json_encode($jsonArray, JSON_PRETTY_PRINT));
}

header("Location: index.php");

?>