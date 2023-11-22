<!DOCTYPE html>
<!-- insercao_aluno.php -->
<html>
	<head>
	  <title>Cadastro de curso - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>

  <?php 
// efetua inclusao do curso informado em cadastro_curso.php

  $id_curso = $_GET["id_curso"];
  $descricao = $_GET["descricao"];
  $carga_horaria = $_GET["carga_horaria"];
  $dt_inicio = $_GET["dt_inicio"];
  
  include_once "../inc/conectabd.inc.php";
  $query = "INSERT INTO tb_curso 
            (id_curso, descricao, carga_horaria, dt_inicio) 
	    VALUES
            ($id_curso, '$descricao', $carga_horaria, '$dt_inicio');";
  if ($result = mysqli_query($link, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>
