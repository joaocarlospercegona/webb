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
			
			background-color: black;
			background-position: 100% 100%;
			background-size: 100% 91%;
		}
		.login{
			padding-top:14px;
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
		margin-top: -13px;
		width:100%;
		height:70px;
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
		padding-top:30px;
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
		margin-top: 3px;
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
		
			.linha{
				margin-top: 10px;
				display: flex;
				flex-direction: row;
				justify-content: flex-start;
				align-items: flex-end;
			}
.coluna{
	margin-left:3%;
	margin-top: 0.8%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
.colunaI{
	padding-left:5%;
	margin-top: 0.8%;
	display: flex;
	flex-direction: column;
	justify-content: flex-end;
	align-items: flex-end;
}
a {
	margin-left: 20px;
	font-size: 16; 
	color:black;
}
.coluna a:hover{
	color:blue;
}
.colunaI a:hover{
	color:blue;
}
 
#tarjaInfo {
	background-color:white;
	width: 100%;
	height: 100px;
	position: absolute;
	top: 190%;
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


		.containerT{
			position: absolute;
			top: 40%;
			left: 7%;
			height: 80vh;
			width: 90vw;
			
		}

		.containerT .linha{
			padding-top:20px;
			display: flex;
			flex-direction: row;
			justify-content: flex-start;
			align-items: flex-start;
		}
		
		.containerT .linha .containerE{
			margin-top: -10px;
			width: 50%;
			height: 80vh;
			
		}

		.containerT .linha .containerE .titulo{
			margin: 0;
			
		}

		.containerT .linha .containerE .titulo p{
			color:white;
			font-size:24px;
		}

		.containerT .linha .containerD{
			margin-top: -10px;
			width: 50%;
			height: 80vh;
		
		}

		.containerT .linha .containerD .titulo{
			margin: 0;
			
		}

		.containerT .linha .containerD .titulo p{
			color:white;
			font-size:24px;
		}







		.logoP{
			width:301px;
			height:301px;
			position: absolute;
			top: 10%;
			left: 37%;
			z-index: -1;
			
		}
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
		<li><a href="rank.php">Ranks</a>
        </li>
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

	<div class="logoP">
		<img src="img/logoLa.png" />
	</div>

	<div class="containerT">
		<h1 style="font-size:48px; color:white;">Ranking</h1>	
			<div class="linha">
				<div class="containerE">
					<div class="titulo">
						<p>Ranking Player</p>
					</div>
					<table align="left" style="margin-left: 5px;">
						<thead>	
							<tr style="border-bottom: 1px solid #708090">
								<th style="width: 50px; font-size:16px;">#</th>
								<th style="width: 150px; font-size:16px;">Player</th>
								<th style="width: 60px; font-size:16px;">Level</th>
								<th style="width: 60px; font-size:16px;">Honra</th>
								<th style="width: 150px; font-size:16px;">Guild</th>
								<th style="width: 30px; font-size:16px;">Nação</th>
							</tr>
						</thead>
						<tbody>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#01</th>
								<th style="font-size:18px; color:white;">Metatron</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Oblivion</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#02</th>
								<th style="font-size:18px; color:white;">DreadHot</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Aldeia</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#03</th>
								<th style="font-size:18px; color:white;">Bruxinha</th>
								<th style="font-size:18px; color:white;">200</th>
								<th style="font-size:18px; color:white;">20</th>
								<th style="font-size:18px; color:white;">Alcaida</th>
								<th>1</th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="containerD">
					<div class="titulo">
						<p>Ranking Guild</p>
					</div>
					<table align="left" style="margin-left: 5px;">
						<thead>	
							<tr style="border-bottom: 1px solid #708090">
								<th style="width: 50px; font-size:16px;">#</th>
								<th style="width: 420px; font-size:16px;">Guild</th>
								<th style="width: 60px; font-size:16px;">Nação</th>
							</tr>
						</thead>
						<tbody>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#01</th>
								<th style="font-size:18px; color:white;">Templar</th>
								<th style="font-size:18px; color:white;">Capela</th>
							</tr>
							<tr style="border-bottom: 1px solid #708090">
								<th style="font-size:18px; color:#00FFFF;">#02</th>
								<th style="font-size:18px; color:white;">Oblivion</th>
								<th style="font-size:18px; color:white;">Proxion</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	</div>



	


	<div id="tarjaInfo">
			<div class="linha">
				<div class="coluna">
					<a href="">Home</a>
					<a href="">Cadastre-se</a>
					<a href="">Download</a>
				</div>
				<div class="coluna">
					<a href="">Doação</a>
					<a href="">Rank</a>
					<a href="">Suporte</a>
				</div>
				<div class="coluna">
					<a href="">Noticias</a>
					<a href="">Redes Sociais</a>
					<a href="">Painel</a>
				</div>
				<div class="colunaI">
					<a href=""><img src="img/face.png" width="50"/>Facebook</a>
				</div>
				<div class="colunaI">
					<a href=""><img src="img/yout.png" width="50"/>Youtube</a>
				</div>
				<div class="colunaI">
					<a href=""><img src="img/inst.png" width="50"/>&nbsp;Instagram</a>
				</div>
				<div class="colunaI">
					<a href=""><img src="img/disc.png" width="50"/>Discord</a>
				</div>
			</div>
		</div>
    </body>
</html>