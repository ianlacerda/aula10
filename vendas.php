<?php 
    include("conexao.php") ;
    try{
        $sql = "insert into tblvendas (idvendedor,idproduto,qtd) values(:idvendedor,:idproduto,:qtd)";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":idvendedor", $_POST["idvendedor"]);
        $stmt->bindValue(":idproduto", $_POST["idproduto"]);
        $stmt->bindValue(":qtd", $_POST["qtd"]);
        $stmt->execute();

    } catch(PDOException $e){
        echo "Não Cadastrou. ".$e->getCode();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
</head>
<body>
    <h1>Cadastro de Vendas</h1>
    <!-- método de envio são 2:
    * method="GET" - Envia sem segurança pois exibe os dados na url - mais rápido
    * method="POST" - Oculta os dados da url, mas é mais lento 
    -->
    <form method="post">
    ID vendedor <input type="text" name="idvendedor"><br>
    <br>
    <br>
    ID Produto <input type="text" name="idproduto"><br>
    <br>
    <br>
    Quantidade <input type="text" name="qtd"><br>
    <br>
    <input type="submit" value="Cadastrar">

</form>
</body>
</html>