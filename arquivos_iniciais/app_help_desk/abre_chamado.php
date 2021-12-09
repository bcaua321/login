<?php 
  $titulo = str_replace("#", "-", $_POST['titulo']);
  $categoria = str_replace("#", "-", $_POST['categoria']);
  $descricao = str_replace("#", "-", $_POST['descricao']);

  $arquivo = fopen("armazenamento.hd", "a");
  $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

  fwrite($arquivo, $texto);

  echo $texto;

  fclose($arquivo);
  header("Location: abrir_chamado.php");
  ?>