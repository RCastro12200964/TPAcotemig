<?php
    require ('conexao.php') ; 
    if($_server = $_post["REQUEST_METHOD"] == "POST"){
        echo $NOME = $_POST ["nome"] . '<br>';
        echo $EMAIL = $_POST ["email"] . '<br>';
        echo $SEXO = $_POST ["sexo"] . '<br>';
        echo $ENDEREÇO = $_POST ["endereço"] . '<br>';
        echo $COMPLEMENTO = $_POST ["complemento"] . '<br>';
        echo $BAIRRO = $_POST ["bairro"] . '<br>';
        echo $UF = $_POST ["uf"] . '<br>';
        echo $MODALIDDE = $_POST ["modalidade"] . '<br>';
        echo "<hr>"
    }
    function inserirRegistro($conexao, $nome, $email, $sexo, Sendereco, $complemento, $bairro, $cidats, $uf,
$sql = "INSERT INTO alunos (nome, email, sexo, endereco, complemento, bairro, cidade, uf, modalidade
VALUES (:nome, :email, :sexo, :endereco, :complemento, :bairro, :cidade, :uf, :modalidade)";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
$stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
$stmt->bindParam(':complemento', $complemento, PDO::PARAM_STR);
$stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
$stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
$stmt->bindParam(':uf', Suf, PDO::PARAM_STR);
$stmt->bindParam(':modalidade', $modalidade, PDO::PARAM_STR);
return $stmt->execute();
N
EAN NNNN
if (inserirRegistro($conexao, $nome, $email, $sexo, $endereco, $complemento, $bairro, $cidade, $uf, $modalidade
echo "Registro inserido com sucesso!<br>" . "<a href=-'cadastro.php">HOME</a>";
} else {
echo Erro ao inserir o registro.';
    ?>
    