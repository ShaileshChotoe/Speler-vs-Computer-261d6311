<!DOCTYPE html>
<html>
<head>
	<title>Stijn, Papier, Schaar</title>
</head>
<body>
        <h1>Stijn Papier Schaar</h1>
		<h2>Speler 1</h2>
		<?php
		$dis = "";
		if(isset($_GET["submit"]))
			$dis = "display: none;";
		echo "<form method='get' action='end2.php' style='" . $dis
		. "'><select name='drop'><option>Stijn</option><option>Papier</option><option>Schaar</option></select><input type='submit' value='submit' name='submit'></form>";
			if (isset($_GET["submit"])) {
				$p1c = $_GET["drop"];
			}
		?>
		
</body>
</html>