<?php



if (!empty($_GET['id'])) {

    include_once('config.php');
    $ids = $_GET['id'];



}
/*
if (isset($_POST['submit'])) {



    include_once('config.php');

    $ids = $_POST['ids'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $raca = $_POST['raca'];
    $escolaridade = $_POST['escolaridade'];
    $trabalha = $_POST['trabalha'];
    $motivacaoTrabalho = implode(separator: ", ", array: $_POST['motivacaoTrabalho']);*/

if (isset($_POST['submit'])) {

    include_once('config.php');  // Conexão com o banco

    // Coleta os dados do formulário
    $ids = $_POST['ids'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $raca = $_POST['raca'];
    $escolaridade = $_POST['escolaridade'];
    $trabalha = $_POST['trabalha'];

    // Verifica se alguma motivação foi marcada, e junta as opções com uma vírgula
    if (isset($_POST['motivacaoTrabalho'])) {
        $motivacaoTrabalho = implode(", ", $_POST['motivacaoTrabalho']);
    } else {
        $motivacaoTrabalho = '';  // Caso nenhuma opção tenha sido marcada
    }


    $result = mysqli_query(mysql: $conexao, query: "INSERT INTO teste(idEndereco,respostaIdade,respostaGenero,respostaRaca,respostaEscolaridade,respostaTrabalho,respostamotivacaoTrabalho) VALUES('$ids','$idade','$genero','$raca','$escolaridade','$trabalha','$motivacaoTrabalho')");



}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selecct enderecos</title>
    <link rel="stylesheet" href="perguntas.css">
</head>

<body>






    <form action="perguntas.php" method="POST">

        <fieldset>
            <legend>Pesquisa DCA</legend>
            <nav class=" lisPerguntas">

                <!---- 1 pergunta-->

                <input type="hidden" name="ids" value="<?php echo htmlspecialchars($ids); ?>">

                <p class="paragrafo">Sua idade</p>

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
                <label for="indigina">Indigina</label><br><br>

                <!---- 4 pergunta--------------------------------------------------->

                <p>Escolaridade</p>


                <input type="radio" name="escolaridade" id="escolaridade" class="escolaridade"
                    value="ensino fundamental" required>
                <label for="ensino fundamental">Ensino Fundamental 1 (1º ao 5º ano)</label><br>

                <input type="radio" name="escolaridade" id="escolaridade" class="escolaridade"
                    value="ensino fundamenta2" required>
                <label for="ensino fundamenta2">Ensino Fundamental 2 (6º ao 9º)</label><br>


                <input type="radio" name="escolaridade" id="escolaridade" class="escolaridade" value="Ensino Medio"
                    required>
                <label for="Ensino fundamenta2">Ensino Medio</label><br>

                <input type="radio" name="escolaridade" id="escolaridade" class="escolaridade" value="Ensino Superior"
                    required>
                <label for="Ensino Superior">Ensino Superior</label><br>


                <!---- 5 pergunta--------------------------------------------------->
                <p>Voce Trabalha?</p>

                <input type="radio" name="trabalha" id="trabalha" class="trabalha" value="Sim" required>
                <label for="Sim">Sim</label><br>

                <input type="radio" name="trabalha" id="trabalha" class="trabalha" value="Nao" required>
                <label for="nao">Não</label><br>

                <!---- 6 pergunta--------------------------------------------------->

                <p>Qual motivação para Criança e adolecente trabalha</p>


                <label>
                    <input type="checkbox" name="motivacaoTrabalho[]"
                        value="1-Necessidade de complementar a renda familiar">
                    Necessidade de complementar a renda familiar
                </label><br>

                <label>
                    <input type="checkbox" name="motivacaoTrabalho[]"
                        value="2-Pressão ou incentivo da família para trabalhar">
                    Pressão ou incentivo da família para trabalhar
                </label><br>


                <label>
                    <input type="checkbox" name="motivacaoTrabalho[]"
                        value="3-Desejo de ter meu próprio dinheiro para gastos pessoais">
                    Desejo de ter meu próprio dinheiro para gastos pessoais
                </label><br>

                <label>
                    <input type="checkbox" name="motivacaoTrabalho[]"
                        value="4-Falta de interesse ou dificuldade nos estudos">
                    Falta de interesse ou dificuldade nos estudos
                </label><br>

                <label>
                    <input type="checkbox" name="motivacaoTrabalho[]"
                        value="5-Escola de má qualidade ou distante de casa">
                    Escola de má qualidade ou distante de casa
                </label><br>

                <label>
                    <input type="checkbox" name="motivacaoTrabalho[]"
                        value="6-Trabalho visto como forma de aprendizagem">
                    Trabalho visto como forma de aprendizagem
                </label><br>

                <label>
                    <input type="checkbox" name="motivacaoTrabalho[]"
                        value="7-Falta de oportunidades futuras mesmo com estudo">
                    Falta de oportunidades futuras mesmo com estudo
                </label><br>

                <label>
                    <input type="checkbox" name="motivacaoTrabalho[]" value="8-Tradição familiar">
                    Tradição familiar
                </label><br>

                <label>

                    <input type="checkbox" name="motivacaoTrabalho[]"
                        value="9-Situação de rua ou vulnerabilidade social">
                    Situação de rua ou vulnerabilidade social
                </label><br>

                <label>

                    <input type="checkbox" name="motivacaoTrabalho[]"
                        value="10-Exploração por terceiros (trabalho forçado ou ilegal)">
                    Exploração por terceiros (trabalho forçado ou ilegal)
                </label><br>


                <label for="nome">Outro motivo (especifique): </label>
                <input type="text" name="motivacaoTrabalho[]" id="motivacaoTrabalho[]" class="inputUser" required>


                <!---- 7 pergunta verdadeiro ou falso--------------------------------------------------->
                <h4>Desde 2013 o ensino obrigatório passou a ser da educação infantil a partir de 4 anos até o fim do
                    ensino médio. Por quais motivos você acha que levou a educação do ensino básico (4 a 17 anos) se
                    tornar obrigatório no Brasil?</h4>

                <p>Para cumprir a Emenda Constitucional nº 59/2009, que ampliou a obrigatoriedade da educação básica."

                </p>
                <input type="radio" name="7/1" id="7/1" class="7/1" value="Verdadeiro" required>
                <label for="verdadeiro">verdadeiro</label><br>

                <input type="radio" name="7/1" id="7/1" class="7/1" value="falso" required>
                <label for="falso">Falso</label><br>
                <!------>

                <p>Para alinhar o Brasil às metas do Plano Nacional de Educação (PNE), que prevê a universalização do acesso.  </p>
                <input type="radio" name="7/2" id="7/2" class="7/2" value="Verdadeiro" required>
                <label for="verdadeiro">verdadeiro</label><br>

                <input type="radio" name="7/2" id="7/2" class="7/2" value="falso" required>
                <label for="falso">Falso</label><br>





















                <div class="perguntaBotao">
                    <input id="enviar" type="submit" name="submit" id="submit">
                    <a href="primeiraTela.php"><input id="voltar" type="button" value="Voltar"></a>


                </div>


            </nav>


        </fieldset>
    </form>

    </div>


</body>

</html>