<!DOCTYPE html>
<html>
	<head>
	  <title>Cadastro de curso - Exclusão</title>
	  <meta charset="utf-8">
	</head>
	<body><?php 
  $id_curso = $_GET["id_curso"];
  
  include_once "../inc/conectabd.inc.php";

  $query = "delete from tb_curso where id_curso=$id_curso;";
  if ($result = mysqli_query($link, $query)) {
	  echo "Exclusão efetuada com sucesso";
  }
  

  mysqli_close($link);
  
 ?>  
 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>
