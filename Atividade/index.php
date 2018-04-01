<?php
echo "<!doctype html>
<html>
	<head>
		<title>Tratamento de Arquivos</title>
		<link rel=\"stylesheet\" type=\"text/css\" href=\"css/app.css\" />
	</head>
	<body>
		<div class=\"grid-x\">
			<div class=\"small-7 small-offset-3 cell\">
				<fieldset>
					<legend>
						<h4>Envio de Infomações do Banco</h4>
					</legend>
					<form action=\"processa.php\" method=\"post\" enctype=\"multipart/form-data\" name='formulario'>
						<div class=\"grid-x\">
							<div class=\"small-12 cell\">
								<label for=\"nomeBanco\" class=\"text\"><strong>Nome Do banco: </strong></label>
							</div>
							<div class=\"small-12 cell\">
								<input type=\"text\" name=\"nomeBanco\" id=\"nomeBanco\" required />
							</div>
							<div class=\"small-12 cell\">
								<label for=\"usuario\" class=\"text\"><strong>Usuario:</strong></label>
							</div>
							<div class=\"small-12 cell\">
								<input type=\"text\" name=\"usuario\" id=\"usuario\" required />
							</div>
							<div class=\"small-12 cell\">
								<label for=\"senha\" class=\"text\"><strong>Senha: </strong></label>
							</div>
							<div class=\"small-12 cell\">
								<input type=\"password\" name=\"senha\" id=\"senha\" required />
							</div>
						</div>
						<div class=\"small-12 cell\">
								<label for=\"endereço\" class=\"text\"><strong>Endereço: </strong></label>
							</div>
							<div class=\"small-12 cell\">
								<input type=\"text\" name=\"endereço\" id=\"endereço\" required />
							</div>
						<div class=\"small-12 cell\">
								<label for=\"Pt\" class=\"text\"><strong>Prefixo Das Tabelas: </strong></label>
							</div>
							<div class=\"small-12 cell\">
								<input type=\"text\" name=\"pt\" id=\"pt\" required />
							</div>
						<div class=\"grid-x\">
							<div class=\"small-12 cell\">
								<input type=\"submit\" value=\"Enviar\" class=\"button success small-12 cell\" id=\"enviar\" />
							</div>
						</div>
					</form>
				</fieldset>
			</div>
		</div>
		<script type=\"text/javascript\" src=\"js/app.js\"></script>
	</body>
</html>";

?>