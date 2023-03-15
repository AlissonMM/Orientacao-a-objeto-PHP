<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php 
require_once "control/pessoa.php";
require_once "control/dev.php";
require_once "control/diretor.php";
require_once "control/professor.php";
?>
</head>

<body>
    <style>
        body{
            text-align: Center
        }
    </style>

<H1>Atributos privados </h1>
<form action="" method="post">
    <input type="text" name="cxNome" placeholder="Nome"><br><br>
    <input type="number" name="cxIdade" placeholder="Idade"><br><br>
    <input type="email" name="cxEmail" placeholder="Email"><br><br>
    <input type="radio" name="radioProfissao" value="Dev" Checked= true>Dev
    <input type="radio" name="radioProfissao" value="Diretor">Diretor
    <input type="radio" name="radioProfissao" value="Professor">Professor <br><br>
    <input type="submit" name="Salvar" value="Enviar">
</form>

    <?php
        $Profissao = $_POST['radioProfissao'];
        $Nome = $_POST['cxNome'];
        $Idade = $_POST['cxIdade'];
        $Email = $_POST['cxEmail'];

		$dev1 = new $Profissao;
		$dev1->setNome($Nome);
        $dev1->setIdade($Idade);
        $dev1->setEmail($Email);
    ?>

    <br><br>
    
      Nome: <?php  echo $dev1->getNome();
        ?>
        <br>
        
       Idade: <?php echo $dev1->getIdade();
        ?>
        <br>
        
      Email: <?php echo $dev1->getEmail();
        ?>
        <br>
       Salário: <?php echo $dev1->getSalario();
    ?>
    <br>
    Profissao: <?php echo $dev1->getProfissao();
    ?>
		
	
</body>
</html>
