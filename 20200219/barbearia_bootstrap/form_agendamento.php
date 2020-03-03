
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
				
                <p> <h5 class="text-center">Faça seu agendamento:</h5> </p>
			</header>
			<form action="recebe_agendamento.php" method="POST" class="form">
				<div class="form-group">
					<div class="input-group" style="font-weight: bold;">
						<label>Nome: </label>
                        <input type="name" name="nome" id="nome" placeholder="Nome..." class="form-control"/>
					</div>
			    </div>
				<div class="form-group">
					<div class="input-group" style="font-weight: bold;" >
                    <label>Email:</label>
                        <input type="email" name="email" id="email" placeholder="Email..." class="form-control"/>
					</div>
				</div>
                <div class="form-group">
					<div class="input-group" style="font-weight: bold;">
                    <label>Telefone:</label>
                        <input type="number" name="telefone" id="telefone" placeholder="Telefone..." class="form-control"/>
					</div>
				</div>
                <div class="form-group">
					<div class="input-group" style="font-weight: bold;">
                    <label>Data:</label>
                        <input type="date" name="data" id="data" placeholder="Data..." class="form-control"/>
					</div>
				</div>
                <div class="form-group">
					<div class="input-group" style="font-weight: bold;">
                    <label>Hora:</label>
                        <input type="time" name="hora" id="hora" placeholder="Hora..." class="form-control"/>
					</div>
				</div>
				<footer>
					<div class="float-right">
						<button type="submit" class="btn btn-danger">Agendar</button>
					</div>
				</footer>
			</form>
		</div>
    </body>
</html>
