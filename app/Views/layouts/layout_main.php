<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ivandi Djoh Gah">
    <meta name="generator" content="e-rapat v0.0.1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title><?= $page_title; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/locals/img/transport.svg'); ?>">

    <!-- Metro 4 Base CSS -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <!-- Custom Metro CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/locals/css/custom-metro.css'); ?>">
</head>

<body>

    <?= $this->renderSection("contents"); ?>

    <!-- Metro 4 Base JS-->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>