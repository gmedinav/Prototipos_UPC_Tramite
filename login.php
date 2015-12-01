<?php
if (!isset($_SESSION)) {
  session_start();
}



require_once 'static/const/const.php';

$Random = mt_rand(0000000000, 9999999999);
$Ha = date('hi') + 0;
$Hb = date('hi') + 2;
$key = strlen($Random)."!".$Random."!".$Ha.':'.$Hb;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="static/docs/favicon.ico">

    <title><?php echo LOGIN; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="static/docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="static/docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="static/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="static/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- <script src="static/js/md5.pack.js" type="text/javascript"></script> -->
    <!--<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>-->
    <script src="static/js/CryptoJS v3.1.2/rollups/md5.js"></script>
<!--    <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha256.js"></script>-->
    <script src="static/js/CryptoJS v3.1.2/rollups/sha256.js"></script>
<!--    <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha512.js"></script>-->
    <script src="static/js/CryptoJS v3.1.2/rollups/sha512.js"></script>
    <script>
	function encrypta(formulario){
		//alert("El Hash MD5 es:\n" + md5(formulario.password.value));
		
		//formulario.password.value = "<?php echo SAL; ?>" + formulario.password.value
		//formulario.password.value = md5(formulario.password.value);
                
                var pas_sal = "<?php echo SAL; ?>" + formulario.password.value
                var hash = CryptoJS.MD5(CryptoJS.SHA256(CryptoJS.SHA512(pas_sal)));
                formulario.password.value = hash;
	}
        function enviarhtml(){
            $.load('templates/home.html');
        }
	</script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

       <!-- <form class="form-signin" role="form" method="post" action="clases/autentication.php">-->
       <form class="form-signin" role="form" method="post" action="Navegar/redireccionar.php">
        <h2 class="form-signin " >Acceder a SISDOC</h2>
        <input type="email" name="login" value="jaime@munives.gob.pe" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" name="password"  value="jaimejose" class="form-control" placeholder="Password" required>
        <label class="checkbox">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" value="remember-me"> Recordar
        </label>
	<input type="HIDDEN" name="key" value="<?php echo $key; ?>" />
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Iniciar Sesión</button>
        <!--<input type="submit" onclick="convierteMd5(this.form)" value="Convierte a md5">-->
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
