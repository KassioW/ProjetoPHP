<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>

<link rel="stylesheet" href="style.css">

<body>
 <form method="post" action="#">

    <div name="nome">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"/>
    </div>

    <div>
        <label for="senha">Senha:</label>
        <input type="text" id="senha" name="senha"/>
    </div>

    <div>
        <label for="senha1">Confirma:</label>
        <input type="text" id="senha1" name="senha1"/>
    </div>

    <div>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" />

    </div>
<div>
    
<input type="checkbox"  name="chklista[]" value="Pessoa Física"> Pessoa Física
<input type="checkbox"  name="chklista[]" value="Pessoa Jurídica"> Pessoa Jurídica
<br>
<input type="checkbox"  name="chklista[]" value="Aceitar termos"> Aceitar Termos

</div>

<div>
    <button type="submit" name="acao" value="cadastrar">ENVIAR</button> 
</div>

    <?php
/*
echo "nome: ".@$_POST["nome"]."<hr/>";
echo "senha: ".@$_POST["senha"]."<hr/>";
echo "senha1: ".@$_POST["senha1"]."<hr/>";
echo "email: ".@$_POST["email"]."<hr/>";
*/

    if(isset($_POST["acao"])) {

        if($_POST["email"] == ''){
            echo "error";

        } else{

        echo "nome: ".$_POST["nome"]."<hr/>";
        echo "senha: ".$_POST["senha"]."<hr/>";
        echo "senha1: ".$_POST["senha1"]."<hr/>";
        echo "email: ".$_POST["email"]."<hr/>";
        }
        echo "Foram selecionados: <br/>";
        foreach ($_POST["chklista"] as $key => $value) {
            echo $value." <br/>";
        }

    }
    ?>
</form>
</body>
</html>