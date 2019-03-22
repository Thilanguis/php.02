<?php 

 include_once 'head.php';

$nome        = $_POST["nome"];
$email       = $_POST["email"];
$estadoCivil = $_POST["estadoCivil"];
$sexo        = $_POST["sexo"];

echo "nome".$nome;
echo "<br>email".$email;
echo "<br>estadoCivil".$estadoCivil;
echo "<br>sexo".$sexo;
 
include_once 'conexao.php';

$sql = "insert into contatos values ('null', '".$nome."', '".$email."', '".$estadoCivil."', '".$sexo."')";

$result = mysqli_query ($con,$sql);

if ($result)
{
    echo "Dados gravados com sucesso";
    ?> <br> <a href="index.php"><button class="btn btn-primary">Ok</button></a> <?php
}

else
{
   echo "Erro ao gravar no banco"; 
   echo "Erro:".mysqli_error($con);
}

mysqli_close($con);
    
?>