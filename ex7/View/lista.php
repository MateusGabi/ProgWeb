<!DOCTYPE html>
<html>
    <head>
        <title>Lista de contatos</title>

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
            <a class="btn btn-default" href="../Controller/controle.php?op=novo">Criar contato</a>
            <a class="btn btn-primary active" href="../Controller/controle.php?op=lista">Listar contatos</a>
            <a class="btn btn-default" href="../Controller/controle.php?op=sair">Sair</a>
        </div>

        <?php
        if (!isset($result)) {
            ?>
        
        <br />
        <div class="alert alert-danger text-center" role="alert"><b>Não há contatos na lista!</b></div>

        <?php
        } else {
            ?>

            <h3>Contatos</h3>
            <table class="table table-striped center">
                <?php
                foreach ($result as $contato) {
                    echo '<tr>';
                    echo "<td>" . $contato->nome . "</td>";
                    echo "<td>" . $contato->email . "</td>";
                    echo '</tr>';
                }
                ?>

            </table>

            <?php
        } // fim do else
        ?>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    </body>
</html>