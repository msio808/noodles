<section class="carousel">
    <div class="cards">
        <?php foreach ($content as $post): ?>
            <div class="card">
                <img src="<?php echo $post->coverImage() ?>" alt="Blog Image">
                <div class="card-content">
                    <h2><?php echo substr($post->title(), 0, 40); ?></h2>
                    <p><?php echo substr($post->description(), 0, 200) . '...'; ?></p>
                    <br>
                    <p><a href="<?php echo $post->permalink() ?>" class="read-more">read more >></a></p>

                    <p style="font-size: 0.75rem; padding-top: 0.5rem; display: flex; justify-content: space-between;">
                        <span><i class="fi-xwluxl-user-plus-wide"></i>
                            <?php echo $page->user('FirstName') . ' ' . $page->user('LastName')?>
                        </span>
                        <span><i class="fi-xwluxl-new-folder-wide"></i>
                            <a href="/category/<?php echo $post->categoryKey()?>"><?php echo $post->category() ?></a>
                        </span>
                        <span><i class="fi-xwluhl-calendar-clock-wide"></i>
                            <?php echo $post->date('jS M Y \── h:i A') ?>
                        </span>
                    </p>

                </div>
            </div>
        <?php endforeach ?>
        
        <div class="pagination">
            <?php if (Paginator::showPrev()): ?>
                <a class="prev-page" href="<?php echo Paginator::previousPageUrl() ?>" >&#9664; Prev</a>
            <?php endif; ?>
                
            <span class="current-page">
                Page <?php echo Paginator::currentPage(); ?> of <?php echo Paginator::numberOfPages(); ?>
            </span>
                
            <?php if (Paginator::showNext()): ?>
                <a class="next-page" href="<?php echo Paginator::nextPageUrl() ?>"> Next &#9658;</a>
            <?php endif; ?>
        </div>
    </div>
</section>