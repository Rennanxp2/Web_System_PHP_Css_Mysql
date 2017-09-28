
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="cssmenu/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="cssmenu/script.js"></script>
<center>
<div id='cssmenu'>
<ul>
   <li><a href='pesquisa.php'>Procurar</a></li>
   <li class='active'><a href='#'>Cadastros</a>
      <ul>
         <li><a href='#'>Curso</a>
		 <li><a href='#'>Turma</a></li>
      </ul>
   </li>
   <li><a href='cadastroUsuario.php'>Usuários</a></li>
   <li><a href='index.php'>Logout</a></li>
</ul>
</div>
</center><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Cadastro de Aluno</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/estiloCadUsuario.css"/>
		<script src="imagePreview.js"></script>
   		<script language="javascript">
			function validar ()
			{
				if (document.cadastro.nomeUsuario.value == "")
				{
					alert("Nome do usuário é obrigatório");
					return false;
				}
				else if (document.cadastro.email.value == "")
				{
					alert("E-mail do usuário é obrigatório");
					return false;
				}
				else if (document.cadastro.nomeCompleto.value == "")
				{
					alert("Nome completo do usuário é obrigatório");
					return false;
				}
				else if (document.cadastro.senha.value == "" && (document.cadastro.e.value == "" || document.cadastro.e.value == 0))
				{
					alert("Senha do usuário é obrigatório");
					return false;
				}
				else if (document.cadastro.senha.value != "" && document.cadastro.senha.value != document.cadastro.confirmaSenha.value) 
				{
					alert("Senhas não coincidem");
					return false;
				}
				else
					{
						return true;
					}
			}
			function excluir(usuario)
			{
				if (confirm("Deseja realmente excluir " + usuario + "?"))
					{
						return true;
					}
				else
					{
						return false;
					}
			}
		</script>
    </head>
    <body>    
        <form action="cadastroUsuarioEnvio.php" class="register" method="post" name="cadastro" onSubmit="return validar()">
            <h1>Cadastro do Usuário</h1>
			<input type="hidden" name="e" value="" />
			<!--Primeira Linha da tela-->
            <fieldset class="row1">
                <legend>Informações de Login:
                </legend>
                <p>
                    <label for="nomeUsuario">Usuário
                    </label>
                    <input type="text" name="nomeUsuario"  value=""/>
                </p>
                <p>
                    <label>Senha*
                    </label>
                    <input type="password" name="senha"/>
                    <label>Confirma Senha*
                    </label>
                    <input type="password" name="confirmaSenha"/>
                </p>
            </fieldset>
			
			<!--Segunda Linha da tela-->
            <fieldset class="row2">
                <legend>Dados Cadastrais:
                </legend>
                <p>
                    <label>Nome Completo
                    </label>
                    <input type="text" name="nomeCompleto" value=""/>
                </p>
				<p>
                    <label>Email
                    </label>
                    <input type="text" name ="email" value="" />
                </p>
				<p>
			</fieldset>
			<p><font color="#FB0A0E"></font></p>
			<button class="button">Salvar &raquo;</button>
			<p>
				<table id="tabUsuarios">
					<tr>
						<td>Nome</td>
						<td>E-Mail</td>
						<td>Editar</td>
						<td>Excluir</td>
					</tr>
					<tr>
							 	<td>Lucas dos Santos Melo</td>
								<td>lucas_santosmelo@hotmail.com</td>
								<td><a href='cadastroUsuario.php?NomeUsuario=1lmelo&e=1'><img src='img/edit-notes.png' class='imgBotao' alt='Editar Aluno'/></a></td>
								<td><a href='cadastroUsuario.php?NomeUsuario=1lmelo&e=2' onclick='return excluir("Lucas dos Santos Melo")'><img src='img/delete.ico' class='imgBotao' alt='Excluir Aluno'/></a></td>
							</tr><tr>
							 	<td>Grace Santana</td>
								<td>kelly_ssantana@hotmail.com</td>
								<td><a href='cadastroUsuario.php?NomeUsuario=grace&e=1'><img src='img/edit-notes.png' class='imgBotao' alt='Editar Aluno'/></a></td>
								<td><a href='cadastroUsuario.php?NomeUsuario=grace&e=2' onclick='return excluir("Grace Santana")'><img src='img/delete.ico' class='imgBotao' alt='Excluir Aluno'/></a></td>
							</tr><tr>
							 	<td>Rennan Wagner Zaniboni</td>
								<td>rwz_sk82@hotmail.com</td>
								<td><a href='cadastroUsuario.php?NomeUsuario=rennanxp2&e=1'><img src='img/edit-notes.png' class='imgBotao' alt='Editar Aluno'/></a></td>
								<td><a href='cadastroUsuario.php?NomeUsuario=rennanxp2&e=2' onclick='return excluir("Rennan Wagner Zaniboni")'><img src='img/delete.ico' class='imgBotao' alt='Excluir Aluno'/></a></td>
							</tr><tr>
							 	<td>Rafael Lopes</td>
								<td>rflopes@gmail.com</td>
								<td><a href='cadastroUsuario.php?NomeUsuario=rflopes&e=1'><img src='img/edit-notes.png' class='imgBotao' alt='Editar Aluno'/></a></td>
								<td><a href='cadastroUsuario.php?NomeUsuario=rflopes&e=2' onclick='return excluir("Rafael Lopes")'><img src='img/delete.ico' class='imgBotao' alt='Excluir Aluno'/></a></td>
							</tr>				</table>
			</p>
        </form>
        
		
    <div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website_carometroads&utm_content=footer_img"><img src="https://cloud.githubusercontent.com/assets/23024110/20663010/9968df22-b55e-11e6-941d-edbc894c2b78.png"  alt="www.000webhost.com"></a></div></body>
</html>





