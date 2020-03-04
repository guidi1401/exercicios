<!DOCTYPE HTML>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8"/>
		<title> Formulário 1 </title>
		<script>
			function validar(valor1, valor2, valor3, valor4){
				mensagem="";
				if(valor1==""){
					mensagem+= "nao informou o nome! \n";
				}else{ 
					mensagem+= "ja informou o nome ('"+valor1+"')! \n";;
				}
				if(valor2==""){
					mensagem+= "nao informou o email! \n";
				}else{ 
					mensagem+= "ja informou o email ('"+valor2+"')! \n";
				}
				if(valor3==""){
					mensagem+= "nao informou o sexo! \n";
				}else{ 
					mensagem+= "ja informou o sexo ('"+valor3+"')! \n";
				}
				if(valor4==""){
					mensagem+= "nao informou a data de nascimento! \n";
				}else{ 
					mensagem+= "ja informou a data de nascimento ('"+valor4+"')! \n";
				}
				alert(mensagem);
			}
		</script>
	</head>
	<body>
		<form name="form" method="post">
			<p>
				<label>Nome:</label>
				<input type="text" name="nome"/>
			</p>
			<p>
				<label>Email:</label>
				<input type="email" name="email"/>
			</p>
			<p>
				<label>Sexo:</label>
				<select name="sexo"/>
					<option value="">::selecione::</option>
					<option value="masculino">Masculino</option>
					<option value="feminino">Feminino</option>
					<option value="outro">Outro</option>
				</select>
			</p>
			<p>
				<label>Data de Nascimento:</label>
				<input type="date" name="data"/>
			</p>
			<input type="button"  value="Enviar" onclick="validar(document.form.nome.value, document.form.email.value, document.form.sexo.value, document.form.data.value)"/>
		</form>
	</body>
</html>