<!--
- Theme: Noodles
- Author: Muhammed A.
- Website: https://msio.me
- GitHub: https://github.com/msio808
-->
<?php
include(THEME_DIR_PHP.'head.php');
    include(THEME_DIR_PHP.'header.php');
?>

    <main>
        <?php
        $slug = $page->slug();
        if ($WHERE_AM_I == 'page') {
            include(THEME_DIR_PHP . 'post.php');
        }
        else {
            include(THEME_DIR_PHP . 'home.php');
        }
        ?>
    </main>

<?php include(THEME_DIR_PHP.'footer.php'); ?>
