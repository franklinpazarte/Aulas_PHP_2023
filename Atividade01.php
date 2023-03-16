<!DOCTYPE html>
<html>
<head>
	<title>Questao 01 Algoritimo</title>
	<!-- Adicione os arquivos CSS do Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center mb-4">Questão 01</h1>
		<hr>
		<h3>
			Algoritmo onde sejam digitados 10 números e exiba-os na ordem crescente
		</h3>
		<form method="post">
			<div class="form-group">
				<label for="numeros">Digite 10 números:</label>
				<input type="text" class="form-control" id="numeros" name="numeros" placeholder="Digite 10 números separados por vírgula">
			</div>
			<button type="submit" class="btn btn-primary" name="gerarTabela">Gerar Números</button>
		</form>

		<?php 
		if (isset($_POST['gerarTabela'])) {
			$numeros = $_POST['numeros'];
			$numeros_array = explode(",", $numeros);
			sort($numeros_array); 
		?>

		<div class="mt-4">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Números em ordem crescente:</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($numeros_array as $numero) { ?>
						<tr>
							<td><?php echo $numero; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<?php } ?>
	</div>

	<br><br>

	<div class="container">
		<h1>Questão 02</h1>
		<hr>
		<h3>Crie uma calculadora onde possamos calcular as operações básicas (somar, subtrair, multiplicar e dividir) além de potenciação e raiz quadrada. Use formulários</h3>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="num1">Número 1:</label>
				<input type="number" class="form-control" id="num1" name="num1" required>
			</div>
			<div class="form-group">
				<label for="num2">Número 2:</label>
				<input type="number" class="form-control" id="num2" name="num2" required>
			</div>
			<div class="form-group">
				<label for="op">Operação:</label>
				<select class="form-control" id="op" name="op">
					<option value="+">Somar</option>
					<option value="-">Subtrair</option>
					<option value="*">Multiplicar</option>
					<option value="/">Dividir</option>
					<option value="**">Potenciação</option>
					<option value="sqrt">Raiz Quadrada</option>
				</select>
			</div>
			<button type="submit" class="btn btn-default">Calcular</button>
		</form>
		<br>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$op = $_POST['op'];
				switch($op) {
					case "+":
						$result = $num1 + $num2;
						break;
					case "-":
						$result = $num1 - $num2;
						break;
					case "*":
						$result = $num1 * $num2;
						break;
					case "/":
						$result = $num1 / $num2;
						break;
					case "**":
						$result = pow($num1, $num2);
						break;
					case "sqrt":
						$result = sqrt($num1);
						break;
					default:
						$result = 0;
				}
				echo "<h3>O resultado é: $result</h3>";
			}
		?>
	</div>

	<br>

	<div class="container mt-4">
		<h1>Questão 03</h1>
		<hr>
		<h3>Crie um pequeno sistema onde seja possível receber um valor e um numero de parcelas. Também, incremente uma data mensal para que tal parcela seja paga (use apenas o mês). Use formulários para receber os dados e uma tabela para exibir os dados resultantes com as colunas: Data de Vencimento, Número da Parcela, Valor Parcela.</h3>
		<form method="POST" action="parcelamento.php">
			<div class="form-group">
				<label for="valor">Valor:</label>
				<input type="number" class="form-control" id="valor" name="valor" required>
			</div>
			<div class="form-group">
				<label for="parcelas">Número de parcelas:</label>
				<input type="number" class="form-control" id="parcelas" name="parcelas" required>
			</div>
			<button type="submit" class="btn btn-primary">Calcular</button>
		</form>
	</div>

	<hr>

	<div class="container">
		<h1>Questão 05</h1>
		<h3>Gerar 06 dezenas mega sena</h3>
		<hr>
		<?php
// Define a função que gera as dezenas
function gerarDezenas() {
  $dezenas = array(); // cria um array vazio para armazenar as dezenas

  // Loop para gerar as dezenas
  while (count($dezenas) < 6) {
    $dezena = rand(1, 60); // gera um número aleatório entre 1 e 60

    // Verifica se a dezena já foi gerada
    if (!in_array($dezena, $dezenas)) {
      $dezenas[] = $dezena; // adiciona a dezena ao array de dezenas
    }
  }

  sort($dezenas); // ordena as dezenas em ordem crescente
  return $dezenas; // retorna o array de dezenas gerado
}

// Chama a função para gerar as dezenas
$dezenas = gerarDezenas();

// Exibe as dezenas geradas em um formulário
echo '<form>';
foreach ($dezenas as $dezena) {
  echo '<input type="text" value="' . $dezena . '"> ';
}
echo '</form>';
?>

	</div>

	<!-- Adicione os arquivos JS do Bootstrap e o jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
