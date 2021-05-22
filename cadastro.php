<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST" action="cadastro.php">
        Cliente: &nbsp<input type="text" name="cliente" placeholder="Nome completo" required></br></br>
        Data: &nbsp<input type="date" name="data"required></br></br>
        Moeda de origem:&nbsp
                    <select name= "moedaOrigem">
                        <option>Real (BRL)</option>
                        <option>Dolar (USD)</option>
                        <option>Renminbi (CNY)</option>
                    </select></br></br>
        Valor original: &nbsp<input type="number" name="Valor original" placeholder="Digite o valor"></br></br> 
        Moeda de destino:&nbsp
                    <select name= "moedaDestino">
                        <option>Real (BRL)</option>
                        <option>Dolar (USD)</option>
                        <option>Renminbi (CNY)</option>
                    </select></br></br>              
    </form>
    

</body>
</html>