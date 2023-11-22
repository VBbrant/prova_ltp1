<!DOCTYPE html>
<html>
	<head>
	  <title>Cadastro de curso - Alteração</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 

  $id_curso = $_GET["id_curso"];
  $ds_curso = $_GET["ds_curso"];
  $id_curso_novo = $_GET["id_curso_novo"];
  
  include_once "../inc/conectabd.inc.php";

  $query = "UPDATE tb_curso 
            SET ds_curso = '$ds_curso'
              , id_curso = $id_curso_novo
	  WHERE id_curso = $id_curso;";

  if ($result = mysqli_query($link, $query)) {
	  echo "Alteração efetuada com sucesso";
  } else {
	  echo mysqli_error($link);
  }

  mysqli_close($link);
?>  
 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>
