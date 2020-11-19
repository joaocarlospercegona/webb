<?php
	include('_conf/confCabal.php'); 
	
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" >
    <title>SUPORTE GO</title>
    <link href="dist/css/style.css" rel="stylesheet">
	
	
	 <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-55043331-1', 'auto');

  ga('send', 'pageview');



</script>



        <script type="text/javascript" src="js/jquery.featureList-1.0.0.js"></script>



        <script type="text/javascript" src="js/kkcountdown.min.js"></script>



        <script>



        	var $j = jQuery.noConflict();



        </script>



        <script type="text/javascript">



			$j(document).ready(function(){



				$j(".kkcount-down-eventos").kkcountdown({



					dayText : ' Dia ',



					daysText : ' Dias ',



					hoursText : ':',



					minutesText : ':',



					secondsText : '',



					displayZeroDays : false,



					textAfterCount : 'Começou!!'



				});



			}); 



		</script>

<script type="text/javascript">

function delayer(){

    window.location = "index.html";

}





$(window).load(function(){



$(window).resize(function () {$('body').css({

            'width': $(window).width(),

            'height': $(window).height(),

}).resize();

});

});

</script>
<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" src="js/scriptaculous/lib/prototype.js"></script> <!--PART AJAX-->

<script type="text/javascript" src="js/propios.js"></script> <!--PART AJAX-->

<script type="text/javascript">

function SomenteNumero(e){

    var tecla=(window.event)?event.keyCode:e.which;

    if((tecla > 47 && tecla < 58)) return true;

    else{

    if (tecla != 8) return false;

    else return true;

    }

}

</script>

<script type="text/javascript">

var persistmenu="yes"

var persisttype="sitewide"



if (document.getElementById){ //DynamicDrive.com change

document.write('<style type="text/css">\n')

document.write('.submenu{display: none;}\n')

document.write('</style>\n')

}





function SwitchMenu(obj){

	if(document.getElementById){

	var el = document.getElementById(obj);

	var ar = document.getElementById("masterdiv").getElementsByTagName("span"); //DynamicDrive.com change

		if(el.style.display != "block"){ //DynamicDrive.com change

			for (var i=0; i<ar.length; i++){

				if (ar[i].className=="submenu") //DynamicDrive.com change

				ar[i].style.display = "none";

			}

			el.style.display = "block";

		}else{

			el.style.display = "none";

		}

	}

}



function get_cookie(Name) { 

var search = Name + "="

var returnvalue = "";

if (document.cookie.length > 0) {

offset = document.cookie.indexOf(search)

if (offset != -1) { 

offset += search.length

end = document.cookie.indexOf(";", offset);

if (end == -1) end = document.cookie.length;

returnvalue=unescape(document.cookie.substring(offset, end))

}

}

return returnvalue;

}



function onloadfunction(){

if (persistmenu=="yes"){

var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname

var cookievalue=get_cookie(cookiename)

if (cookievalue!="")

document.getElementById(cookievalue).style.display="block"

}

}





function savemenustate(){

var inc=1, blockid=""

while (document.getElementById("sub"+inc)){

if (document.getElementById("sub"+inc).style.display=="block"){

blockid="sub"+inc

break

}

inc++

}

var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname

var cookievalue=(persisttype=="sitewide")? blockid+";path=/" : blockid

document.cookie=cookiename+"="+cookievalue

}



if (window.addEventListener)

window.addEventListener("load", onloadfunction, false)

else if (window.attachEvent)

window.attachEvent("onload", onloadfunction)

else if (document.getElementById)

window.onload=onloadfunction



if (persistmenu=="yes" && document.getElementById)

window.onunload=savemenustate

 

function showProgress() { 

    var pb = document.getElementById("progressBar"); 

    pb.innerHTML = '<img src="images/loading.gif" />'; 

    pb.style.display = ''; 

} 

</script> 



<script>

    var $j = jQuery.noConflict();

</script>



<script type="text/javascript" src="js/CabalMaximus.js"></script>

</head>

