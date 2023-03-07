<?php

require "functions.php";
require "router.php";
require "Database.php";

$config = require "config.php";

/*$id = $_GET["id"];
$query = "SELECT * FROM posts WHERE id = ?";

$db = new Database($config["database"]);
$posts = $db->query($query, [$id])->fetchAll();

dd($posts);
*/