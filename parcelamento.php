<!DOCTYPE html>
<html>
<head>
	<title>Parcelamento</title>
	<!-- Adicione os arquivos CSS do Bootstrap -->
	<a href="Atividade01.php"><button>Voltar para a página principal</button></a>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<?php
$valor = $_POST['valor'];
$parcelas = $_POST['parcelas'];
$data = date('m/Y');

$valor_parcela = $valor / $parcelas;

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>Parcelamento</title>';
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">';
echo '</head>';
echo '<body>';
echo '<div class="container mt-4">';
echo '<h1>Parcelamento</h1>';
echo '<table class="table">';
echo '<thead>';
echo '<tr>';
echo '<th>Data de Vencimento</th>';
echo '<th>Número da Parcela</th>';
echo '<th>Valor Parcela</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

for ($i = 1; $i <= $parcelas; $i++) {
	$data_parcela = date('m/Y', strtotime("+$i month"));
	echo '<tr>';
	echo '<td>' . $data_parcela . '</td>';
	echo '<td>' . $i . '</td>';
	echo '<td>' . number_format($valor_parcela, 2, ',', '.') . '</td>';
	echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</body>';
echo '</html>';

// <button onclick="head()">Voltar</button>

// <?php
// if(isset($_POST['voltar_pagina_principal'])){
//     header('Location: Algoritimo4.php');
//     exit;
// }
// ?>

<!-- <form method="post">
    <button type="submit" name="voltar_pagina_principal">Voltar para a página principal</button>
</form> -->




<!-- Adicione os arquivos JS do Bootstrap e o jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
