<?php




  

include_once("config.php");

$sql = "SELECT * FROM endereco ORDER BY id  DESC";
$result = $conexao->query(query: $sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="primeiraTela.css">
    <title>Document</title>
   

    
</head>
<body>
    
</body>
</html>
<header>
        
    </header>

   <main>

  
   

<div class="m-5" >
    <table class="table">
        <thead class="coluna" >
            <tr>
                <th scope="col">Id</th>
                <th scope="col">nome</th>
                <th scope="col">cidade</th>
                <th scope="col">estado</th>
                <th scope="col">selecão</th>
                
            </tr>
            
        </thead>
        <tbody>
            <div class="get">
            <?php 

            while($user_data = mysqli_fetch_assoc($result)){
                
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td >".$user_data["nome"]."</td>";
                echo "<td>".$user_data["cidade"]."</td>";
                echo "<td>".$user_data["estado"]."</td>";
                echo "<td><a href='perguntas.php?id=$user_data[id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right-circle' viewBox='0 0 16 16'>
            <path fill-rule='evenodd' d='M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z'/>
          </svg></a></td>";
                
                
                
                
                
                
                

    


                

            }
          
            
            ?>
            
              </div>
              
              
        </tbody>
        

    </table>
    

    <div class="botao">
    <a href="login.php"><button>Novo endereço</button></a>
    </div>


   
</div>

</main>









