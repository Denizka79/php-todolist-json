<?php
if (file_exists("todo.json")) {
    $json = file_get_contents("todo.json");
    $jsonArray = json_decode($json, true);
} else {
    $jsonArray = [];
}

if (!empty($_POST["taskname"])) {
    $jsonArray[$_POST["taskname"]] = ["complete" => false];
    echo $_POST["taskname"];
    file_put_contents("todo.json", json_encode($jsonArray, JSON_PRETTY_PRINT));
}

header("Location: index.php");

?>