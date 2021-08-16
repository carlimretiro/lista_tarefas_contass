<?php
// Configuração do Banco de Dados
$servidor   = "localhost";
$senha      = "7il5os3b";
$usuario    = "root";
$banco      = "lista_tarefas";
$site       = "localhost/lista_tarefas_contass/";
$con = mysqli_connect($servidor,$usuario,$senha,$banco);
mysqli_set_charset ( $con , 'utf8' );

// Checando a Conexão
if (mysqli_connect_errno())
  {
  echo "Falha ao Conectar: " . mysqli_connect_error();
  }

mysqli_select_db($con, $banco);

?>