<?php
if (isset($_POST['submit'])) {



    //teste para receber os valores digitados


    print_r(value: $_POST['idade']);
    print_r(value: '<br>');
    print_r(value: $_POST['genero']);
    print_r(value: '<br>');



}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selecct enderecos</title>
    <link rel="stylesheet" href="selecaoEndereco.css">
</head>

<body>
    <header>
        <a href="login.php"><button>Novo endereço</button></a>
    </header>


    <div class="box">
        <form action="perguntas.php" method="POST">

            <fieldset>
                <legend>Pesquisa DCA</legend>
                <nav class=" lisPerguntas">

                    <!---- 1 pergunta-->

                    <p>Sua idade</p>

                    <input type="radio" name="idade" id="idade" class="idade" value="cianca" required>
                    <label for="crianca">Criança</label>

                    <input type="radio" name="idade" id="idade" class="idade" value="adulto" required>
                    <label for="crianca">Criança</label>

                    <input type="radio" name="idade" id="idade" class="idade" value="adolelcente" required>
                    <label for="crianca">Criança</label>

                    <!---- 2 pergunta-->

                    <p>Genero</p>

                    <input type="radio" name="genero" id="gereno" class="genero" value="cisgenero feminino" required>
                    <label for="cisgenero feminino">Cisgenero feminino</label><br>

                    <input type="radio" name="genero" id="gereno" class="genero" value="cisgeneromasculino" required>
                    <label for="cisgenero masculino">Cisgenero masculino</label><br>

                    <input type="radio" name="genero" id="gereno" class="genero" value="transgênero feminino" required>
                    <label for="transgênero feminino">Transgênero feminino</label><br>

                    <input type="radio" name="genero" id="gereno" class="genero" value="Transgênero masculino" required>
                    <label for="Transgênero masculino">Transgênero masculino</label><br>

                    <input type="radio" name="genero" id="gereno" class="genero" value="perfiro nao responder" required>
                    <label for="prefiro não responder">Prefiro não responder</label><br>

                    <input type="radio" name="genero" id="gereno" class="genero" value="outros" required>
                    <label for="outros">Outros</label><br>

                    <!---- 3 pergunta-->



                    <input type="submit" name="submit" id="submit">



                </nav>


            </fieldset>
        </form>

    </div>


</body>

</html>