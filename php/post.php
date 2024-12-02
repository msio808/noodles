<section class="blog-summary">
    <?php if ($WHERE_AM_I == 'page' && $page->type() !== 'static'): ?>
        <p style="font-size: 0.8rem; padding-top: 0.5rem; display: flex; justify-content: space-between;">
            <span><i class="fi-xwluxl-user-plus-wide"></i> <?php echo $page->user('FirstName') . ' ' . $page->user('LastName')?></span>
            <span><i class="fi-xwluhl-calendar-clock-wide"></i> <?php echo $page->date('jS M Y \─ h:i A'); ?></span>
            <span><i class="fi-cwluhl-clock-wide"></i> <?php echo $page->readingTime(); ?></span>
        </p>
    <?php endif; ?>
    <h1><?php echo $page->title(); ?></h1>
    
    <div class="post">
        <?php echo $page->content(); ?>

        <?php if ($WHERE_AM_I == 'page' && $page->type() !== 'static'): ?>
            <p>
                <i class="fi-xwluxl-new-folder-wide"></i> <strong>CATEGORY:</strong> 
                <a href="/category/<?php echo $page->categoryKey(); ?>"><?php echo $page->category(); ?></a>
            </p>
            <p>
                <i class="fi-xwluxl-label-wide"></i> <strong>TAGS:</strong>
                <?php foreach($page->tags(true) as $tagKey => $tagName): ?>
                    <a href="<?php echo DOMAIN_TAGS . $tagKey; ?>" rel="tag"><?php echo '#'.$tagName; ?></a>
                <?php endforeach; ?>
            </p>
            <?php Theme::plugins('pageEnd'); ?>
        <?php endif; ?>
    </div>
</section>
