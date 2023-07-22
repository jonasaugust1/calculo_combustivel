<?php
if($_POST){
    $distancia = $_POST["distancia"];
    $autonomia = $_POST["autonomia"];
    $preco = $_POST["preco"];
    $mensagem;
    
    if(is_numeric($distancia) && is_numeric($autonomia) && is_numeric($preco)){
        if($distancia > 0 && $autonomia > 0){
            $calculo = ($distancia / $autonomia) * $preco;
            $calculo = number_format($calculo, 2, ",", ".");

            $mensagem = "<p>O valor de consumo do combustível é de R$ $calculo</p>";
        } else{
            $mensagem .= "<div class='erro'>";
            $mensagem .= "<p>O valor da distancia e autonomia deve ser maior que 0</p>";
            $mensagem .= "</div>";
        }
        
    } else{
        $mensagem .= "<div class='erro'>";
        $mensagem .= "<p>O valor recebido não é numérico</p>";
        $mensagem .= "</div>";
    }
    
} else{
    $mensagem .= "<div class='erro'>";
    $mensagem .= "<p>Nenhum dado foi recebido pelo formulário</p>";
    $mensagem .= "</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo de Consumo de Combustível</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main>
		<div class="painel">
			<h2>Resultado do cálculo de consumo</h2>
			<div class="conteudo-painel">
				<?php
				echo $mensagem;
				?>
				<a class="botao" href="index.php">Voltar</a>
			</div>
		</div>
	</main>
</body>
</html>
