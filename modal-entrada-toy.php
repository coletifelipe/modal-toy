<?php
if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 $email = $_POST['email'];
 
 
 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = "suporteweb@trainning.com.br"; // deve ser uma conta de email do seu dominio 
 //====================================================
 
 //Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "coletifelipe@gmail.com"; // pode ser qualquer email que receberá as mensagens
 $email_reply = "$email"; 
 $email_assunto = "Modal ToyShow"; // Este será o assunto da mensagem
 //====================================================
 
 //Monta o Corpo da Mensagem
 $email_conteudo .= "Email = $email \n";
 //====================================================
 
 //Seta os Headers (Alterar somente caso necessario) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
  header('Location:index.php'); 
 } 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
 //====================================================
} 
?>

<style>
	.btn-enviar-modal{
		width: 72%;margin-top: 3%;height: 8vh;border: none;font-size: 2vw;color: white;background: #ff7e00;border-radius: 5px;text-transform: uppercase;font-weight: bold;outline: none;border-bottom: 3px solid #773b00;cursor: pointer;
	}
	.btn-enviar-modal:hover {
    color: #ff7e00;
    border: 3px solid #ff7e00;
    cursor: pointer;
    background: transparent;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
<div style="width: 100%;padding: 0;">
	<div style="width: 100%;background-image: url(modal_fundo.jpg);position: relative;height: 100vh;">
		<div style="text-align: center;margin-bottom: 2%;padding-top: 2%;">
			<img draggable="false" src="Logo.png" alt="">
		</div>
		<div style="float: left;width: 50%;display: inline-block;">
			<img draggable="false" style="width: 88%;margin-left: 17%;" src="BF80.png" alt="">
		</div>
		<div style="float: right;width: 50%;display: inline-block;">
			<p style="color: white;font-size: 2.3vw;margin-left: 14%;font-family: 'Roboto', sans-serif;    font-weight: lighter;letter-spacing: -1px;">Quer conhecer e receber primeiro as<br>nossas ofertas da Black Friday?</p>
			<p style="color: white;font-size: 2.4vw;font-weight: bold;margin-left: 14%;font-family: 'Roboto', sans-serif;margin-bottom: 13px;">Cadastre-se Agora ;)</p>
			<form action="" method="POST" style="margin-left: 14%;">
				<input style="width: 72%;height: 8vh;border-radius: 5px;font-size: 1.5vw;padding-left: 3%;outline: none;" type="text" name="email" placeholder="Digite seu e-mail"><br>
				<input class="btn-enviar-modal" type="submit" name="BTEnvia" value="QUERO RECEBER">
			</form>
		</div>
	</div>
</div>