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
			margin-top: -3px;
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
			
		}
		.logop1{
			width:301px;
			height:301px;
			position: absolute;
			top: 3%;
			left: 2%;
		}
		.alinha{
			margin-left:2%;
			margin-top:36%;
		}
		
		.imagem-top {
			margin-left: 0%;
			margin-top: 0%;
			width: 600px;
			height: 470px;
			background:url(./img/Painel1.png) no-repeat;
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: flex-start;	
		}
		.texto {
			  position: absolute;
			  color:#fff;
			  text-align: center;
			  top: 15px;
			  width: 250px;
			  line-height: 30px;
			  height: 30px;
		}
		.container-menor{
			margin-top: 43px;
			width: 550px;
			height: 100px;
		}
		ul.downloads {
			margin:0;
			padding:0;
		}
		ul.downloads  li {
			list-style:none;
			padding:10px;
			border-top:1px #242424 solid;
			border-bottom:1px #0A0A0A solid;
			font-variant:small-caps;
		}
		ul.downloads  li:hover {
			background-color:#1A1A1A;
		}
		ul.downloads  li:first-of-type{border-top:0;}
		ul.downloads  li:last-of-type{border-bottom:0;}
		ul.downloads  li b {
			font-size:30px;
			width:calc(100% - 65px);
			padding-left:5px;
		}
		ul.downloads  li small {
			display:block;
			font-size:12px;
			width:calc(100% - 65px);
			font-variant:normal;
			padding-left:5px;
		}
		ul.downloads  li  span {
			display:block;
		}
		ul.downloads  li  span .version {padding-left:5px;}
		
.box-main
{
	background: #171717;
	overflow:hidden;
	width:100%;
	padding:5px;
	word-wrap: break-word;
	border: 1px none solid solid solid rgba(38, 38, 38, 0.90);
	border-width: 1px;
	border-color: rgba(38, 38, 38, 0.90);
	border-style: none solid solid solid;
	border-radius: 0px 0px 8px 8px;
	-moz-border-radius:0px 0px 8px 8px;  /* FF3.6+ */
	-webkit-border-radius: 0px 0px 8px 8px;  /* Chrome,Safari4+ */
	-o-border-radius: 0px 0px 8px 8px; /* Opera 11.10+ */
	-ms-border-radius: 0px 0px 8px 8px; /* IE10+ */	
}
.left{float:left;}.right{float:right;}.clear{clear:both;}.pointer{cursor:pointer;}html{width:100%;height:100%;}
.logop1{
			position: absolute;
			top: 3%;
			left: 2%;
			
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
<div class="col-md-6" style="margin-top: 70">
            <div class="container-fluid">
                <div class="row page-titles"></div>
                <div class="container">
                    <div class="col-md-offset-2">
                        <div class="card">
						

							<div class="imagem-top">
										<div class="texto">
										Download
										</div>
										<div class="container-menor">
											<ul class="downloads">
											<li style="color:red;font-weight:bold;font-size:14px;">
												» Importante: Esta aba é voltada para o download do jogo, onde você poderá baixar o cliente em diversas fontes diferentes.
											</li>

												<li id="download0" class="pointer"> 
													<a href="#" target="_blank">   
														<font color="#BBBBBB"> 
															<img class="left" width="60" height="60" src="img/mediafire_logo.png"></img>
																<b class="left"> Mediafire </b>
																<small class="left">Incluir este cliente Idade Imperial Update .</small>
															<span><div class="version left">v.1.0.0.6</div>
															</span>
														</font>
													</a>
													<div class="datetime right"><a href="#" target="_blank"><font color="#BBBBBB">01 DE Janeiro DE 2019</font></a></div>
													<a href="#" target="_blank"><font color="#BBBBBB"><span>
													<div class="clear"></div>
													</span>
												</font>
													</a>
												</li>
												<li id="download0" class="pointer"> 
													<a href="#" target="_blank">   
														<font color="#BBBBBB"> 
															<img class="left" width="60" height="60" src="img/mediafire_logo.png"></img>
																<b class="left"> Mediafire </b>
																<small class="left">Incluir este cliente Idade Imperial Update .</small>
															<span><div class="version left">v.1.0.0.6</div>
															</span>
														</font>
													</a>
													<div class="datetime right"><a href="#" target="_blank"><font color="#BBBBBB">01 DE Janeiro DE 2019</font></a></div>
													<a href="#" target="_blank"><font color="#BBBBBB"><span>
													<div class="clear"></div>
													</span>
												</font>
													</a>
												</li>
												<li id="download0" class="pointer"> 
													<a href="#" target="_blank">   
														<font color="#BBBBBB"> 
															<img class="left" width="60" height="60" src="img/mediafire_logo.png"></img>
																<b class="left"> Mediafire </b>
																<small class="left">Incluir este cliente Idade Imperial Update .</small>
															<span><div class="version left">v.1.0.0.6</div>
															</span>
														</font>
													</a>
													<div class="datetime right"><a href="#" target="_blank"><font color="#BBBBBB">01 DE Janeiro DE 2019</font></a></div>
													<a href="#" target="_blank"><font color="#BBBBBB"><span>
													<div class="clear"></div>
													</span>
												</font>
													</a>
												</li>
											
											</ul>
										</div>
									</div> 	
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>