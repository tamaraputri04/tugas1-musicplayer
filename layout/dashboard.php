<?php 


?>

<!DOCTYPE html>
<html>
<head>
	<title>SI Music Player</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/headphones.png" rel="shortcut icon">
</head>
<body>
	<div class="container">
		<div class="menu">
			<a href="dashboard.php">Dashboard</a>
			<a href="dashboard.php?page=artist_tampil">Artis</a>
			<a href="dashboard.php?page=album_tampil">Album</a>
			<a href="dashboard.php?page=track_tampil">Lagu</a>
			<a href="dashboard.php?page=user_tampil">User</a>
			<a href="user_logout.php">Logout</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "dashboard_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020 &copy; Momoca Music Player 
		</div>
	</div>
</body>
</html>