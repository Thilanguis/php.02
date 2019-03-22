<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Amazon</title>
    
    <?php include_once 'head.php'; ?>
    
</head>
<body>
    
    <div class="container">
        <h3>Cadastro de Cliente</h3>
        <form action="gravar.php" method="post" style="width: 400px;">
            Name:
            <input type="text" name="nome" class="form-control">
            E-Mail: 
            <input type="email" name="email" class="form-control"> 
            <label for="">Estado Civil</label>
            <select class="form-control" id="" name="estadoCivil">
            <option value="" disabled selected>...</option>
            <option value="Casado">Casado</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Viúvo">Viúvo</option>
            </select> <br>
            
            Sexo: &nbsp;
            <input type="radio" name="sexo" value="M" checked>Masculino &nbsp; 
            <input type="radio" name="sexo" value="F">Feminino <br><br>
            <input type="submit" class="btn btn-success">
        </form>
    </div>
    
</body>
</html>