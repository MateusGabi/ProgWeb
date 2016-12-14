<?php

if (!isset($_GET['pagina'])) {
    include_once(__DIR__ . "/view/index.php");
} else {

    $page = "error.php";

    switch ($_GET['pagina']) {
        case "conta/novo":
            $page = "novo.php";
            break;
        case "contato/lista":
            $page = "lista.php";
            break;
    }

    include_once(__DIR__ . "/view/" . $page);
}

