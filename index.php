<?php
 if(isset($_POST['btn'])){
 	$x=1;
 	while($x<=10){
 		$y=1;
 		while($y<=6){
 			$min = 1;
 			$max = 60;
 			$n = rand($min,$max);
 			echo $n."-";
 			$y++;
 		}
 		$x++;
 		echo "<br>";
 	}
 }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>	
        <form action="index.php" method="post">
        	<div>	
                <input type="submit" name="btn" value="PALPITE">
        	</div>
        </form>
	</div>	
</body>
</html>