<?php

$mgm = '';
$retorno = '';

if(count($_POST) > 0){

  $mensagem = "";
  $mensagem.= "Enviado mensagem do sistema 4ONG do formulario de contato no dia ".date('d/m/Y')."<br>";
  $mensagem.= "<b>NOME:".$_POST['nome'].'</b><br>';
  $mensagem.= "<b>EMAIL:</b>".$_POST['email']."<br>";
  $mensagem.= "<b>MENSAGEM:</b>".$_POST['mensagem']."<br>";
  $mensagem.= "<br>";
  $mensagem.= "<br>";
  $mensagem.= "Mensagem enviada automatido do sistema por favor não responda!";


  $mail = new PHPMailer();
  $smtp = new SMTP();

  //Server settings
  $mail->setSMTPInstance($smtp);
  $mail->SMTPDebug = 1;                                 // Enable verbose debug output
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'sistema4ong@gmail.com';                 // SMTP username
  $mail->Password = 'sistemaong';                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  //Recipients
  // $mail->setFrom('sistema4ong@gmail.com', '4ONG');
  $mail->addAddress('sistema4ong@gmail.com', '4ONG');     // Add a recipient

  //Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = "Teste";
  $mail->Body    = $mensagem;

  $a = $mail->send();

  echo "<br><br><br><br><br>";
  echo $a;

  // echo 'Message has been sent';
  // (Exception $e) {
  // echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
  // }




  //
  //
  // $Mailer = new PHPMailer();
  // // $Mailer = new SMTP();
  // //Define que será usado SMTP
  // $Mailer->IsSMTP();
  // //Enviar e-mail em HTML
  // $Mailer->isHTML(true);
  // // $Mailer->setSMTPInstance($smtp);
  // //Aceitar carasteres especiais
  // $Mailer->Charset = 'UTF-8';
  // //Configurações
  // $Mailer->SMTPAuth = true;
  // $Mailer->SMTPSecure = 'tsl';
  // //nome do servidor
  // $Mailer->Host = 'smtp.gmail.com';
  // //Porta de saida de e-mail
  // $Mailer->Port = 25;
  // //Dados do e-mail de saida - autenticação
  // $Mailer->Username = 'sistema4ong@gmail.com';
  // $Mailer->Password = 'sistemaong';
  // //E-mail remetente (deve ser o mesmo de quem fez a autenticação)
  // $Mailer->From = 'sistema4ong@gmail.com';
  // //Nome do Remetente
  // $Mailer->FromName = $nome;
  // //Assunto da mensagem
  // $Mailer->Subject = 'Contato Sistema 4ONG';
  // //Corpo da mensagem
  // $Mailer->Body = $mensagem;
  // //Destinatario
  // $Mailer->AddAddress('sistema4ong@gmail.com');
  // $mail->SMTPDebug  = 2;



  //
  // if($Mailer->Send()){
  //   $mensagem = "E-mail enviado com sucesso";
  //   exit ( '<aside class="">
  //     <div class="container"><br><br><br><br><br>
  //       <div class="row">
  //         <div class="col-md-12">
  //           <h1 class="fh5co-page-heading-lead">
  //             '.$mensagem.'
  //             <span class="fh5co-border"></span>
  //           </h1>
  //
  //         </div>
  //       </div>
  //     </div>
  //   </aside>');
  // }else{
  //   $mensagem = "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
  //   exit ( '<aside class="">
  //     <div class="container"><br><br><br><br><br>
  //       <div class="row">
  //         <div class="col-md-12">
  //           <h1 class="fh5co-page-heading-lead">
  //             '.$mensagem.'
  //             <span class="fh5co-border"></span>
  //           </h1>
  //
  //         </div>
  //       </div>
  //     </div>
  //   </aside>');
  // }



// //  echo $mensagem;
//
// // emails para quem será enviado o formulário
// // É necessário indicar que o formato do e-mail é html
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// $headers .= 'From: $nome <$email>';
// $headers .= "Bcc: $EmailPadrao\r\n";
//
//
//
// //FAZ O ENVIO DO EMAIL
// $enviaremail = mail(
//     EMAIL,
//     "Formulario de contato 4ONG",
//     $mensagem,
//     $headers
// );
//

// if($enviaremail){
//   $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
//
// } else {
//   $mgm = "ERRO AO ENVIAR E-MAIL!";
// }
//
// if($mgm != ''){
    // $retorno = '<aside class="fh5co-page-heading">
    //   <div class="container">
    //     <div class="row">
    //       <div class="col-md-12">
    //         <h1 class="fh5co-page-heading-lead">
    //           '.$mensagem.'
    //           <span class="fh5co-border"></span>
    //         </h1>
    //
    //       </div>
    //     </div>
    //   </div>
    // </aside>';
// }else{
//   $retorno = '';
// }







}


echo $retorno;
?>


	<aside class="fh5co-page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="fh5co-page-heading-lead">
						Contato
						<span class="fh5co-border"></span>
					</h1>

				</div>
			</div>
		</div>
	</aside>

	<div id="fh5co-main">

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-3">

					<p>Se você tem interesse em acessar o sistema 4ONG, basta preencher os dados abaixo que entraremos em contato em instantes.</p>

					<h2>&nbsp;&nbsp;Formulário</h2>
					<div class="row">
						<form action="http://localhost/siteong/?page=contato" method="post">
							<div class="col-md-6">
								<div class="form-group">
									<label class="sr-only">Nome</label>
									<input placeholder="Nome" name="nome" id="nome" type="text" class="form-control input-lg">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="sr-only">Email</label>
									<input name="email" placeholder="E-mail" id="email" type="email" class="form-control input-lg">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label class="sr-only">Descreva sobre a sua ONG</label>
									<textarea name="mensagem" placeholder="Descreva sobre a sua ONG" id="mensagem" class="form-control input-lg tamanhotxt" rows="3"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="submit" class="btn btn-primary " value="ENVIAR">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fh5co-spacer fh5co-spacer-lg"></div>
