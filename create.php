<?php

include_once("config.php");

if(isset($_POST['update']))
{
$movie_id = $_POST['movie_id'];
$movie_title=$_POST['movie_title'];
$year_made=$_POST['year_made'];
$movie_type=$_POST['movie_type'];
$mpaa_rating=$_POST['mpaa_rating'];
$actor_1=$_POST['actor_1'];
$actor_2=$_POST['actor_2'];
$actor_3=$_POST['actor_3'];
$director=$_POST['director'];

$result = mysqli_query($mysqli, "UPDATE  movies  SET
movie_title='$movie_title',year_made='$year_made',movie_type='$movie_type', mpaa_rating='$mpaa_rating', actor_1='$actor_1', actor_2='$actor_2',actor_3='$actor_3', director='$director' WHERE movie_id=$movie_id");

header("Location: index.php");
}
?>
<?php

$movie_id = $_GET['movie_id'];

$result = mysqli_query($mysqli, "SELECT * FROM  movies  WHERE movie_id=$movie_id");
while($user_data = mysqli_fetch_array($result))
{
$movie_title = $user_data['movie_title'];
$year_made = $user_data['year_made'];
$movie_type = $user_data['movie_type'];
$mpaa_rating = $user_data['mpaa_rating'];
$actor_1 = $user_data['actor_1'];
$actor_2 = $user_data['actor_2'];
$actor_3 = $user_data['actor_3'];
$director = $user_data['director'];
}
?>
<html>
<head>
<title>Edit User Data</title>
</head>
<body>
<a href="index.php">Home</a>
<br/><br/>
<form name="update_user" method="post" action="edit.php">
<table border="0">
<tr>
<td>Name</td>
<td><input type="text" name="name" value=<?php echo
$name;?>></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value=<?php echo
$email;?>></td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="text" name="mobile" value=<?php echo
$mobile;?>></td>
</tr>
<tr>
<td><input type="hidden" name="movie_id" value=<?php echo
$_GET['movie_id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>
