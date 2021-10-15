<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Resposta</title>
    <link rel="stylesheet" type="text/css" href="css/stylo.css">
</head>
<body>

    <h1> Aula 02 - Resposta</h1>

    <?php include_once 'menu.php' ?>

    <h2>Dados informados:</h2>

    <?php 
    
    /*
    //declaraçao das variaveis
    $nome = "Lewy Caron"; //string (conjunto de caracteres)
    $idade = 36; // valor  int (valores numericos não ficam entrew aspas)
    $email = "lewycaron@gmail.com";
    */

  

    if(isset($_POST['nome'], $_POST['idade'], $_POST['email'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
    
        
    // Saida de dados em php é echo
    echo "Seu nome é $nome, vocë tem $idade anos, e seu e-mail para contato é  $email.";
    // interpolaçao de dados (var dentro da string) 
    
    }else{

        echo "Nenhum dado disponivel"; 
    }
  

    ?>
    
</body>
</html>