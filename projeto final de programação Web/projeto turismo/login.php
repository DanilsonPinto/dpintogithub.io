<? php 

$ host = "localhost"; 
$ user = "root"; 
$ password = ""; 
$ db = "utilizadorc"; 

mysql_connect ($ host, $ user, $ password); 
mysql_select_db ($ db); 

if (isset ($ _ POST ['username'])) { 
    
    $ usuarioc = $ _ POST ['username']; 
    $ password = $ _ POST ['password']; 
    
    $ sql = "select * from login where user = '". $ usuarioc. "' AND Pass = '". $ password. "' limit 1"; 
    
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
	<title> Formulário de login</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<div class = "container">
		<form method="POST" action="#">
			<div class = "form-input">
				<input type = "text" name = "username" placeholder = "Digite o nome de usuário" />
			</div>

			<div class = "form-input">
				<input type = "password" name = "password" placeholder = "Digite a sua senha" />
			</div>
	<input type ="submit" name ="submit" value ="LOGIN" class ="btn-login" />
		</form>
	</div>
	</body>
</html>