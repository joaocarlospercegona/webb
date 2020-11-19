
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

<style>
	body{
			margin: 0;
			background:url(img/bkg1.png) center no-repeat;
			background-position: 100% 100%;
			background-size: 100% 91%;
		}
</style>

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
						<form method="post" id="login_form" action="ticketU.php">
                            <div class="card-body">
                                <h1 class="text-center">Painel</h1>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Login</label>
                                    <div class="col-md-12">
                                        <input name="txtLogin" required id="username" autocomplete="off" type="text" placeholder="Username" value="" maxlength="16"
                                            class="form-control form-control-line" id="txtLogin" />
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
                                    <div class="col-sm-12 text-center">
										<a href="ticketU.php"><input type="submit" class="btn btn-success" value="Login" /></a>
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="col-sm-12 text-center">
										<a href="Cadastro.php">Não possui uma conta?</a>
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="col-sm-12 text-center">
										<a href="trocarSenha">Esqueci minha senha</a>
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