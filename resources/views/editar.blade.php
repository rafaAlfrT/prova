<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="/editar-cadastro/{{ $cadastro-> id }}" method="POST">
		@csrf
        <label for="lblNome" >Nome:</label>
		<input type="text" name="nome" value="{{ $cadastro->nome }}"/>
		<br><br>
			
		<label for="lbllblProfissao" >Valor:</label>
		<input type="text" name="profissao"  value="{{ $cadastro->profissao }}"/>
		<br><br>
			
		<label for="lblSalario" >Quantidade:</label>
		<input type="text" name="salario"  value="{{ $cadastro->salario }}"/>
		<br><br>

		<button>Editar</button>
    </form>
</body>
</html>