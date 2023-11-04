<?php
    if(isset($_POST['submit'])) {

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email']; 
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade']; 
        $estado = $_POST['estado']; 
        $endereco = $_POST['endereco']; 
        
        $resultado = mysqli_query($conexao, "INSERT INTO tb_clientes(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
    }   
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>

    <img src="imagens/alleart.png">
            
    <div class="box">
     
        <form action="index.php" method="POST">
            <fieldset>
                <legend><strong>Formulário de Clientes</strong></legend>

                <br />

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br /><br />

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br /><br />

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br />

                <p>Sexo:</p>
                <input type="radio" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br/>

                <input type="radio" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br/>

                <input type="radio" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br /><br />

                <div class="inputBox">
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br /><br />

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br /><br />

                <div class="inputBox">
                    <input type="estado" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br /><br />

                <div class="inputBox">
                    <input type="endereco" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br /><br />

                <input type="submit" name="submit" id="submit">
            </fieldset>

        </form>
    </div>
    
</body>

</html>