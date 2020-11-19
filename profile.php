
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
    <link href="dist/css/style.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="profile.php"><b>
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
								<h4 style="color: white; padding-top:10px; padding-left:25px;">Ticket GO</h4>

                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
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
                        <h4 class="text-themecolor">Perfil</h4>
                    </div>
                </div>
                <div class="row">
                    </div>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" >
                                    <div class="form-group">
                                        <label class="col-md-12">ID da conta </label>
                                        <div class="col-md-12">
                                            <input disabled type="text" value="<?echo $dados['ID'];?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input disabled type="email" value="<? echo $dados['Email'];?>" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nome Completo</label>
                                        <div class="col-md-12">
                                            <input disabled type="text" value="<? echo $dados['Name'];?>" class="form-control form-control-line">
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
	