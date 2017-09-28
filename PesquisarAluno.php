
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
</center>	

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pesquisar Aluno</title>
  
  <link rel="stylesheet" href="css\min.css">
  <link rel="stylesheet" href="css\pesquisa.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <script>
	  function AbrirRelatorio ()
	  {
		  window.open('pesquisaRelatorio.php','_blank');
	  }
  $( function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = "blind";
 
      // Most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 50 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }
 
      // Run the effect
      $( "#gridBuscar" ).toggle( selectedEffect, options, 500 );
    };
 
    // Set effect from select menu value
    $( "#btn" ).on( "click", function() {
      runEffect();
    });
  } );

function previewUrl(url,target){
        //use timeout coz mousehover fires several times
        clearTimeout(window.ht);
        window.ht = setTimeout(function(){
            var div = document.getElementById(target);
            div.innerHTML = '<iframe style="width:100%;height:100%;" frameborder="0" src="' + url + '" />';
        },20);      
    }
$( function() {
    $( "#detalhe" ).dialog({
      autoOpen: false,
	  height:500,
	  width:800,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( ".click_detalhe" ).on( "click", function() {
      $( "#detalhe" ).dialog( "open" );
    });
  } );
  </script>
</head>

<body>
  <form action ="pesquisa.php" id="buscarAlunos" method="post">
   <div id="detalhe" style="width:1000px;height:1000px;border:1px solid #ddd;"></div>
   <div class="table-users">
   		<div class="header">Alunos</div>
    <input type="button" value="+ " id="btn" class="botao">
     <div id="gridBuscar" class="toggler">
      
     <table cellspacing="0" id="tabelaPesquisa">
      <tr>
      	<td>
      		<input type="text" value='' id="nome" name="nome" class="text" placeholder="Nome" size="12">
      	</td>
      	<td>
			<select name="corOlhos" class="text select">
			<option value="">Olhos</option>
			<option value="azul" 		>Azul</option>
			<option value="verde"		>Verde</option>
			<option value="castanho"	>Castanho</option>
			<option value="mel"			>Mel</option>
			</select>
     	</td>
      	<td>
      		<select name="corPele" class="text select">
			<option value="">Pele</option>
			<option value="clara" 	>Clara</option>
			<option value="morena"	>Morena</option>
			<option value="afro"	>Afro</option>
			</select>
      	</td>
      	<td>
      		<select name="porteFisico" class="text select">
			<option value="">Físico</option>
			<option value="magro"		>Magro</option>
			<option value="normal"		>Normal</option>
			<option value="foradopeso"	>Fora do Peso</option>
			<option value="atletico"	>Atlético</option>
			</select>
      	</td>
      	<td>
      		<select name="corCabelo" class="text select">
			<option value="">Cor Cabelo</option>
			<option value="preto"		>Preto</option>
			<option value="loiro"		>Loiro</option>
			<option value="castanho"	>Castanho</option>
			<option value="outros"		>Outros</option>
			</select>
      	</td>
      </tr>
      <tr>
      	<td>
      		<select name="tamCabelo" class="text select">
			<option value="">Tam. Cabelo</option>
			<option value="careca"	>Careca</option>
			<option value="curto"	>Curto</option>
			<option value="longo"	>Longo</option>
			<option value="outros"	>Outros</option>
			</select>
     	</td>
     	<td>
      		<select name="altura" class="text select">
			<option value="">Altura</option>
			<option value="baixo"	>Baixo</option>
			<option value="medio"	>Medio</option>
			<option value="alto"	>Alto</option>
			</select>
     	</td>
     	<td>
      		<select name="humor" class="text select">
			<option value="">Humor</option>
			<option value="engracado"	>Engraçado</option>
			<option value="normal"		>Normal</option>
			<option value="serio"		>Sério</option>
			<option value="outros"		>Outros</option>
			</select>
      	</td>
     	<td>
     		<input type="text" id="apelido" value='' name="apelido" class="text" placeholder="Apelido" size="12">
     	</td>
     	<td>
     		<input type="text" id="ano" value='' name="anoCurso" class="text" placeholder="Ano Curso" size="12" maxlength="4">
      	</td>
      </tr>
      <tr>
      	<td  colspan="2">
     		Idade Entre:
      		<input type="text" id="idadeMenor" name="idadeMenor" class="text" placeholder="Menor" size="3" maxlength="2" value=''> 
      		<input type="text" id="idadeMaior" name="idadeMaior" class="text" placeholder="Maior" size="3" maxlength="2" value=''>
     	</td>
	  <td>
		<select name="horario" class="text select">
			<option value="">Horário</option>
			<option value="manha"		>Manhã</option>
			<option value="tarde"		>Tarde</option>
			<option value="noite"		>Noite</option>
			</select>
      </td>
      <td>
		<select name="curso" class="text select">
			<option value="">Curso</option>
			<option value='1'>Analise e DEsenv </option>			</select>
      </td>
      <td>
      	<input type="text" id="semestre" value="" name="semestre" class="text" placeholder="Semestre" size="12" maxlength="2" />
      </td>
      </tr>
      <tr>
         <th>Tatoo</th>
         <th>Brincos</th>
         <th>Boné</th>
         <th>Barba</th>
         <th width="400">Sexo</th>
		 </tr>
     	<tr>
      	<td>
			<input type="radio" id="tatoo_sim" name="tatoo" placeholder="Sim" 		value="1"	>
			<label for="tatoo_sim" class="radio-label">Sim</label><br>
			<input type="radio" id="tatoo_nao" name="tatoo" placeholder="Não" 		value="0"	checked>
			<label for="tatoo_nao" class="radio-label">Não</label><br>
     		<input type="radio" id="tatoo_ambos" name="tatoo" placeholder="Ambos" 	value=""	checked>
			<label for="tatoo_ambos" class="radio-label">Ambos</label>
		</td>
     	 <td>
     	 	<input type="radio" id="brincos_sim" name="brincos" placeholder="Sim"		value="1"	>
			<label for="brincos_sim" class="radio-label">Sim</label><br>
			<input type="radio" id="brincos_nao" name="brincos" placeholder="Não"		value="0"	checked>
			<label for="brincos_nao" class="radio-label">Não</label><br>
     		<input type="radio" id="brincos_ambos" name="brincos" placeholder="Ambos" 	value=""	checked>
			<label for="brincos_ambos" class="radio-label">Ambos</label>
     	 </td>
         <td>
         	<input type="radio" id="bone_sim" name="bone" placeholder="Sim"		value="1"	>
			<label for="bone_sim" class="radio-label">Sim</label><br>
			<input type="radio" id="bone_nao" name="bone" placeholder="Não"		value="0"	checked>
			<label for="bone_nao" class="radio-label">Não</label><br>
     		<input type="radio" id="bone_ambos" name="bone" placeholder="Ambos"	value="" 	checked>
			<label for="bone_ambos" class="radio-label">Ambos</label>
         </td>
         <td>
         	<input type="radio" id="barba_sim" name="barba" placeholder="Sim"		value="1"	>
			<label for="barba_sim" class="radio-label">Sim</label><br>
			<input type="radio" id="barba_nao" name="barba" placeholder="Não"		value="0"	checked>
			<label for="barba_nao" class="radio-label">Não</label><br>
     		<input type="radio" id="barba_ambos" name="barba" placeholder="Ambos"	value="" 	checked>
			<label for="barba_ambos" class="radio-label">Ambos</label>
         </td>
         <td>
     		<input type="radio" id="sexo_m" name="sexo" placeholder="M" value="m"	>
			<label for="sexo_m" class="radio-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Masculino</label><br>
			<input type="radio" id="sexo_f" name="sexo" placeholder="F" value ="f"	>
			<label for="sexo_f" class="radio-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feminino</label><br>
     		<input type="radio" id="sexo_ambos" name="sexo" placeholder="Ambos" value="" checked>
			<label for="sexo_ambos" class="radio-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ambos</label><br>
         </td>
      </tr>
      <tr>
         <th>Aparelho</th>
         <th>Piercing</th>
         <th>Óculos</th>
         <th></th>
         <th width="400"></th>
	  </tr>
      <tr>
      <td>
			<input type="radio" id="aparelho_sim" name="aparelho" placeholder="Sim" 		value="1"	>
			<label for="aparelho_sim" class="radio-label">Sim</label><br>
			<input type="radio" id="aparelho_nao" name="aparelho" placeholder="Não" 		value="0"	checked>
			<label for="aparelho_nao" class="radio-label">Não</label><br>
     		<input type="radio" id="aparelho_ambos" name="aparelho" placeholder="Ambos" 	value=""	checked>
			<label for="aparelho_ambos" class="radio-label">Ambos</label>
		</td>
     	 <td>
     	 	<input type="radio" id="piercing_sim" name="piercing" placeholder="Sim"		value="1"	>
			<label for="piercing_sim" class="radio-label">Sim</label><br>
			<input type="radio" id="piercing_nao" name="piercing" placeholder="Não"		value="0"	checked>
			<label for="piercing_nao" class="radio-label">Não</label><br>
     		<input type="radio" id="piercing_ambos" name="piercing" placeholder="Ambos" 	value=""	checked>
			<label for="piercing_ambos" class="radio-label">Ambos</label>
     	 </td>
         <td>
         	<input type="radio" id="oculos_sim" name="oculos" placeholder="Sim"		value="1"	>
			<label for="oculos_sim" class="radio-label">Sim</label><br>
			<input type="radio" id="oculos_nao" name="oculos" placeholder="Não"		value="0"	checked>
			<label for="oculos_nao" class="radio-label">Não</label><br>
     		<input type="radio" id="oculos_ambos" name="oculos" placeholder="Ambos"	value="" 	checked>
			<label for="oculos_ambos" class="radio-label">Ambos</label>
         </td>
         <td></td>
         <td></td>
      </tr>
      <tr>
      		<td colspan="4"><input type="submit" value="Buscar" class="botao"></td>
      		<td><input type="button" value="Imprimir Relatório" class="botao" onClick="AbrirRelatorio()"></td>
      </tr>
	  </table>
	  </div>
      <table cellspacing="0">
        <tr>
         <th>Foto</th>
         <th>Nome</th>
         <th>Curso</th>
         <th>Semestre</th>
         <th width="230">E-Mail</th>
         <th>Editar</th>
      </tr>
	     </table>
</div>
</form>
<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website_carometroads&utm_content=footer_img"><img src="https://cloud.githubusercontent.com/assets/23024110/20663010/9968df22-b55e-11e6-941d-edbc894c2b78.png"  alt="www.000webhost.com"></a></div></body>
</html>
