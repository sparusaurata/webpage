<?php

// Prevents from loading this file directly.
if( !defined("STARTED") ) { die("<h1>Access denied</h1>"); }

?>

<!DOCTYPE html>
<html lang="<?php echo $pagedata['language']; ?>">

    <head>
        <title><?php print_page_title(); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.9;">
        <?php print_more_metas(); ?>
        <?php load_favicon(); ?>

        <?php load_layout(); ?>

        <?php load_javascript(); ?>
    </head>


    <body>

        <div id="left"></div>

        <div id="middle">

            <?php print_lang_menu(); ?>

            <?php print_header(); ?>

            <?php print_main_menu(); ?>

            <div id="content">
