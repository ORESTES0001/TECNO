<!DOCTYPE html>
<html lang="SITE_LANG">

<head>
    <title><?php echo $data['page_name']; ?></title>
    <link href="<?= CSS ?>/nprogress.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css individuales-->
    
    <link rel="stylesheet" href="<?php echo CSS ."/".  $data['function_css']; ?>">
    <link rel="stylesheet" href="<?php echo CSS ?>/nav1.css">
       <link href="<?= PLUGINS ?>/noty/noty.css" rel="stylesheet">

    <title> <?php print_r($data['page_name'])  ?> </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://trello.com/1/cards/637311aad13bfd00b4a5f90c/attachments/63747c1af7e44803278219e1/download/Recurso_5-8.png">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.css"/>
    <!-- Mis estilos -->

</head>


                    <?php
                    include_once "nav.php";
                    ?>