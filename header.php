<!DOCTYPE html>
<html lang="<?= isset($this->lang) ? $this->lang : "id" ?>">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="keywords" content="<?= isset($meta['keywords']) ? $meta['keywords'] : ""?>">
    <meta name="author" content="<?= isset($meta['author']) ? $meta['author'] : "" ?>">
    <meta name="generator" content="<?= isset($meta['generator']) ? $meta['generator'] : "" ?>">

    <meta property="og:image" content="https://dhonstudio.com/assets/img/ogimg.jpg">
    <meta name="description" content="<?= isset($meta['description']) ? $meta['description'] : ""?>">

    <link rel="icon" type="image/x-icon" href="https://dhonstudio.com/assets/img/icon.ico">
    <title><?= isset($title) ? $title : "Home" ?></title>

    <?= isset($font) ? implode($font) : ''?>
    <?= isset($css) ? implode($css) : ''?>    

</head>

<body class="<?= isset($body_class) ? $body_class : "" ?>">
    