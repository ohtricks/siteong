<?php



$mensagem = "";
$mensagem.= "Enviado mensagem do sistema 4ONG do formulario de contato no dia ".date('d/m/Y')."<br>";
$mensagem.= "<b>NOME:".$_POST['nome'].'</b><br>';
$mensagem.= "<b>EMAIL:</b>".$_POST['email']."<br>";
$mensagem.= "<b>MENSAGEM:</b>".$_POST['mensagem']."<br>";
$mensagem.= "<br>";
$mensagem.= "<br>";
$mensagem.= "Mensagem enviada automatido do sistema por favor não responda!";


///echo $mensagem;





exit();


?>
