<!DOCTYPE html>
<html>
<head>
	<title>perkalian</title>
</head>
<body>
<table border="1" align="center" width="1000px" height="30px" bgcolor='yellow'>

	<tr bgcolor='orange'>
		<td colspan="10" align="center">Perkalian</td>
	</tr>	
	<tbody>
		<?php
		for($baris=1; $baris<=10; $baris++): ?>

	<tr><?php
	for($kolom=1; $kolom<=10; $kolom++): ?>
		<td><?php echo "$baris  x  $kolom=".($kolom)*($baris); ?></td>
	<?php endfor ?>
	</tr>
	<?php endfor ?>



	</tbody>
</table>



</body>
</html>
