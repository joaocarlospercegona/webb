
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
        $("#cep").mask("00000-000");
    </script>
	<script>
		function mudaProfile($res){
			window.location.href= $res;
		}
	</script>
</head>

<body class="skin-default-dark fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">SUPORTE GO</p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="newTicket.php"><b>
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
                        <? if($_SESSION['tipo2'] == 'permissao2'){ ?>
							<li> <a class="waves-effect waves-dark" onclick="mudaProfile('ticketA.php?id=<?php echo $_GET['id'];?>')"  aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Ticket's</a></li>
                        <?}?>
						<? if($_SESSION['tipo3'] == 'permissao3'){ ?>
							<li> <a class="waves-effect waves-dark" onclick="mudaProfile('ticketU.php?id=<?php echo $_GET['id'];?>')"  aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Ticket's</a></li>
                        <?}?>
						<?php 
							if($_SESSION['tipo'] == 'permissao'){?>
							<li> <a class="waves-effect waves-dark" onclick="mudaProfile('admin.php?id=<?php echo $_GET['id'];?>')"  aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Admin</span></a></li>
						<?}?>
						<li> <a class="waves-effect waves-dark" onclick="mudaProfile('Bate Papo.php')"  aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>BatePapo</a></li>
						
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
                        <h4 class="text-themecolor">Novo Tickit</h4>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
						<div style="background-color:#1C1C1C; text-align:center;">
							<?
															
								 if($_POST['rgtOk']) {
									 if($_GET['write'] == true)

							if(preg_match("/[^0-9a-zA-Z]/i", $_GET['write']))

							 echo"<meta http-equiv=refresh content=\"1;URL=index.php\">";
									
									
									$txtLogin = anti_injection($_POST['txtLogin']);
									$txtAssunto = anti_injection($_POST['txtAssunto']);
									$tema = anti_injection($_POST['tema']);
									
									$SQL_Q1 = mssql_query("SELECT 1 FROM ".DB_ACC.".dbo.cabal_ticket_table WHERE ID ='". $txtLogin ."';");
									$SQL1 = mssql_num_rows($SQL_Q1);
									
									
									if($txtAssunto == null)
									echo '<div class=\'ferrorbig\' style=\'text-align:center;\'>

									 <b><font style=\'color:red; font-size:14px; \'>Erros encontrados</font></b><br />

									<ul>

									<li>'.$Error.'</li>
									</ul> 

									</div>';
									
									else{
										$data = date('d/m/Y');
										//colocar a insersão
										$dadin = mssql_fetch_array(mssql_query("SELECT * FROM ".DB_ACC.".dbo.cabal_ticket_table WHERE ID ='".$_GET['id']."'"));
										$idx = $dadin['userNum'];
										mssql_query('exec '.DB_ACC.'.dbo.cabal_tool_registerTicketA "'. $idx .'", "'. $txtAssunto .'", "'. $tema .'"');

										echo 

										'

										<div class=\'ferror\'><font color="#00CC00" style=" margin-right:10px; margin-left:15px;"><b>Ticket enviado com sucesso</b><br />
										'.$tema.'
										</div>';
										echo"<meta http-equiv=refresh content=\"1;URL=ticketU.php?id='".$_GET['id']."'\">";
									}
								}
							?>
						</div>
                            <form class="form-horizontal form-material" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">Usuario</label>
                                    <div class="col-md-12">
                                        <input id="usuario" name="txtLogin" disabled type="text" class="form-control form-control-line" value="<?=$_GET['id']?>">
                                    </div>
                                </div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Assunto</label>
									<textarea class="form-control" name="txtAssunto" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
								<div class="form-group" >
									<label class="col-md-12">Tema do Tickt</label>
                                    <div class="col-md-4" align="center">
                                        <select name="tema" id="temas" class="form-control  form-control-line" >
										  <option value="BUG">BUG</option>
										  <option value="Sugestao">Sugestão</option>
										  <option value="Donate">Donate</option>
										  <option value="Ban">Ban</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-success" value="Enviar Ticket" name="rgtOk" id="register" onclick="new Ajax.Updater('checar', 'newTicket.php?write=true', {method: 'post', asynchronous:true, parameters:Form.serialize(document.registro)}); esperar('checar');">
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
