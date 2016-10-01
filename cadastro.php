<?php 
	include 'include/require.php';
?>
<html>
  <head>
    <title>NexPet</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/set1.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cadastro.js"></script>
		<?php
		if(isset($_GET['test'])){
				echo "
				<script>
				$( document ).ready(function() {
				document.getElementById('step1').style.top='-300%';
				document.getElementById('step1').style.left='-100%';
				document.getElementById('step2').style.top='-200%';
				document.getElementById('step2').style.left='-100%';
				document.getElementById('animal1').style.top='-300%';
				document.getElementById('animal1').style.left='0px';
				document.getElementById('animal2').style.top='-200%';
				document.getElementById('animal2').style.left='0px';
				document.getElementById('animal3').style.top='-100%';
				document.getElementById('animal3').style.left='0px';
				document.getElementById('animal4').style.top='0px';
				document.getElementById('animal4').style.left='0px';
				document.getElementById('animal5').style.top='100%';
				document.getElementById('animal5').style.left='0px';
				document.getElementById('success').style.top='200%';
				document.getElementById('success').style.left='0px';
				});
				</script>
				";
	}
	?>
  </head>
  <body style="overflow: hidden;">
	<form enctype="multipart/form-data" method="POST" action="functions.php" name="myform">
    <div id="step1" class="step1">
      <div class="form">
        <span class="cadastro">Cadastro usuário (1/2)</span>
        <span class="input input--minoru">
          <span class="error" id="e_email">Email está incorreto.</span>
					<input class="input__field input__field--minoru" type="text" id="email" name="email" />
					<label class="input__label input__label--minoru" for="email">
						<span class="input__label-content input__label-content--minoru">Email</span>
					</label>
        </span>
        <span class="input input--minoru">
          <span class="error" id="e_senha">Senha curta demais. (Min: 6)</span>
					<input class="input__field input__field--minoru" type="password" id="senha" name="senha" />
					<label class="input__label input__label--minoru" for="senha">
						<span class="input__label-content input__label-content--minoru" id="">Senha</span>
					</label>
        </span>
        <span class="input input--minoru">
          <span class="error" id="e_senha2">As senhas não batem.</span>
					<input class="input__field input__field--minoru" type="password" id="senha2" name="senha2" />
					<label class="input__label input__label--minoru" for="senha2">
						<span class="input__label-content input__label-content--minoru" id="">Confirmar senha</span>
					</label>
        </span>
        <span class="input input--minoru">
          <span class="error" id="e_nome">Formato de nome inesperado.  (Min: 5, Max: 100)</span>
					<input class="input__field input__field--minoru" type="text" id="nome" name="nome" />
					<label class="input__label input__label--minoru" for="nome">
						<span class="input__label-content input__label-content--minoru" id="">Nome Completo</span>
					</label>
        </span>
        <span class="input input--minoru" style="width:40%">
          <span class="error" id="">;</span>
          <select style="height:36.6px; width:100%;" id="sexo" name="sexo">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outros/Indefinido</option>
          </select>
					<label class="input__label input__label--minoru" for="sexo">
						<span class="input__label-content input__label-content--minoru">Sexo</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
		<span class="error" id="">Escolha um foto.</span>
			<label id="picture" class="Ubuntu">
			<span id="fotopicker" class="spanbtn">&nbsp Escolha uma foto.</span> 
			<input type="file" name="file" id="file" accept="image/x-png, image/gif, image/jpeg" onchange="image(this.value);"></input>
			</label>
        </span>
      </div>
      <span class="enviar" onclick="step(2,0);"><i class="fa fa-arrow-right"></i></span>
    </div>
    <div id="step2" class="step2">
      <div class="form">
        <span class="cadastro">Cadastro usuário (2/2)</span>
        <span class="input input--minoru">
          <span class="error" id="e_endereco">Formato do endereço inesperado.  (Min: 6)</span>
					<input class="input__field input__field--minoru" type="text" id="endereco" name="endereco" />
					<label class="input__label input__label--minoru" for="endereco">
						<span class="input__label-content input__label-content--minoru">Endereço</span>
					</label>
        </span>
        <span class="input input--minoru" style="width:40%;">
          <span class="error min" id="e_numero">Formato incorreto.  (Min: 1, Max: 6)</span>
					<input class="input__field input__field--minoru" type="text" id="numero" name="numero" />
					<label class="input__label input__label--minoru" for="numero">
						<span class="input__label-content input__label-content--minoru">Nº</span>
					</label>
        </span>
        <span class="input input--minoru" style="width:40%;">
          <span class="error min" id="e_complemento">Máximo de caracteres excedido.  (Max: 60)</span>
					<input class="input__field input__field--minoru" type="text" id="complemento" name="complemento" />
					<label class="input__label input__label--minoru" for="complemento">
						<span class="input__label-content input__label-content--minoru">Complemento</span>
					</label>
        </span>
        <span class="input input--minoru">
          <span class="error" id="e_telefone1">Ex: 1125794972 (Min/Max: 10)</span>
					<input class="input__field input__field--minoru" type="text" id="telefone1" name="telefone1" />
					<label class="input__label input__label--minoru" for="telefone1">
						<span class="input__label-content input__label-content--minoru">Telefone Residencial (só numeros)</span>
					</label>
        </span>
        <span class="input input--minoru">
          <span class="error" id="e_telefone2">Ex: 11925794972 (Min: 10, Max: 11)</span>
					<input class="input__field input__field--minoru" type="text" id="telefone2" name="telefone2" />
					<label class="input__label input__label--minoru" for="telefone2">
						<span class="input__label-content input__label-content--minoru">Telefone Celular (só numeros)</span>
					</label>
        </span>
        <span class="input input--minoru" style="width:40%;">
          <span class="error min" id="e_cep">Ex: 03258000 (Min/Max: 8)</span>
					<input class="input__field input__field--minoru" type="text" id="cep" name="cep" />
					<label class="input__label input__label--minoru" for="cep">
						<span class="input__label-content input__label-content--minoru">CEP (sem hifen)</span>
					</label>
        </span>
        <span class="input input--minoru" style="width:40%">
          <span class="error min" id="e_bairro">Máximo excedido.  (Max: 75)</span>
					<input class="input__field input__field--minoru" type="text" id="bairro" name="bairro" />
					<label class="input__label input__label--minoru" for="bairro">
						<span class="input__label-content input__label-content--minoru">Bairro</span>
					</label>
        </span>
      </div>
      <span class="voltar" onclick="step(1,0);"><i class="fa fa-arrow-left"></i></span>
      <span class="enviar" onclick="step(3,0);"><i class="fa fa-arrow-right"></i></span>
    </div>
    <div id="animal1" class="animal a1">
      <div class="form">
        <span class="cadastro">Cadastro animais (1/5)</span>
        <span class="input input--minoru">
		<span class="error" id="e_nome1">Respeite o limite.  (Min: 2, Max: 50)</span>
					<input class="input__field input__field--minoru" type="text" name="nome1" id="nome1" />
					<label class="input__label input__label--minoru" for="nome1">
						<span class="input__label-content input__label-content--minoru">Nome</span>
					</label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" id="tipo1">
            <option value="cao">Cachorro</option>
            <option value="gato">Gato</option>
          </select>
		  <script>
			$('#tipo1').change(function(){
				var str = $(this).val();
				$.post('functions.php', { func: "getRacas", value: str} , function(result) {
					document.getElementById("raca1").innerHTML = result;
				});
			});
		  </script>
          <label class="input__label input__label--minoru" for="tipo1">
            <span class="input__label-content input__label-content--minoru">Animal</span>
          </label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" name="raca1" id="raca1">
				<?php
				$query = sprintf("SELECT * FROM tbCao");
				$dados = mysql_query($query) or die(mysql_error());
				$linha = mysql_fetch_assoc($dados);
				$total = mysql_num_rows($dados);
				if($total > 0) {
					do{
					$id = $linha['id'];
					$raca = $linha['raca'];
					?>
					<option value="<?php echo $raca; ?>"><?php echo $raca; ?></option>
					<?php						
				}while($linha = mysql_fetch_assoc($dados));
				
				}else{}
				?>
          </select>
          <label class="input__label input__label--minoru" for="raca1">
            <span class="input__label-content input__label-content--minoru">Raça</span>
          </label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" name="porte1" id="porte1">
            <option value="0">Pequeno</option>
            <option value="1">Medio</option>
            <option value="2">Sua mãe</option>
          </select>
          <label class="input__label input__label--minoru" for="porte1">
            <span class="input__label-content input__label-content--minoru">Porte</span>
          </label>
        </span>
        <span class="input input--minoru">
					<textarea class="input__field input__field--minoru" type="text" name="obs1" id="obs1" style="height:73.2px; resize: none"></textarea>
					<label class="input__label input__label--minoru" for="obs1">
						<span class="input__label-content input__label-content--minoru">Observações (Focinheira, Alergias...)</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
          <span class="error" id="">;</span>
          <select style="height:36.6px; width:100%;" id="sexo1" name="sexo1">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
          </select>
					<label class="input__label input__label--minoru" for="sexo1">
						<span class="input__label-content input__label-content--minoru">Sexo</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
		<span class="error" id="">Escolha um foto.</span>
			<label id="labelanimal1" class="Ubuntu">
			<span id="fotopicker2" class="spanbtn">&nbsp Escolha uma foto.</span> 
			<input type="file" name="file1" id="file1" accept="image/x-png, image/gif, image/jpeg" onchange="imageAnimal1(this.value);"></input>
			</label>
        </span>
      </div>
      <span class="voltar" onclick="step(4,0);"><i class="fa fa-plus"></i></span>
      <span class="enviar" onclick="step(9,3);"><i class="fa fa-check"></i></span>
    </div>
    <div id="animal2" class="animal a2">
      <div class="form">
        <span class="cadastro">Cadastro animais (2/5)</span>
        <span class="input input--minoru">
		<span class="error" id="e_nome2">Respeite o limite.  (Min: 2, Max: 50)</span>
					<input class="input__field input__field--minoru" type="text" name="nome2" id="nome2" />
					<label class="input__label input__label--minoru" for="nome2">
						<span class="input__label-content input__label-content--minoru">Nome</span>
					</label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" id="tipo2">
            <option value="cao">Cachorro</option>
            <option value="gato">Gato</option>
          </select>
		  <script>
			$('#tipo2').change(function(){
				var str = $(this).val();
				$.post('functions.php', { func: "getRacas", value: str} , function(result) {
					document.getElementById("raca2").innerHTML = result;
				});
			});
		  </script>
          <label class="input__label input__label--minoru" for="tipo2">
            <span class="input__label-content input__label-content--minoru">Animal</span>
          </label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" name="raca2" id="raca2">
				<?php
				$query = sprintf("SELECT * FROM tbCao");
				$dados = mysql_query($query) or die(mysql_error());
				$linha = mysql_fetch_assoc($dados);
				$total = mysql_num_rows($dados);
				if($total > 0) {
					do{
					$id = $linha['id'];
					$raca = $linha['raca'];
					?>
					<option value="<?php echo $raca; ?>"><?php echo $raca; ?></option>
					<?php						
				}while($linha = mysql_fetch_assoc($dados));
				
				}else{}
				?>
          </select>
          <label class="input__label input__label--minoru" for="raca2">
            <span class="input__label-content input__label-content--minoru">Raça</span>
          </label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" name="porte2" id="porte2">
            <option value="0">Pequeno</option>
            <option value="1">Medio</option>
            <option value="2">Sua mãe</option>
          </select>
          <label class="input__label input__label--minoru" for="porte2">
            <span class="input__label-content input__label-content--minoru">Porte</span>
          </label>
        </span>
        <span class="input input--minoru">
					<textarea class="input__field input__field--minoru" type="text" name="obs2" id="obs2" style="height:73.2px; resize: none"></textarea>
					<label class="input__label input__label--minoru" for="obs2">
						<span class="input__label-content input__label-content--minoru">Observações (Focinheira, Alergias...)</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
          <span class="error" id="">;</span>
          <select style="height:36.6px; width:100%;" id="sexo2" name="sexo2">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
          </select>
					<label class="input__label input__label--minoru" for="sexo2">
						<span class="input__label-content input__label-content--minoru">Sexo</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
		<span class="error" id="">Escolha um foto.</span>
			<label id="labelanimal2" class="Ubuntu">
			<span id="fotopicker3" class="spanbtn">&nbsp Escolha uma foto.</span> 
			<input type="file" name="file2" id="file2" accept="image/x-png, image/gif, image/jpeg" onchange="imageAnimal2(this.value);"></input>
			</label>
        </span>
      </div>
      <span class="voltar" onclick="step(5,0);"><i class="fa fa-plus"></i></span>
      <span class="enviar" onclick="step(9,4);"><i class="fa fa-check"></i></span>
    </div>
    <div id="animal3" class="animal a3">
      <div class="form">
        <span class="cadastro">Cadastro animais (3/5)</span>
        <span class="input input--minoru">
		<span class="error" id="e_nome3">Respeite o limite.  (Min: 2, Max: 50)</span>
					<input class="input__field input__field--minoru" type="text" name="nome3" id="nome3" />
					<label class="input__label input__label--minoru" for="nome3">
						<span class="input__label-content input__label-content--minoru">Nome</span>
					</label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" id="tipo3">
            <option value="cao">Cachorro</option>
            <option value="gato">Gato</option>
          </select>
		  <script>
			$('#tipo3').change(function(){
				var str = $(this).val();
				$.post('functions.php', { func: "getRacas", value: str} , function(result) {
					document.getElementById("raca3").innerHTML = result;
				});
			});
		  </script>
          <label class="input__label input__label--minoru" for="tipo3">
            <span class="input__label-content input__label-content--minoru">Animal</span>
          </label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" name="raca3" id="raca3">
				<?php
				$query = sprintf("SELECT * FROM tbCao");
				$dados = mysql_query($query) or die(mysql_error());
				$linha = mysql_fetch_assoc($dados);
				$total = mysql_num_rows($dados);
				if($total > 0) {
					do{
					$id = $linha['id'];
					$raca = $linha['raca'];
					?>
					<option value="<?php echo $raca; ?>"><?php echo $raca; ?></option>
					<?php						
				}while($linha = mysql_fetch_assoc($dados));
				
				}else{}
				?>
          </select>
          <label class="input__label input__label--minoru" for="raca3">
            <span class="input__label-content input__label-content--minoru">Raça</span>
          </label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" name="porte3" id="porte3">
            <option value="0">Pequeno</option>
            <option value="1">Medio</option>
            <option value="2">Sua mãe</option>
          </select>
          <label class="input__label input__label--minoru" for="porte3">
            <span class="input__label-content input__label-content--minoru">Porte</span>
          </label>
        </span>
        <span class="input input--minoru">
					<textarea class="input__field input__field--minoru" type="text" name="obs3" id="obs3" style="height:73.2px; resize: none"></textarea>
					<label class="input__label input__label--minoru" for="obs3">
						<span class="input__label-content input__label-content--minoru">Observações (Focinheira, Alergias...)</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
          <span class="error" id="">;</span>
          <select style="height:36.6px; width:100%;" id="sexo3" name="sexo3">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
          </select>
					<label class="input__label input__label--minoru" for="sexo3">
						<span class="input__label-content input__label-content--minoru">Sexo</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
		<span class="error" id="">Escolha um foto.</span>
			<label id="labelanimal3" class="Ubuntu">
			<span id="fotopicker4" class="spanbtn">&nbsp Escolha uma foto.</span> 
			<input type="file" name="file3" id="file3" accept="image/x-png, image/gif, image/jpeg" onchange="imageAnimal3(this.value);"></input>
			</label>
        </span>
      </div>
      <span class="voltar" onclick="step(6,0);"><i class="fa fa-plus"></i></span>
      <span class="enviar" onclick="step(9,5);"><i class="fa fa-check"></i></span>
    </div>
    <div id="animal4" class="animal a4">
      <div class="form">
        <span class="cadastro">Cadastro animais (4/5)</span>
        <span class="input input--minoru">
		<span class="error" id="e_nome4">Respeite o limite.  (Min: 2, Max: 50)</span>
					<input class="input__field input__field--minoru" type="text" name="nome4" id="nome4" />
					<label class="input__label input__label--minoru" for="nome4">
						<span class="input__label-content input__label-content--minoru">Nome</span>
					</label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" id="tipo4">
            <option value="cao">Cachorro</option>
            <option value="gato">Gato</option>
          </select>
		  <script>
			$('#tipo4').change(function(){
				var str = $(this).val();
				$.post('functions.php', { func: "getRacas", value: str} , function(result) {
					document.getElementById("raca4").innerHTML = result;
				});
			});
		  </script>
          <label class="input__label input__label--minoru" for="tipo4">
            <span class="input__label-content input__label-content--minoru">Animal</span>
          </label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" name="raca4" id="raca4">
				<?php
				$query = sprintf("SELECT * FROM tbCao");
				$dados = mysql_query($query) or die(mysql_error());
				$linha = mysql_fetch_assoc($dados);
				$total = mysql_num_rows($dados);
				if($total > 0) {
					do{
					$id = $linha['id'];
					$raca = $linha['raca'];
					?>
					<option value="<?php echo $raca; ?>"><?php echo $raca; ?></option>
					<?php						
				}while($linha = mysql_fetch_assoc($dados));
				
				}else{}
				?>
          </select>
          <label class="input__label input__label--minoru" for="raca4">
            <span class="input__label-content input__label-content--minoru">Raça</span>
          </label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" name="porte4" id="porte4">
            <option value="0">Pequeno</option>
            <option value="1">Medio</option>
            <option value="2">Sua mãe</option>
          </select>
          <label class="input__label input__label--minoru" for="porte4">
            <span class="input__label-content input__label-content--minoru">Porte</span>
          </label>
        </span>
        <span class="input input--minoru">
					<textarea class="input__field input__field--minoru" type="text" name="obs4" id="obs4" style="height:73.2px; resize: none"></textarea>
					<label class="input__label input__label--minoru" for="obs4">
						<span class="input__label-content input__label-content--minoru">Observações (Focinheira, Alergias...)</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
          <span class="error" id="">;</span>
          <select style="height:36.6px; width:100%;" id="sexo4" name="sexo4">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
          </select>
					<label class="input__label input__label--minoru" for="sexo4">
						<span class="input__label-content input__label-content--minoru">Sexo</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
		<span class="error" id="">Escolha um foto.</span>
			<label id="labelanimal4" class="Ubuntu">
			<span id="fotopicker5" class="spanbtn">&nbsp Escolha uma foto.</span> 
			<input type="file" name="file4" id="file4" accept="image/x-png, image/gif, image/jpeg" onchange="imageAnimal4(this.value);"></input>
			</label>
        </span>
      </div>
      <span class="voltar" onclick="step(7,0);"><i class="fa fa-plus"></i></span>
      <span class="enviar" onclick="step(9,6);"><i class="fa fa-check"></i></span>
    </div>
    <div id="animal5" class="animal a5">
      <div class="form">
        <span class="cadastro">Cadastro animais (5/5)</span>
        <span class="input input--minoru">
		<span class="error" id="e_nome5">Respeite o limite.  (Min: 2, Max: 50)</span>
					<input class="input__field input__field--minoru" type="text" name="nome5" id="nome5" />
					<label class="input__label input__label--minoru" for="nome5">
						<span class="input__label-content input__label-content--minoru">Nome</span>
					</label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" id="tipo5">
            <option value="cao">Cachorro</option>
            <option value="gato">Gato</option>
          </select>
		  <script>
			$('#tipo5').change(function(){
				var str = $(this).val();
				$.post('functions.php', { func: "getRacas", value: str} , function(result) {
					document.getElementById("raca5").innerHTML = result;
				});
			});
		  </script>
          <label class="input__label input__label--minoru" for="tipo5">
            <span class="input__label-content input__label-content--minoru">Animal</span>
          </label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" name="raca5" id="raca5">
				<?php
				$query = sprintf("SELECT * FROM tbCao");
				$dados = mysql_query($query) or die(mysql_error());
				$linha = mysql_fetch_assoc($dados);
				$total = mysql_num_rows($dados);
				if($total > 0) {
					do{
					$id = $linha['id'];
					$raca = $linha['raca'];
					?>
					<option value="<?php echo $raca; ?>"><?php echo $raca; ?></option>
					<?php						
				}while($linha = mysql_fetch_assoc($dados));
				
				}else{}
				?>
          </select>
          <label class="input__label input__label--minoru" for="raca5">
            <span class="input__label-content input__label-content--minoru">Raça</span>
          </label>
        </span>
        <span class="input input--minoru">
          <select style="height:36.6px; width:100%;" name="porte5" id="porte5">
            <option value="0">Pequeno</option>
            <option value="1">Medio</option>
            <option value="2">Sua mãe</option>
          </select>
          <label class="input__label input__label--minoru" for="porte5">
            <span class="input__label-content input__label-content--minoru">Porte</span>
          </label>
        </span>
        <span class="input input--minoru">
					<textarea class="input__field input__field--minoru" type="text" name="obs5" id="obs5" style="height:73.2px; resize: none"></textarea>
					<label class="input__label input__label--minoru" for="obs5">
						<span class="input__label-content input__label-content--minoru">Observações (Focinheira, Alergias...)</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
          <span class="error" id="">;</span>
          <select style="height:36.6px; width:100%;" id="sexo5" name="sexo5">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
          </select>
					<label class="input__label input__label--minoru" for="sexo5">
						<span class="input__label-content input__label-content--minoru">Sexo</span>
					</label>
        </span>
		<span class="input input--minoru" style="width:40%">
		<span class="error" id="">Escolha um foto.</span>
			<label id="labelanimal5" class="Ubuntu">
			<span id="fotopicker6" class="spanbtn">&nbsp Escolha uma foto.</span> 
			<input type="file" name="file5" id="file5" accept="image/x-png, image/gif, image/jpeg" onchange="imageAnimal5(this.value);"></input>
			</label>
        </span>
      </div>
      <span class="enviar" onclick="step(8);"><i class="fa fa-check"></i></span>
    </div>
	<INPUT TYPE="hidden" id="int" NAME="animais" VALUE="0">
	</form>
    <div id="success" class="success">
    </div>

    <div class="navbar" class="fixed">
      <a href="index.html"><img src="img/logosemfundo.png"  class="navlogo"/></a>
      <i class="fa fa-search"></i>
      <a href="cadastro.php">
      <span class="navitem last">
      Entrar
      </span>
      </a>
      <a href="cadastro.php">
        <span class="navitem">
        Cadastre-se
        </span>
      </a>
      <a href="cadastro.php">
      <span class="navitem">
      Lista de PetShops disponíveis
      </span>
      </a>
      <a href="cadastro.php">
      <span class="navitem first">
      Como Funciona?
      </span>
      </a>
    </div>
  </body>
</html>
