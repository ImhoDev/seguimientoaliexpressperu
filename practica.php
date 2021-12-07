<?php 
	include 'view/head.php';
	include 'view/top.php';

	printf ("inicio de pagina <br>");

	$tamañvar = (count($_SERVER));
	$i=1;

	printf("$tamañvar <br><div class='container-fluid'>");
	echo "
		<table class='table table-dark text-align junstify'>
			<thead>
				<tr>
					<th schope='col'>n°</th>
					<th schope='col'>varieable</th>
					<th schope='col'>valor</th>
				</tr>
			</thead>";
	foreach ($_SERVER as $key => $value) {
		$value = $value;
	echo "
			<tbody>
				<tr>
					<th schope='row'>$i</th>
					<td>$key</td>
					<td>$value</td>
				</tr>
			</tbody>";
	$i++;
	}
	printf("</table></div>");

	print_r(PDO::getAvailableDrivers());

	require_once 'view/footer.php';
 ?>	