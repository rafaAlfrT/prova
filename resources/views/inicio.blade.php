<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de trabalhadores</title>
</head>
<body>
    <form action="/cadastrar-cadastro" method="POST">
		@csrf
        <label for="lblNome" >Nome:</label>
		<input type="text" name="nome"/>
		<br><br>
			
		<label for="lblProfissao" >Profissão:</label>
		<input type="text" name="profissao"/>
		<br><br>
			
		<label for="lblSalario" >Salário:</label>
		<input type="text" name="salario"/>
		<br><br>

		<button>Cadastrar</button>
    </form>
</body>
</html>