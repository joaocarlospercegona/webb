
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickTalk</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link type="text/css" rel="stylesheet" href="style1/homepage.css">
    <link type="text/css" rel="stylesheet" href="style1/inbox.css">
    <link type="text/css" rel="stylesheet" href="style1/chat.css">
    <link type="text/css" rel="stylesheet" href="style1/profile.css">
    <script src="js/jquery.js"></script>

    <!-- Other imports -->
    <script src="js/sweetalert2.js"></script>
    <link rel="stylesheet" href="style1/sweetalert2.css">
	<style>
#volta div.menu {
    position: absolute;
    top: 0;
    width: 25%;}

#volta div.menu button{
    display: block;
    margin: auto;
    width: 90%;
    border: none;
    border-bottom: 1px solid #CCC;
    font-size: 16pt;
    background: transparent url(img/logout.png) no-repeat scroll 10px 17px;
    background-size: 30px;
    padding: 15px 0px;
    text-align: right;
}

#volta div.menu button:hover{
    width: 60%;
}
	</style>
</head>
<body>
    <div id="loading">Loading&#8230;</div>
	<div id="volta">
		<div class="menu">
			<button onclick="ticket()">VOLTAR AOS TICKET</button>
		</div>
	</div>
    <div style="padding-top:45px;" id="inbox" class="column">
        <p class="title">Conversas</p>
        <input type="text" maxlength="15" name="username" class="searchField" onkeyup="search()" placeholder="Pesquisar utilizador" />
        <div id="searchContainer"></div>
        <div class="container"></div>
    </div>

    <div id="chat" class="column"></div>
	
    <div id="profile" class="column">
        <p class="title">Perfil</p>
        <div class="container"></div>
        <div class="menu">
            <button onclick="logout()">Sair</button>
        </div>
    </div>

    <script>
	       function loadInbox() {
            $.ajax({
                url: 'process/inbox.php',
                success: function (data) {
                    $('#inbox .container').html(data);
                },
                error: function (error) {
                    console.log(error);
                    Swal.fire({
                        title: 'Erro',
                        text: error.statusText,
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    })
                }
            });
        }

        function loadProfile(id = 0) {
            $.ajax({
                url: 'process/profile.php?id=' + id,
                success: function (data) {
                    $('#profile .container').html(data);
                },
                error: function (error) {
                    console.log(error);
                    Swal.fire({
                        title: 'Erro',
                        text: error.statusText,
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    })
                }
            });
        }
		
		function chateado(){
			window.location.href="chatprivado.html";
		}
		
		
        function chat(id =0) {
            $.ajax({
                url: 'process/chat.php?ida=' + id,
                success: function (data) {
                    $('#chat').html(data);
                    loadProfile(id);
                },
                error: function (error) {
                    console.log(error);
                    Swal.fire({
                        title: 'Erro',
                        text: error.statusText,
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    })
                }
            });
        }

        function search() {
            var term = $( "input.searchField" ).val();
            if (term.length >= 3) {
                $.ajax({
                    url: 'process/search.php',
                    success: function (data) {
                        $('#searchContainer').show();
                        $('#searchContainer').html(data);
                    }
                });
            } else {
                $('#searchContainer').hide();
            }
        }

        function logout() {
            $.ajax({
                url: 'process/logout.php',
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function () {
                    location.href = 'loginTeste.php';
                }
            });
        }
		function ticket() {
            window.location.href="process/ticket.php";
        }

        $( document ).ready(function() {
            setInterval(() => {
                loadInbox();
            }, 1000);
            loadProfile();
            chat();
        });

    </script>
</body>
</html>