<body class="skin-default-dark fixed-layout">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="loginTeste.php">
                        <b>
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b><span>
                            <img src="assets/images/ticktis.png" alt="homepage" class="dark-logo" />
                            <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">
                </div>
            </nav>
        </header>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles"></div>
                <div class="container">
                    <div class="col-md-offset-2">
                        <div class="card">
						<div style="background-color:#1C1C1C; text-align:center;">
							<?
															
								 if($_POST['rgtOk']) {
									 if($_GET['write'] == true)

							if(preg_match("/[^0-9a-zA-Z]/i", $_GET['write']))

							 echo"<meta http-equiv=refresh content=\"1;URL=index.php\">";
									function valid_email($str){
										return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
									}
									
									$txtName = anti_injection($_POST['txtName']);
									$txtEmail = anti_injection($_POST['txtEmail']);
									$txtLogin = anti_injection($_POST['txtLogin']);
									$txtSenha = anti_injection($_POST['txtSenha']);
									$txtrSenha =anti_injection($_POST['txtRE-Senha']);
									
									$SQL_Q1 = mssql_query("SELECT 1 FROM ".DB_ACC.".dbo.cabal_ticket_table WHERE ID ='". $txtLogin ."';");
									$SQL1 = mssql_num_rows($SQL_Q1);

									$SQL_Q2 = mssql_query("SELECT 1 FROM ".DB_ACC.".dbo.cabal_ticket_table WHERE Email='". $txtEmail ."';");
									$SQL2 = mssql_num_rows($SQL_Q2);
									
											
									if($SQL1 > 0) 
										$Error .= "<li>Login ".$txtLogin." ja esta em uso.</li> ";

									if($SQL2 > 0) 
										$Error .= "<li>Email ".$txtEmail." ja esta em uso.</li> ";

									if(valid_email($txtEmail)==FALSE)
										$Error .= "<li>Email , formato invalido, exemplo meunome@dominio.com</li>"; 
									
									if(strlen($txtLogin) < 5 || strlen($txtLogin) > 15)
										 $Error .= "<li>Login requer minimo 5 e maximo 15 digitos </li>"; 

									if(preg_match("/[^0-9a-zA-Z]/i", $txtLogin))
										$Error .= "<li>Login , digite apenas letras ou numeros </li>";
									
									if(strlen($txtSenha) < 5 || strlen($txtSenha) > 15)//Verificacao de Password //
										 $Error .= "<li>Senha requer minimo 5 e maximo 15 digitos </li>"; 

									if(preg_match("/[^0-9a-zA-Z]/i", $txtSenha))
										 $Error .= "<li>Senha , digite apenas letras ou numeros </li>";
									 
									if($txtSenha <> $txtrSenha)// verificacao de pasword //
										$Error .= "<li>Re-senha incorreta <br> </li>";

									if(strlen($txtrSenha) < 5 || strlen($txtrSenha) > 15)
										$Error .= "<li>Re-senha requer minimo 5 e maximo 15 digitos </li>"; 
									
									if(empty($Error) == false)

									echo '<div class=\'ferrorbig\' style=\'text-align:center;\'>

									 <b><font style=\'color:red; font-size:14px; \'>Erros encontrados</font></b><br />

									<ul>

									<li>'.$Error.'</li>
									</ul> 

									</div>';
									
									else{
										
										//colocar a insersão
										$token = random_bytes;
										$token = bin2hex($token);
										$secure = rand(1000000000, 9999999999);
										
        
										mssql_query('exec '.DB_ACC.'.dbo.cabal_tool_registerTicket "'. $txtLogin .'", "'. $txtSenha .'", "'. $txtEmail .'", "'. $txtName .'","'. $token .'","'. $secure.'"');

										echo 

										'

										<div class=\'ferror\'><font color="#00CC00" style=" margin-right:10px; margin-left:15px;"><b>Cadastro concluido</b><br />

										<ul>

										<li><font color="#00CC00" style=" margin-right:10px; margin-left:15px;"><b>Seu registro foi efetuado com sucesso!</b></font> </li>

										<li><font color="#00CC00" style=" margin-right:10px; margin-left:15px;"><b>obrigado por se registrar '.$txtName.'</b></font></li>

										</ul>

										</div>';
									}
								}
							?>
						</div>
						<form method="post" id="register_form">
                            <div class="card-body">
                                <h1 class="text-center">Cadastro</h1>
                                <div class="form-group">
                                    <label for="example-name" class="col-md-12">Nome</label>
                                    <div class="col-md-12">
                                        <input name="txtName" required id="username" autocomplete="off" type="text" placeholder="Username" value="" maxlength="16"
                                            class="form-control form-control-line" id="txtLogin"/>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input name="txtEmail" required id="username" autocomplete="off" type="text" placeholder="Username" value="" maxlength="30"
                                            class="form-control form-control-line" id="txtLogin"/>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="example-email" class="col-md-12">Login</label>
                                    <div class="col-md-12">
                                        <input name="txtLogin" required id="username" autocomplete="off" type="text" placeholder="Username" value="" maxlength="16"
                                            class="form-control form-control-line" id="txtLogin"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Senha</label>
                                    <div class="col-md-12">
                                        <input name="txtSenha" required id="password" type="password" autocomplete="off" placeholder="Password" value=""
										maxlength="16" class="form-control form-control-line"/>
                                    </div>
                                </div> 
								<div class="form-group">
                                    <label class="col-md-12">Re-Senha</label>
                                    <div class="col-md-12">
                                        <input name="txtRE-Senha" required id="password" type="password" autocomplete="off" placeholder="Password" value=""
										maxlength="16" class="form-control form-control-line"/>
                                    </div>
                                </div>	
															
                                <div class="form-group">
                                    <div class="col-sm-12 text-center">
										<input type="submit" class="btn btn-success" value="Register" name="rgtOk" id="register" onclick="new Ajax.Updater('checar', 'register.php?write=true', {method: 'post', asynchronous:true, parameters:Form.serialize(document.registro)}); esperar('checar');">
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="col-sm-12 text-center">
										<a href="loginTeste.php">Já possuo uma conta</a>
                                    </div>
                                </div>
                            </div>
						</form>
                    </div>
                </div>
            </div>
        </div>
	</div>
    </div>
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <script src="dist/js/custom.min.js"></script>
</body>

</html>