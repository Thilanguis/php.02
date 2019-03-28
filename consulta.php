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
    $nome = $GET["nome"];
        
        include_once 'conexao';
    
    $sql = "select * from contatos where nome like '%".$nome."%'";
    
        $result = mysqli_query ($con,$sql);
        
        $registros = mysqli_num_rows (result);
        
        if ($registros > 0)
        {
            
        }
    ?>
    
    </div>
    
    
</body>
</html>