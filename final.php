<?php


/*   Teste para verifocar sew o botão submit estar funcionado 
if(isset($_POST['submit']))
{
    print_r(value: $_POST['avaliar']);
}*/

include_once('config.php');
$feedback = $_POST['feedback'];


$result = $result = mysqli_query(mysql: $conexao, query: "INSERT INTO feedback( valoFeedback ) Values ('$feedback')");



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="final.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header>


        <nav>
            <ul>
                <li><i class="fa-brands fa-instagram"><a href="https://www.instagram.com/pontodeculturacasadosmeninos/">
                            instagram</a></i></li>
                <li> <i class="fa-brands fa-facebook"><a href="https://www.facebook.com/pontodeculturacasadosmeninos">
                            facebook</a></i> </li>
                <li> <i class="fa-brands fa-youtube"><a href="https://www.youtube.com/@CasaDosMeninos1"> Youtube</a></i>
                </li>

            </ul>
        </nav>

    </header>



    <main>

        <form action="final.php" method="POST">

            <fieldset>
                <legend>aaaaaaa</legend>

                <div>
                    <button>


                        <input type="radio" name="feedback" id="muito-bom" class="radio-label" value="Muito Bom" required>
                        <label for="muito-bom">Muito Bom</label><br>


                    </button>




                    <input type="radio" name="feedback" id="feedback" class="feedback" value="Bom" required>
                    <label for="verdadeiro">Bom</label><br>


                    <input type="radio" name="feedback" id="feedback" class="feedback" value="ruim" required>
                    <label for="verdadeiro">Ruim</label><br>








                    <input type="radio" name="feedback" id="feedback" class="feedback" value="Pessimo" required>
                    <label for="verdadeiro">péssimo</label><br>


















                    <input type="submit" name="submit" id="submit">



                </div>









            </fieldset>

        </form>
















    </main>


</body>

</html>