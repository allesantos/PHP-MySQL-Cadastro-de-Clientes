<?php
    $db_servidor = 'Localhost';
    $db_usuario = 'root';
    $db_senha = '';
    $db_nomeDB = 'db_clientes';

    $conexao = new mysqli($db_servidor, $db_usuario, $db_senha, $db_nomeDB);

    if($conexao -> connect_errno) {
        echo '<h3 style="color:#006400;position: absolute;top:890px;left: 810px;">Erro!</h3>';
    } else{
        echo '<h3 style="color:#006400;position: absolute;top:890px;left: 810px;">Usuário cadastrado com sucesso!</h3>';
    }
?>
?>