<a href="<?php echo esc_url(the_permalink()) ?>" class="bg-black/50 w-[calc(25%-0.75rem)]">
    <div class="">
        <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('false' , ['class' => 'object-cover size-full aspect-video']) ?>
        <?php else: echo "عکسی یافت نشد" ?>
        <?php endif ?>
    </div>

    <div class="flex flex-col items-center justify-start">
        <span><?php  echo esc_html(get_the_title()); ?></span>

    </div>
</a>
