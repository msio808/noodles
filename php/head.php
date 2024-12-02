<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo Theme::metaTags('title');
        echo Theme::metaTags('description');
    ?>
    <meta name="keywords" content="<?php echo $page->tags(); ?>">
    <meta name="author" content="<?php echo $page->user('FirstName') . ' ' . $page->user('LastName')?>">
    
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $page->title(); ?>">
    <meta property="og:url" content="<?php echo $page->permalink(); ?>">
    <meta property="og:site_name" content="<?php echo $site->title(); ?>">
    <meta property="og:image" content="<?php echo ($page->coverImage() ? $page->coverImage() : $site->logo()); ?>">
    <meta property="og:description" content="<?php echo $page->description(); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <?php
        echo Theme::css('assets/css/prism.css');
        echo Theme::css('assets/css/styles.css');
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="<?php echo $site->logo(); ?>" type="image/png">

    <?php Theme::plugins('siteHead') ?>
</head>
