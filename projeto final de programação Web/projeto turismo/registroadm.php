<? php 

$ host = "localhost"; 
$ user = "root"; 
$ password = ""; 
$ db = "registro"; 

mysql_connect ($ host, $ user, $ password); 
mysql_select_db ($ db); 

if (isset ($ _ POST ['username'])) { 
    
    $ usuariocom = $ _ POST ['fullname'];
    $ usuario = $ _ POST ['username']; 
    $ password = $ _ POST ['password']; 
    $ cofpassword = $ _ POST ['confirm_password']; 
    $ email = $ _ POST ['Email']; 
    
    $ sql = "select * from registro where user = '". $ usuariocom. "' AND Pass = '". $ usuario. " '". $ password. "' AND Pass = '". $ cofpassword. " ". $ email. "' limit 1"; 
    
    $ result = mysql_query ($ sql); 
    
    if (mysql_num_rows ($ result) == 1) { 
        echo "Você efetuou login com sucesso"; 
        exit()(); 
    } 
    else { 
        echo "Você digitou a senha incorreta"; 
        exit(); 
    } 
        
} 
?>




<! DOCTYPE html>
<html>
<head>
	<title> Formulário de registro</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<div class = "container">
		<form method="POST" action="#">
			<div class = "form-input">
				<input type = "text" name = "fullname" placeholder = "Digite o seu  nome completo" />
			</div>


			<div class = "form-input">
				<input type = "text" name = "username" placeholder = "Digite o nome de usuário" />
			</div>

			<div class = "form-input">
				<input type = "password" name = "password" placeholder = "Digite a sua senha" />
			</div>

			<div class = "form-input">
				<input type = "password" name = "confirm_password" placeholder = "Digite a sua senha" />
			</div>

			<div class = "form-input">
				<input type = "email" name = "Email" placeholder = "Digite o seu email" />
			</div>

	<input type ="submit" name ="submit" value ="LOGIN" class ="btn-login" />
		</form>
	</div>
	</body>
</html>