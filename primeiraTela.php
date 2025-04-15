<?php




  

include_once("config.php");

$sql = "SELECT * FROM endereco ORDER BY id  DESC";
$result = $conexao->query(query: $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="primeiraTela.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<div class="m-5" >
    <table class="table">
        <thead class="coluna" >
            <tr>
                <th scope="col">Id</th>
                <th scope="col">nome</th>
                <th scope="col">cidade</th>
                <th scope="col">estado</th>
                <th scope="col">...</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 

            while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data["nome"]."</td>";
                echo "<td>".$user_data["cidade"]."</td>";
                echo "<td>".$user_data["estado"]."</td>";
                echo "<td>Selecão</td>";
                echo "<tr>";

            }
            
            
            ?>
        </tbody>

    </table>
</div>