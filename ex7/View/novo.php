
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Criar contato</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Bootstrap --><!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="container">

        <div class="page-header">
            <h1>Agenda <small>Exercício 6 Prog Web</small></h1>
        </div>

        <div class="btn-group btn-group-justified" role="group">
            <a class="btn btn-default" href="../View/index.php">Início</a>
            <a class="btn btn-primary active" href="../Controller/controle.php?op=novo">Criar contato</a>
            <a class="btn btn-default" href="../Controller/controle.php?op=lista">Listar contatos</a>
            <a class="btn btn-default" href="../Controller/controle.php?op=sair">Sair</a>
        </div>
        <h3 class="center">Criar Contato</h3>


        <form class="form-inline" action="controle.php?op=cadastra" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" placeholder="João" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="jane.doe@example.com" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Cadastrar</button>
        </form>



        <!-- Scripts -->
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

        <script src='https://www.google.com/recaptcha/api.js'></script>

    </body>

</html>


<!-- / Index Page with bootstrap framework Itens -->