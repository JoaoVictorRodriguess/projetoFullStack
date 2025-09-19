<?php
	session_start();
	require_once("config.php");
	$postdata = http_build_query(
			array( 'api_token' => $token ) );
			
	$opts = array('http' => 
	    array(
          'method' => 'POST',
		  'header' => 'Content-type: Application/x-www-form-urlencoded',
		  'content' => $postdata ) );

	$context = stream_context_create($opts);
	$result = file_get_contents(
	    $servidor . 'APIListaPessoas.php',
		false, $context);
		
	$jsonObj = json_decode($result);

?>	
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Primeiro Front End</title>
	</head>
	<body>
		<h1>Lista de Pessoas</h1>
		<br>
		<table class="table" style="font-size: 16px;">
			<tr>
				<th style="text-align:center; width: 50%">Nome</th>
				<th style="text-align:center; width: 20%">Idade</th>
			</tr>

<?php	
	if (!empty($jsonObj) && is_array($jsonObj)) {
		foreach ($jsonObj as $pessoa) {
			echo "<tr>";
				echo "<td style='text-align:left; width:50%'>$pessoa->nome</td>";
				echo "<td style='text-align:center; width:20%'>$pessoa->idade anos</td>";
			echo "</tr>";
		}
	} else {
		echo "<tr><td colspan='2'>Nenhuma pessoa encontrada ou token inválido</td></tr>";
	}
?>
		</table>
	</body>
</html>