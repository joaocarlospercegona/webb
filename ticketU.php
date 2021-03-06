<?
if($_POST['sair']){
		$_SESSION = array();
		// Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
		// Nota: Isto destruirá a sessão, e não apenas os dados!
		
		// Por último, destrói a sessão
		setcookie("ID", NULL, 1);
		setcookie("TOKEN", NULL, 1);
		setcookie("SECURE", NULL, 1);
		session_destroy();
		echo"<meta http-equiv=refresh content=\"1;URL=index.php\">";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" >
    <title>SUPORTE GO</title>
    <link href="dist/css/style.css" rel="stylesheet" />
	<script>
		function mudaProfile($res){
			window.location.href= $res;
		}
	</script>
	<style>
	.alinhar {
	position: absolute; 
	left: 900px; /* posiciona a 90px para a esquerda */ 
	top: 30px; /* posiciona a 70px para baixo */
	}

	</style>
</head>

<body class="skin-default-dark fixed-layout">
 
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="ticketU.php">
                        <b>
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b><span>
                         <img src="assets/images/ticktis.png" alt="homepage" class="dark-logo" />
                         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <li class="nav-item search-box">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
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
								<h4 style="color: white; padding-top:10px; padding-left:25px;"><?=$_GET['id']?></h4>

                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- <li> <a class="waves-effect waves-dark" href="index.html" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li> -->
                        <li> <a class="waves-effect waves-dark" onclick="mudaProfile('profile.php?id=<?=$_GET['id']?>')" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Profile</a></li>
                        <li> <a class="waves-effect waves-dark" onclick="mudaProfile('ticketU.php?id=<?php echo $_GET['id'];?>')"  aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Ticket's</a></li>
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
                        <h4 class="text-themecolor">TICKET'S</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <a onclick="mudaProfile('newTicket.php?id=<?php echo $_GET['id'];?>')"><button type="button" class="btn btn-success d-none d-lg-block m-l-15">Novo TICKET</button></a>
                            </ol>                            
                        </div>                        
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
						<div class="alinhar">
						<form method="post">
							<select name="tema" id="temas" class="form-control-line">
								<option value="Em Analise">Em Analise</option>
								<option value="Concluido">Concluido</option>
							</select>
							<input type="submit" class="btn btn-success" value="Buscar" name="buscarOk" id="register" onclick="new Ajax.Updater('checar', 'ticketA.php?write=true', {method: 'post', asynchronous:true, parameters:Form.serialize(document.registro)}); esperar('checar');">
						</form>
						</div>
                            <div class="card-body">
                                <h4 class="card-title">TICKET'S DOS USUARIOS</h4>
                                <h6 class="card-subtitle">tickets</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Dt/Hr TICKET</th>
                                                <th>Usuario</th>
												<th>Assunto</th>
                                                <th>Status</th>
                                                <th>Visualisar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
												for ($i=1; $i <= mssql_num_rows($tickets); $i++){
												$value = mssql_fetch_array($tickets);
												$dadin = mssql_fetch_array(mssql_query("SELECT * FROM ".DB_ACC.".dbo.cabal_ticket_table WHERE userNum ='".$value['contaIdx']."'"));
												$idx = $dadin['ID'];?>
													<tr>
														<td><?=$value['usernum']?></td>
														<td><?=$value['data']?></td>
														<td><?=$idx?></td>
														<td><?=$value['Sobre']?></td>
														<?
														if($value['status'] == 'Em Analise')
															echo'<td style="color:orange;">'.$value['status'].'</td>';?>
														<?
														if($value['status'] == 'Em espera')
															echo'<td style="color:red;">'.$value['status'].'</td>';?>
														<?
														if($value['status'] == 'Concluido')
															echo'<td style="color:green;">'.$value['status'].'</td>';?>			
														<td><a href="consulta.php?idt="><img src="assets/images/edit.jpeg" width=45
																height=40></a></td>
													</tr>
												<?}?>                                           
                                        </tbody>
                                    </table>
                                </div>
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
    <script src="dist/js/funcs.js"></script>
</body>

</html>
	