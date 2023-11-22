<!DOCTYPE html>
<!-- cadastro.html -->
<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo curso</h1>
		<form action="insercao_curso.php" 
		      method="GET">
			<label for="id_curso">
			ID:
			</label>
			<input type="text" name="id_curso" id="id_curso">
			<br>
			<label for="descricao">
			Descrição:
			</label>
			<input type="text" name="descricao" id="descricao">
			<br>
			<label for="carga_horaria">
			Carga Horária:
			</label>
			<input type="number" name="carga_horaria" id="carga_horaria">
			<br>
			<label for="dt_inicio">
			Data de Início:
			</label>
			<input type="date" name="dt_inicio" id="dt_inicio">
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
			<?php
                          include_once "../inc/conectabd.inc.php";
                          include "../inc/funcoes.inc.php";
                          

                        ?>
			<br>
		</form>
	</body>
</html>