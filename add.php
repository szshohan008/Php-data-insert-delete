<html>
<head>
 
<title>Add Movie</title>
</head>
<body>
    <br>
    <br>
    <br>
<button><a href="index.php">Home</a></button>
<br/><br/>
<form action="add.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Movie Name</td>
<td><input type="text" name="movie_title"></td>
</tr>
<tr>
<td>Year</td>
<td><input type="text" name="year_made"></td>
</tr>
<tr>
<td>Movie Type</td>
<td><input type="text" name="movie_type"></td>
</tr>
<td>Rating</td>
<td><input type="text" name="mpaa_rating"></td>
</tr>
<td>Actor 1</td>
<td><input type="text" name="actor_1"></td>
</tr>
<td>Actor 2</td>
<td><input type="text" name="actor_2"></td>
</tr>
<td>Actor 3</td>
<td><input type="text" name="actor_3"></td>
</tr>
<td>Director</td>
<td><input type="text" name="director"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Submit" value="submit"></td>
</tr>
</table>
</form>
<?php

if(isset($_POST['Submit'])) {
$movie_title = $_POST['movie_title'];
$year_made = $_POST['year_made'];
$movie_type = $_POST['movie_type'];
$mpaa_rating = $_POST['mpaa_rating'];
$actor_1 = $_POST['actor_1'];
$actor_2 = $_POST['actor_2'];
$actor_3 = $_POST['actor_3'];
$director = $_POST['director'];

include_once("config.php");


$result = mysqli_query($mysqli, "INSERT INTO
avangers(movie_title,year_made,movie_type,mpaa_rating,actor_1,actor_2,actor_3,director) VALUES('$movie_title','$year_made','$movie_type','$mpaa_rating','$actor_1','$actor_2','$actor_3','$director')");

echo "Movie added successfully. <a href='index.php'>View Movie</a>";
}
?>
</body>
</html>
