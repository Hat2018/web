<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>L2</title>
</head>

<body>
<table>
	<caption>Таблиця множения</caption>

	
		<?php
		
			function t2 ($a,$b){
			    for($i=$a; $i<$a+3; $i++)
			        echo "\t\t<td>$i x $b = ".$b*$i."</td>\n";
			    echo "\t</tr>\n";
			}
			 
			for($i=1; $i<=9; $i+=3){
			    for($j=1; $j<=9; $j++){
			        t2($i,$j);
			    }
			    echo "<tr><td colspan=3/></tr>";
			}
		?>
	
</table>

</body>
</html>