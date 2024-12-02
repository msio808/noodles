<body>
<?php Theme::plugins('siteBodyBegin'); ?>
    <header>
        <?php
        if ($WHERE_AM_I == 'home' || $page->type() === 'static') { ?>
            <img src="<?php echo $site->logo(); ?>" alt="Avatar">
        <?php } ?>
        <h1><?php echo $site->title(); ?></h1>
        <div class="navbar">
            <span><a href="<?php echo $site->url() ?>/">HOME</a></span>
            <span><a href="<?php echo $site->url() ?>/about/">ABOUT</a></span>
            <span><a href="<?php echo $site->url() ?>/contact/">CONTACT</a></span>
        </div>
    </header>
