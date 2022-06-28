<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>listar cadastros</title>
    </head>
    <body>
        <h1>cadastros</h1>
		
			<label for="lblNome" >Nome:</label>
			<input type="text" name="nome" value="{{ $cadastro->nome }}"/>
			<br><br>
			
			<label for="lblProfissao" >Profissão:</label>
			<input type="text" name="valor"  value="{{ $cadastro->Profissao }}"/>
			<br><br>
			
			<label for="lblSalario" >Salário:</label>
			<input type="text" name="estoque"  value="{{ $cadastro->Salario }}"/>
			<br><br>
    	
    </body>
</html>
