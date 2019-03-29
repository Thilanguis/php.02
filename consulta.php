<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Amazon</title>
    
    <?php include_once 'head.php'; ?>
    
</head>
<body>
    
    <div class="container">
    <h3>Consutar Contatos!</h3>
    <form action="" method="get" style="width: 500px;">
    <label>Nome</label>
    <div class="form-group">
    <input type="text" name="nome" class="form-control">
    <div style="margin-top: 10px;">
    <input type="submit" value="Buscar" class="btn btn-primary">
    </div>
    </div>
    </form>
    
    <?php
         if(isset($_GET["nome"]))
         {
    $nome = $_GET["nome"];
        
        include_once 'conexao.php ';
    
    $sql = "select * from contatos where nome like '%".$nome."%' order by nome";
    
        $result = mysqli_query ($con,$sql);
        
        $totalRegistros = mysqli_num_rows ($result);
        
        if ($totalRegistros > 0)
         
            { ?>
        <table id="tabelaDinamica" class="table table-hover table-stiped">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>Telefone1</th>
            </tr>

            <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>".$row["nome"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["estadoCivil"]."</td>";
                        echo "<td>".$row["sexo"]."</td>";
    
                    } ?>
        </table>
        <?php 
        }
             else{
                 echo "Nenhum registro encontrado!";
             }
             }
        
    ?>
    
    </div>
    
    
</body>
</html>