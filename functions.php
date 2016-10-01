<?php
	include 'include/require.php';
	if(isset($_POST['func'])){
		if(strcmp($_POST['func'],"getRacas")==0){
			$value = $_POST['value'];
			if(strcmp($value,"cao")==0){
				$query = sprintf("SELECT * FROM tbCao");
				$dados = mysql_query($query) or die(mysql_error());
				$linha = mysql_fetch_assoc($dados);
				$total = mysql_num_rows($dados);
				$final = "";
				if($total > 0) {
					do{
					$id = $linha['id'];
					$raca = $linha['raca'];
					$temp = "<option value='".$raca."'>".$raca."</option>";
					$final .= $temp;
				}while($linha = mysql_fetch_assoc($dados));
					echo $final;
				}else{}
			}else if(strcmp($value,"gato")==0){
				$query = sprintf("SELECT * FROM tbGato");
				$dados = mysql_query($query) or die(mysql_error());
				$linha = mysql_fetch_assoc($dados);
				$total = mysql_num_rows($dados);
				$final = "";
				if($total > 0) {
					do{
					$id = $linha['id'];
					$raca = $linha['raca'];
					$temp = "<option value='".$raca."'>".$raca."</option>";
					$final .= $temp;
				}while($linha = mysql_fetch_assoc($dados));
					echo $final;
				}else{}
			}
		}
	}
	else{
		//qtd animais
		$animais = $_POST['animais'];
		//info user
		$senha = $_POST['senha'];
		$hash = hashSSHA($senha);

		$unique_index = uniqid('',true);
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$sexo = $_POST['sexo'];
		$telefone = $_POST['telefone1'];
		$celular = $_POST['telefone2'];
		$endereco = $_POST['endereco'].', '.$_POST['numero'];
		$complemento = $_POST['complemento'];
		$cep = $_POST['cep'];
		$bairro = $_POST['bairro'];
		$falha = 0;
		$trocaSenha = 0;
		$senha_encriptada = $hash['encrypted'];
		$salt = $hash['salt'];
		//-criado em-
		//NULL
		if(count($_FILES) > 0) {
			if(is_uploaded_file($_FILES['file']['tmp_name'])) {
				$imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
				$sql = "INSERT INTO tbusuario(unique_index,nome,email,sexo,telefone,celular,endereco,complemento,cep,bairro,falha,trocaSenha,senha_encriptada,salt,criado_em,atualizado_em,foto)
				VALUES('{$unique_index}','{$nome}','{$email}','{$sexo}',{$telefone},{$celular},'{$endereco}','{$complemento}','{$cep}','{$bairro}',{$falha},{$trocaSenha},'{$senha_encriptada}','{$salt}',now(),NULL, '{$imgData}')";
				mysql_query($sql) or die(header("Location: cadastro.php?fail"));
				for($i = 1; $i <= intval($animais); $i++){
					$nome = $_POST['nome'.(string)$i];
					$sexo = $_POST['sexo'.(string)$i];
					$raca = $_POST['raca'.(string)$i];
					$porte = $_POST['porte'.(string)$i];
					$caracteristica = $_POST['porte'.(string)$i];
					if(is_uploaded_file($_FILES['file'.(string)$i]['tmp_name'])) {
						$imgData = addslashes(file_get_contents($_FILES['file'.(string)$i]['tmp_name']));
						$sql = "INSERT INTO tbanimal(nome,sexo,raca,porte,caracteristica,foto,usuarioUID)
						VALUES('{$nome}','{$sexo}','{$raca}','{$porte}','{$caracteristica}','{$imgData}','{$unique_index}')";
						mysql_query($sql) or die(header("Location: cadastro.php?fail"));
					}
				}
				header("Location: cadastro.php?success");
			}
		}
	}
?>