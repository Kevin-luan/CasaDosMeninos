<?php



if (!empty($_GET['id'])) {

    include_once('config.php');
    $ids = $_GET['id'];

   

}

    if (isset($_POST['submit'])) {



        include_once('config.php');

        $ids = $_POST['ids'];
        $idade = $_POST['idade'];




        $result = mysqli_query(mysql: $conexao, query: "INSERT INTO teste(idEndereco,resposta) VALUES('$ids','$idade')");



    }






















?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selecct enderecos</title>
    <link rel="stylesheet" href="selecaoEndereco">
</head>

<body>



    <div class="box">
        <form action="perguntas.php" method="POST">

            <fieldset>
                <legend>Pesquisa DCA</legend>
                <nav class=" lisPerguntas">

                    <!---- 1 pergunta-->

                    <input type="hidden" name="ids" value="<?php echo htmlspecialchars($ids); ?>">

                    <p>Sua idade</p>

                    <input type="radio" name="idade" id="idade" class="idade" value="cianca" required>
                    <label for="crianca">Criança</label>

                    <input type="radio" name="idade" id="idade" class="idade" value="adulto" required>
                    <label for="adulto">Adulto</label>

                    <input type="radio" name="idade" id="idade" class="idade" value="adolelcente" required>
                    <label for="adolelcente">Adolelcente</label>

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

                    <p>Com qual cor raça você se identifica: </p>

                    <input type="radio" name="raca" id="raca" class="raca" value="preta" required>
                    <label for="preta">preta</label><br>

                    <input type="radio" name="raca" id="raca" class="raca" value="branca" required>
                    <label for="branca">branca</label><br>

                    <input type="radio" name="raca" id="raca" class="raca" value="parda" required>
                    <label for="parda">parda</label><br>

                    <input type="radio" name="raca" id="raca" class="raca" value="amarela" required>
                    <label for="amarela">amarela</label><br>

                    <input type="radio" name="raca" id="raca" class="raca" value="indegena" required>
                    <label for="indigina">Indigina</label><br>



                    <div class="perguntaBotao"> 
                          <input type="submit" name="submit" id="submit">
                          <a href="primeiraTela.php"><input type="button" value="Voltar"></a>


                    </div>
                 

                </nav>


            </fieldset>
        </form>

    </div>


</body>

</html>