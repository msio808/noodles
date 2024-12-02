    <footer style="text-align: center; bottom: 0; padding: 0;">
        <p>Follow my socials</p>
        <div>
            <?php foreach ( Theme::socialNetworks() as $key) : ?>
                <a href="<?php echo $site->{$key}(); ?>" target="_blank"><i class="fa-brands fa-<?php echo strtolower($key); ?>"></i></a>
            <?php endforeach; ?>
        </div>
        <p><?php echo $site->footer(); ?></p>
    </footer>


<?php
    Theme::plugins('siteBodyEnd');
    echo Theme::js('assets/js/prism.js');
    echo Theme::js('assets/js/friconix.js');
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>