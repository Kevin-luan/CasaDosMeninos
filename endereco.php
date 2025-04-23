<?php
if(isset($_POST['submit'])){



    //teste para receber os valores digitados

    /*  
    print_r($_POST['nome']);
    print_r($_POST['estado']);
    print_r($_POST['cidade']);
    print_r($_POST['bairro']);
    */

        include_once('config.php');
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];

    $result = mysqli_query(mysql: $conexao, query:"INSERT INTO endereco(nome,cidade,estado,rua) VALUES('$nome','$cidade','$estado','$bairro')");
}

?>


                  
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereco</title>
    <link rel="stylesheet" href="endereco.css">
</head>

<body>

    <div class="box">
    <form action="endereco.php" method="post">
        
        <fieldset>
            <legend>Endereço</legend><br>


            <!--Input local do nome--->

            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome">Nome do local da pesquisa</label>
            </div> <br>

             <!--Input estado --->
             <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="nome">Estado</label>
            </div> <br>

             <!--Input cidade --->

             <div class="inputBox">
                <input type="text" name="cidade" id="estado" class="inputUser" required>
                <label for="nome">Cidade</label>
            </div> <br>

             <!--Input bairro --->

             <div class="inputBox">
                <input type="text" name="bairro" id="bairro" class="inputUser" required>
                <label for="nome">Bairro</label>
            </div> <br>



             <!--Input Enviar--->

             <input c type="submit" name="submit" id="submit">

             



        </fieldset>
        

        </form>
        <a href="primeiraTela.php
        "><button>Voltar</button></a>

    </div> 

</body>

</html>