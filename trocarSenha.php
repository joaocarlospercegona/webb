<?php
	include('_conf/confCabal.php'); 
	
	session_start();

	 if($_POST['sbmtOk']) {

        $txtLogin = addslashes($_POST['txtLogin']);

		$txtSenha = addslashes($_POST['txtSenha']);

	if(preg_match("/[^0-9a-zA-Z]/i", $txtLogin))

     $Error .= "Login inválido";

    if(preg_match("/[^0-9a-zA-Z]/i", $txtSenha))

      $Error .= "Senha inválida";

	if(empty($Error) == false)

	  echo '<div class=\'box-warning\'>'.$Error.'</div>';

	 else 

	 {	

    $sql_Conta = @mssql_query("select ID from ".DB_ACC.".dbo.cabal_ticket_table where ID='".$txtLogin."'");

	$sql_Conta_result = @mssql_num_rows($sql_Conta);

		if($sql_Conta_result <= 0){
			echo  "<script>alert('Login Incorreto!');</script>";
		} 

		else {  

		$sql_Senha = @mssql_query('select ID from account.dbo.cabal_ticket_table where id="'.$txtLogin.'" and PWDCOMPARE("'.$txtSenha.'", Password) = 1 ');

		if (@mssql_num_rows($sql_Senha)==0) {

			echo  "<script>alert('Senha Incorreta!');</script>";   
		}

		else {

			$row = @mssql_fetch_row($sql_Senha);

			$_SESSION['ss_txtLogin'] = $txtLogin;

			$_SESSION['ss_txtSenha'] = $txtSenha;

			echo '<div style="border-color:rgba(190,40,40,0.10); background-color: blue; color:rgba(255, 255, 255, 1); height:41px; padding-left:12px; width:100%; font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:center; line-height:30px; text-shadow:2px 2px 3px #030003; border-radius:4px;">Logando,Aguarde...</div>';
			
			//aqui fazer os if para ver oq ele eh
			$dadin = mssql_fetch_array(mssql_query("SELECT * FROM ".DB_ACC.".dbo.cabal_ticket_table WHERE ID ='".$txtLogin."'"));
												
			if(in_array($_SESSION['ss_txtLogin'],$confGeral['ID_ADM'])){ 
				$_SESSION['tipo'] = 'permissao';
				$_SESSION['tipo2'] = 'permissao2';
				setcookie("ID", $dadin['ID'], time() + (10 * 365 * 24 * 60 * 60));
				setcookie("TOKEN", $dadin['token'], time() + (10 * 365 * 24 * 60 * 60));
				setcookie("SECURE", $dadin['secure'], time() + (10 * 365 * 24 * 60 * 60));
				echo"<meta http-equiv=refresh content=\"1;URL=./ticketA.php?id='".$_SESSION['ss_txtLogin']."'\">";

			}
			elseif($dadin['tipo'] == 2){
				$_SESSION['tipo2'] = 'permissao2';
				setcookie("ID", $dadin['ID'], time() + (10 * 365 * 24 * 60 * 60));
				setcookie("TOKEN", $dadin['token'], time() + (10 * 365 * 24 * 60 * 60));
				setcookie("SECURE", $dadin['secure'], time() + (10 * 365 * 24 * 60 * 60));
				echo"<meta http-equiv=refresh content=\"1;URL=./ticketA.php?id='".$_SESSION['ss_txtLogin']."'\">";   
				
			
			}
			else{
				$_SESSION['tipo3'] = 'permissao3';
				setcookie("ID", $dadin['ID'], time() + (10 * 365 * 24 * 60 * 60));
				setcookie("TOKEN", $dadin['token'], time() + (10 * 365 * 24 * 60 * 60));
				setcookie("SECURE", $dadin['secure'], time() + (10 * 365 * 24 * 60 * 60));
				echo"<meta http-equiv=refresh content=\"1;URL=./ticketU.php?id='".$_SESSION['ss_txtLogin']."'\">";   

			}
			
		} 
		}



 mssql_close();

         }

 }
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/ico" href="favicon.png">
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
                <div class="navbar-header" style="margin:10">
                    <a class="navbar-brand" href="index.php">
                        <b>
                            <img src="img/favicon.png" alt="homepage" class="dark-logo" width="40"/>
                            <img src="img/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b><span>
                            <img src="img/LogoC1.png" alt="homepage" class="dark-logo" />
                            <img src="img/logo-light-text.png" class="light-logo" alt="homepage" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">
                </div>
            </nav>
        </header>
        <div class="col-md-6" style="margin-top: 70">
            <div class="container-fluid">
                <div class="row page-titles"></div>
                <div class="container">
                    <div class="col-md-offset-2">
                        <div class="card">
						<form method="post" id="login_form">
                            <div class="card-body">
                                <h1 class="text-center">Recuperar Conta</h1>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input name="txtLogin" required id="username" autocomplete="off" type="text" placeholder="Email" value="" maxlength="16"
                                            class="form-control form-control-line" id="txtLogin" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Chave de Segurança</label>
                                    <div class="col-md-12">
                                        <input name="txtLogin" required id="username" autocomplete="off" type="text" placeholder="Chave de Segurança" value="" maxlength="16"
                                            class="form-control form-control-line" id="txtLogin" />
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="example-email" class="col-md-12">Nova Senha</label>
                                    <div class="col-md-12">
                                        <input name="txtLogin" required id="username" autocomplete="off" type="password" placeholder="Password" value="" maxlength="16"
                                            class="form-control form-control-line" id="txtLogin" />
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <div class="col-sm-12 text-center">
										<input type="submit" class="btn btn-success" value="Alterar Senha" name="sbmtOk" onClick="showProgress()" id="login">
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