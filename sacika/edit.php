<?php
session_start();
if (isset($_SESSION['mywebsite'])) {
	$admin_email = $_SESSION['mywebsite'];
} else {
	echo '<script>location.replace("index.php")</script>';
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	echo '<script>location.replace("dashboard.php")</script>';
}

//
$servername = "localhost";
$dbusername = "root";
$dbpassword = "yes";
$dbname = "myfirstdb";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM articles";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP - MySQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style type="text/css">

  </style>
</head>
<body>

<div class="container">
	<br>
	<button type="button" class="btn" onclick="location.replace('dashboard.php')">&larr; BACK</button>
	<br>
	<h1>Edit Entry</h1>
	<br>
	<form method="post" enctype="multipart/form-data">

		<input type="hidden" name="id" value="<?php echo $id; ?>">
		
		<label>title</label><br>
		<input type="text" name="title" value="<?php echo $row['title']; ?>">
		<br><br>
		<label>category</label><br>
		<select name="category">
			<?php
			$sql_category = "SELECT * FROM articles";
			$result_category = mysqli_query($conn, $sql_category);
			$category = mysqli_fetch_all($result_category, MYSQLI_ASSOC);
			foreach ($category as $category) {

				if ($row['category'] == $category['category']) {
					$selected = 'selected';
				} else {
					$selected = '';
				}

				echo '<option value="'.$category['category'].'" '.$selected.'>'.$category['category'].'</option>';

			}
			?>
		</select>
		<br><br>
		<label>article_date</label><br>
		<input type="date" name="article_date"  value="<?php echo date('Y-m-d', strtotime($row['article_date'])); ?>">
		<br><br>
		<label>author</label>
		<input type="text" name="author"  value="<?php echo $row['author']; ?>">
		<br><br>
		<label>Image</label><br>
		<img src="../image/<?php echo $row['image']; ?>" />
		<input type="file" name="myimage">
		<br><br>
		<label>content</label><br>
		<textarea name="content"><?php echo $row['content']; ?></textarea>
		<br><br>
		<button type="submit" class="btn btn-primary" formaction="update.php">SAVE</button>
	</form>

	<br><br>
</div>

</body>
</html>
<?php
mysqli_close($conn);
?>