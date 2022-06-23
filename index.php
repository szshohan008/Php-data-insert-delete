<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM movies ORDER BY movie_id DESC");
?>
<html>
<head>
<title>Homepage</title>
</head>
<body>
    <br>  
    <h1>Movie List</h1>
    <br>

<table width='100%',height='100%' border=1>
<tr>
    <th>Id</th>
<th>Movie Name</th>
<th>Year Made</th>
<th>Movie Type</th>
<th>Movie Rating</th>
<th>Actor 1</th>
<th>Actor 2</th>
<th>Actor 3</th>
<th>Director</th>
<th>Action</th>
</tr>
<?php
while($user_data = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$user_data['movie_id']."</td>";
echo "<td>".$user_data['movie_title']."</td>";
echo "<td>".$user_data['year_made']."</td>";
echo "<td>".$user_data['movie_type']."</td>";
echo "<td>".$user_data['mpaa_rating']."</td>";
echo "<td>".$user_data['actor_1']."</td>";
echo "<td>".$user_data['actor_2']."</td>";
echo "<td>".$user_data['actor_3']."</td>";
echo "<td>".$user_data['director']."</td>";
echo "<td><a href='edit.php?movie_id=$user_data[movie_id]'></a>  <a
href='delete.php?movie_id=$user_data[movie_id]'>Delete</a></td></tr>";
}
?>
</table>
<br>
<button><a href="add.php">ADD New Movie</a><br/><br/></button>
</body>
</html>
