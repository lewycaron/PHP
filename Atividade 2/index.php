<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1>Classificação de um mamífero</h1>
        <h3>Construa um programa em PHP que seja capaz de concluir qual dentre os seguintes animais do diagrama abaixo foi escolhido, através de perguntas referentes às características dos animais</h3>

        <form action="index.php" method ="post">
        <div>
            <label>O animal é Quadrupede?</label>
            <select name="quadrupede">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div>
            <label>O animal é Carnivoro?</label>
            <select name="carnivoro">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div>
            <label>O animal é Bipede?</label>
            <select name="bipede">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div>
            <label>O animal é Onivoro?</label>
            <select name="onivoro">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div> 
        <div>
            <label>O animal é voador?</label>
            <select name="voador">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div>
            <p>
                <input type="submit" value="enviar" name="enviar">
            </p>
        </div>
        </form>

        <?php 
            if(isset($_POST['enviar'])){
                
                $carnivoro = $_POST['carnivoro'];
                $quadrupede = $_POST['quadrupede'];
                $bipede = $_POST['bipede'];
                $onivoro = $_POST['onivoro'];
                $voador = $_POST['voador'];

                if($quadrupede == 1){
                    if ($carnivoro == 1){
                        echo "é um Leão!";
                    }
                    else if ($carnivoro == 0){
                        echo "É um Cavalo!";
                    }
                }else if ($quadrupede == 0){
                    if ($bipede == 1){
                        if ($onivoro == 1){
                            echo "É um homem!";
                        }else if ($onivoro == 0){
                            echo "É o macaco!";
                        }
                    }else if ($bipede == 0){
                        if ($voador == 1){
                            echo "É um morcego!";
                        } else if ($voador == 0){
                            echo "É uma baleia!";
                        }
                    }
                }
            }
     
        
        ?>
        
</body>
</html>