<?php
	include('_conf/confCabal.php');
	
	if($_POST['sair']){
		$_SESSION = array();
		// Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
		// Nota: Isto destruirá a sessão, e não apenas os dados!
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
			);
		}
		setcookie("ID", NULL, 1);
		setcookie("TOKEN", NULL, 1);
		setcookie("SECURE", NULL, 1);
		// Por último, destrói a sessão
		session_destroy();
		echo"<meta http-equiv=refresh content=\"1;URL=loginTeste.php\">";
	}
	if($_SESSION['ss_txtLogin'] == null){
		echo"<meta http-equiv=refresh content=\"1;URL=loginTeste.php\">";
	}
	elseif(in_array($_SESSION['ss_txtLogin'],$confGeral['ID_ADM'])){
					
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" >
    <title>SUPORTE GO</title>
    <link href="dist/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $("#cpf").mask("000.000.000-00");
    </script>
	<script>
		function mudaProfile($res){
			window.location.href= $res;
		}
	</script>
</head>

<body class="skin-default-dark fixed-layout">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="newUser.php"><b>
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b><span>
                            <img src="assets/images/ticktis.png" alt="homepage" class="dark-logo" />
                            <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light"
                                href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <li class="nav-item search-box">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>                    	
					<div style="padding-right:25px; padding-top:15px;">
						<form method="post">
							<input type="submit" name="sair" class="btn btn-danger d-none d-lg-block m-l-15" value="sair"/>
						</form>
					</div>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="assets/images/logo-icon.png" alt="elegant admin template"></span>
				<h4 style="color: white; padding-top:10px; padding-left:25px;">TICKET GO</h4>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i
                        class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
            </div>
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- <li> <a class="waves-effect waves-dark" href="index.html" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li> -->
						<li> <a class="waves-effect waves-dark" onclick="mudaProfile('profile.php?id=<?php echo $_GET['id'];?>')" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Profile</a></li>
                        <li> <a class="waves-effect waves-dark" onclick="mudaProfile('ticketA.php?id=<?php echo $_GET['id'];?>')"  aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Ticket's</a></li>
                        <?php 
							if($_SESSION['tipo'] == 'permissao'){?>
							<li> <a class="waves-effect waves-dark" onclick="mudaProfile('admin.php?id=<?php echo $_GET['id'];?>')"  aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Admin</span></a></li>
							<?}?>                       
							<li> <a class="waves-effect waves-dark" onclick="mudaProfile('chatprivado.php')"  aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Suporte</a></li>
						
							<!-- <li> <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu"></span>Icon</a></li>
                        
						<li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i class="fa fa-bookmark-o"></i><span class="hide-menu"></span>Blank</a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i class="fa fa-question-circle"></i><span class="hide-menu"></span>404</a></li> -->
                        <div class="text-center m-t-30">
                            <form method="post">
								<input type="submit" name="sair" class="btn btn-danger hidden-md-down" value="sair"/>
							</form>
                        </div>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Novo usuário</h4>
                    </div>
                </div>
                <div class="row"></div>
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
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
									$txtrSenha =anti_injection($_POST['txtrSenha']);
									
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
										mssql_query('exec '.DB_ACC.'.dbo.cabal_tool_registerTicketGM "'. $txtLogin .'", "'. $txtSenha .'", "'. $txtEmail .'", "'. $txtName .'"');

										echo 

										'

										<div class=\'ferror\'><font color="#00CC00" style=" margin-right:10px; margin-left:15px;"><b>Cadastro concluido</b><br />

										<ul>

										<li><font color="#00CC00" style=" margin-right:10px; margin-left:15px;"><b>Seu registro foi efetuado com sucesso!</b></font> </li>

										<li><font color="#00CC00" style=" margin-right:10px; margin-left:15px;"><b>obrigado por se registrar '.$txtName.'</b></font></li>

										</ul>

										</div>';
										 echo"<meta http-equiv=refresh content=\"1;URL=admin.php?id='".$_GET['id']."'\">";
									}
								}
							?>
						</div>
                            <form class="form-horizontal form-material" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">Nome Completo</label>
                                    <div class="col-md-12">
                                        <input required type="text" name="txtName" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" required class="form-control form-control-line" name="txtEmail"
                                            id="txtEmail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">ID da conta</label>
                                    <div class="col-md-12">
                                        <input required type="text" name="txtLogin" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Senha</label>
                                    <div class="col-md-12">
                                        <input required type="password" name="txtSenha" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Confirmar senha</label>
                                    <div class="col-md-12">
                                        <input required type="password" name="txtrSenha" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 text-center">
										<input type="submit" class="btn btn-success" value="Register" name="rgtOk" id="register" onclick="new Ajax.Updater('checar', 'newUser.php?write=true', {method: 'post', asynchronous:true, parameters:Form.serialize(document.registro)}); esperar('checar');">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        © 2020 www.Cabalgo.com/site
    </footer>
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
<? } ?>