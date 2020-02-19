<link rel="stylesheet" href="css/bootstrap.min.css"/>
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
                                </li>
                            </li>';
                    ?>
                </ul>
            </div>
        </nav>
        </header>
<?php
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $telefone=$_POST["telefone"];
    $data=$_POST["data"];
    $hora=$_POST["hora"];
    $var=false;
    if(!file_exists("agendamentos.xml"))
    {
            $xml=
        '<?xml version="1.0" encoding="UTF-8"?>
        <clientes>
            <cliente>
                <nome>'.$nome.'</nome>
                <email>'.$email.'</email>
                <telefone>'.$telefone.'</telefone>
                <data>'.$data.'</data>
                <hora>'.$hora.'</hora>
            </cliente>
        </clientes>';
            file_put_contents("agendamentos.xml", $xml);
            echo'<h1>ajendado com sucesso</h1>';
    }
    else
    {
        $xml=simplexml_load_file("agendamentos.xml");
        foreach($xml->cliente as $cliente)
        {
            if($cliente->data==$data && $cliente->hora==$hora)
            {
                $var=true;
            }
        }
        if($var==true)
        {
            echo'<center> <h2>Agende em outro horario.</h2> </center>';
        }
        if($var==false)
        {
            $cliente=$xml->addchild("cliente");
            $cliente->addchild("nome", $nome);
            $cliente->addchild("email", $email);
            $cliente->addchild("telefone", $telefone);
            $cliente->addchild("data", $data);
            $cliente->addchild("hora", $hora);
            file_put_contents("agendamentos.xml" , $xml->asXML());
            echo'<center> <h2>Agendado com sucesso!</h2> </center>';
        }
    }
   
?>

<h5><a href="form_agendamento.php">Voltar</a></h2>
<h5> <a href="lista_agendamento.php">Lista de Agendamento</a></h5>


