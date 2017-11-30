<?php
include "config.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";

// exit();
include "heder.php";

// echo '<aside class="fh5co-page-heading">
// 	<div class="container">
// 		<div class="row">
// 			<div class="col-md-12">
// 				<h1 class="fh5co-page-heading-lead">
// 					'.LINK.'PHPMailer/enviar.php
// 					<span class="fh5co-border"></span>
// 				</h1>
// 			</div>
// 		</div>
// 	</div>
// </aside>';
// exit();
if(!isset($_GET['page'])){
	include "home.php";
}else{
	include $_GET['page'].".php";
}


include "rodape.php";


?>
