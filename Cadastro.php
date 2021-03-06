
<!DOCTYPE html>
<html>

    <head>
	<title> Cabal The Last War</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="content-language" content="pt-br">
		<link rel="shortcut icon" type="image/ico" href="favicon.png">
		<link href="dist/css/style.css" rel="stylesheet">
		<style>
		*{
			margin-top: 0px;
			padding:0;
			color:#aaa;
			font-family:'Arial';
			font-size: 32;
		}
		body{
			background:url(img/bkg1012.png) center no-repeat;
			background-position: 100% 100%;
			background-size: 100% 90%;
		}
		.login{
			padding-top:7px;
			padding-left:40px;
			display: flex;
			flex-direction: row;
			justify-content: flex-start;
			align-items: center;
		}
		.esp{
			border: 1px solid black;
			border-radius: 10px;
			text-align:center;
			margin-left:10px;
			height:40px;
		}

	.menu{
		width:100%;
		height:60px;
		background-color: #FFF;
		}
		
	.menu>ul{
		list-style:none;	
		position:relative;
        margin-left:100px;
        z-index: 2;
		
		}
	.menu ul li{
			width:100px;
			float:left;
		}

	.menu a{
		padding:21px;
		display:block;
		text-decoration: none;
		color:black;
		background-color: #FFF;
		text-align:center;
		}
	.menu ul ul{
		list-style:none;
		position:absolute;
		visibility:hidden;		
		}
	.menu ul li:hover ul{
		visibility:visible;
		margin-top: 3px;	
	}
		
	.menu a:hover{
		margin-top: -7px;
		background-color:#222;
		color: white;
		height:70px;
		}

	.menu ul ul li{
		float:none;
		border-bottom: solid 1px #ccc;
		}
	.menu ul ul li a{
		background-color:#069;
		}
	#bt_menu{
		display: none;
		}
	label[for='bt_menu']{
		padding:5px;
		background-color:#222;
		color:#fff;
		font-family:'Arial';
		text-align:center;
		font-size:30px;
		cursor:pointer;
		display:none;
		width:50px;
		height:50px;
		}	
		label[for='bt_menu']:hover{
			background-color:#f4f4f4;
			color:#aaa;
			}

		@media (max-width: 900px) {
		body{
			margin: 0;
			background:url(img/bkg1012.png) center no-repeat;
			background-position: 100% 100%;
			background-size: 100% 100%;
		}
		.menu{
			margin-left:-100%;
			transition:all .7s;
			background-color: #222;
            margin-top: -10px;
            position:absolute;
            z-index: 1;
			}
		.login{
			background-color: white;
			margin-top: -20px;
			padding-top:13px;
			padding-left:40px;
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			height:70px;
		}
		.esp{
			border: 1px solid black;
			border-radius: 10px;
			text-align:center;
			margin-left:10px;
		}
		.menu a{
			background-color: white;
		}
		label[for='bt_menu']{
			display:block;
			width:100%;
			height:50px;
			}
		.menu>ul{
			margin-left:0;
			}
		
		.menu ul li{
			width:100%;
			float:none;
			}
		.menu ul ul{
			position:static;
			overflow:hidden;
			max-height:0;
			transition:all .4s;
			background-color: white;
			}
		.menu ul li:hover ul{
			height:auto;
			max-height:200px;
			transition:all .4s;
			}
		#bt_menu:checked ~ .menu{
			margin-left:0;
			}
			.logoP{
				margin-left: -100%;
			}
			.logop1{
			width:301px;
			height:301px;
			margin-left: -100%;
			}	
	}
	.logoP{
			width:301px;
			height:301px;
			position: absolute;
			top: 10%;
            left: 10%;
            z-index: -1;
			
		}
		.logop1{
			position: absolute;
			top: 3%;
			left: 2%;
		}
		.alinha{
			margin-left:2%;
			margin-top:36%;
		}
	</style>
	</head>
    <body>
<input type="checkbox" id="bt_menu">
<label for="bt_menu">&#9776;</label>

<div class="logop1">
		<a href="index.php"><img src="img/logop.png"  width="50"/></a>
	</div>


<nav class="menu">

	<ul>
		<li><a href="Cadastro.php" > Cadastro</a></li>
		<li><a href="testando.php" >Download</a></li>
		<li><a href="#" >Doação</a></li>
		<li><a href="rank.php">Ranks</a></li>
		<li><a href="loginTeste.php" >Suporte</a></li>
		<li><a href="noticias.php" >Noticias</a></li>
		<li><a href="redes.php">Contato</a></li>
	</ul>
	<div class="login">
			<input type="text" class="esp" placeholder="Login"/>
			<input type="password" class="esp" class="input1" placeholder="Senha"/>
			<input type="submit" class="esp" style="border-radius:10px; width:50px; height:40px ;background-color: #00BFFF; color: white;" value="Logar"/>
		</div>
	
</nav>

<div class="col-md-6" >
            <div class="container-fluid">
                <div class="row page-titles"></div>
                <div class="container">
                    <div class="col-md-offset-2">
                        <div class="card">
						<form method="post" id="register_form">
                            <div class="card-body">
                                <h1 class="text-center">Cadastro</h1>
                                <div class="form-group">
                                    <label for="example-name" class="col-md-12">Nome</label>
                                    <div class="col-md-12">
                                        <input name="txtName" required id="username" autocomplete="off" type="text" placeholder="Nome" value="" maxlength="16"
                                            class="form-control form-control-line" id="txtLogin"/>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input name="txtEmail" required id="username" autocomplete="off" type="text" placeholder="Email" value="" maxlength="30"
                                            class="form-control form-control-line" id="txtLogin"/>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="example-email" class="col-md-12">Login</label>
                                    <div class="col-md-12">
                                        <input name="txtLogin" required id="username" autocomplete="off" type="text" placeholder="Login" value="" maxlength="16"
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
                                    <label class="col-md-12">Re-Senha</label>
                                    <div class="col-md-12">
                                        <input name="txtRE-Senha" required id="chave" type="text" autocomplete="off" placeholder="Chave de Segurança" value=""
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

    </body>
</html>