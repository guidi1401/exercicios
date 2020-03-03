<!DOOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Barbearia IFSP</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php  
                            echo'<li class="nav-item active">
                                <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="form_agendamento.php">agendar</a>
                                </li>
								<li class="nav-item">
                                <a class="nav-link" href="lista_agendamento.php">lista</a>
                                </li>
                            </li>';
                        ?>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="login-form col-xs-10 offset-xs-1 
			col-sm-6 offset-sm-3 col-md-4 offset-md-4" >
			<header>
				<p> <h2 class="text-center">Bem-vindo à Barbearia IFSP!</h2> </p>
                
			</header>
		</div>
    </body>
</html>
