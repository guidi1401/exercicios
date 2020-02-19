<!DOOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Barbearia IFSP - Lista</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="#"/>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php  
                    echo'<li class="nav-item active">
                            <a class="nav-link" href="form_agendamento.php"> Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lista_agendamento.php">Lista de Agendamentos</a>
                        </li>';
                    ?>
                </ul>
            </div>
        </nav>
        </header>
        <p> <h5 class="text-center">Confira a lista de agendamentos:</h5> </p>
        <p>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" style="width:500px; height:300px; margin-left:700px;">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $xml=simplexml_load_file("agendamentos.xml");

                            foreach($xml->cliente as $clientes)
                            {
                                echo'<tr>
                                    <td>'.$clientes->nome.'</td>
                                    <td>'.$clientes->data.'</td>
                                    <td>'.$clientes->hora.'</td>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </p>
    </body>
</html>
