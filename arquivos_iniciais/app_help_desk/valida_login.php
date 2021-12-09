<?php 
  session_start();

  $usuarios_app = array(
    array('email' => 'teste@gmail.com', 'senha' => 'ht4223'),
    array('email' => 'teste1@gmail.com', 'senha' => 'abcd')
  );

  $perfil_autenticado = false;

  foreach($usuarios_app as $value){
    if(($_POST['email'] == $value['email']) && ($_POST['senha'] == $value['senha'])){
      $perfil_autenticado = true;
    }
  }

  autenticar($perfil_autenticado);
  
  function autenticar(bool $value){
    if(!$value) {
      $_SESSION['autenticar'] = 'NAO';
      header('Location: index.php?login=erro');
    } else {
      $_SESSION['autenticar'] = 'SIM';
      header('Location: home.php');
    }
  }

?>