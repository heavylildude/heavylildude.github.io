<?php
session_start();
if (isset($_SESSION['mywebsite'])) {
	$admin_email = $_SESSION['mywebsite'];
} else {
	echo '<script>location.replace("index.php")</script>';
}

//

if (isset($_GET['search_article'])) {
	$search_article = $_GET['search_article'];
} else {
	$search_article = '';
}

$servername = "localhost";
$dbusername = "root";
$dbpassword = "yes";
$dbname = "sample_articles";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM cms_admin WHERE admin_email = '".$admin_email."' ";
$result = mysqli_query($conn, $sql);
$admin = mysqli_fetch_assoc($result);
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
  	th {
  		text-transform: capitalize;
  	}
  	td img {
  		width: 100%
  	}
  	tr {
  		border-bottom: 1px solid #ccc;
  	}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container">

    <a class="navbar-brand" href="http://google.com" target="_blank">Welcome <?php echo $admin['admin_name']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addnew.php">Add New</a>
        </li>
      </ul>
    </div> 

    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>  
      </ul>
    </div> 

  </div>
</nav> 

<div class="container">
	<br><br>

	<form method="get">
		<label>Search article</label>
		<input type="text" name="search_article" value="<?php echo $search_article; ?>" placeholder="Fill blank to search all..." />
		<button type="submit" class="btn btn-primary" formaction="dashboard.php">search</button>
	</form>
	
	<br>
	<table style="width:100%">
		<tr>
			<th>no.</th>
			<th style="width: 8%">image</th>
			<th>title</th>
			<th>category</th>
			<th>article_date</th>
			<th>author</th>
			<th>content</th>
			<th></th>
		</tr>
	
		<?php
			$sql = "SELECT * FROM articles";
			$result = mysqli_query($conn, $sql);
			$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

			$no = 1;
			foreach ($rows as $row) {

				echo '<tr>';
					echo '<td>'.$no.'</td>';
					echo '<td><image src="..'.$row['image'].'" /></td>';
					echo '<td onclick="location.replace(\'edit.php?id='.$row['id'].'\')">'.$row['title'].'</td>';
					echo '<td>'.$row['category'].'</td>';
					echo '<td>'.date('d F Y', strtotime($row['article_date'])).'</td>';
					echo '<td>'.$row['author'].'</td>';
					echo '<td>'.$row['content'].'</td>';

					echo '<td><button type="button" class="btn" onclick="location.replace(\'delete.php?id='.$row['id'].'\')">X</button></td>';
					
				echo '</tr>';

				$no++;
			}
			?>
	</table>
	
  <br><br>
</div>

</body>
</html>
<?php
mysqli_close($conn);
?>