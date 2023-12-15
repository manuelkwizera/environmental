<?php
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $rootUrl = $protocol . "://{$_SERVER['HTTP_HOST']}" . "/". explode('/', $_SERVER['PHP_SELF'])[1];

    $documentRoot = $_SERVER['DOCUMENT_ROOT'];

// Use basename() to get the last component of the path
$rootFolderName = basename($documentRoot);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Genius Environmental Ltd</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>