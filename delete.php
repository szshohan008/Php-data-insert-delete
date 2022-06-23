<?php

include_once("config.php");

$movie_id = $_GET['movie_id'];

$result = mysqli_query($mysqli, "DELETE FROM movies WHERE movie_id=$movie_id");

header("Location:index.php");
?>
