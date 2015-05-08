            <!-- comments -->
            <section id="comments" class="cf">
                <?php if(have_comments()) : ?>
                <h5 class="index-headline"><span>Show Comments <i class="fa fa-arrow-down"></i></span></h5>
                <?php else : ?>
                <h5 class="index-headline"><span>Leave a comment <i class="fa fa-arrow-down"></i></span></h5>
                <?php endif; ?>

                <div class="comments-wrapper none">
                    <?php if($post->comment_status === 'open') : ?>
                    <?php if(have_comments()) : ?>
                    <ol class="comment-list">
                        <?php wp_list_comments(array('style' => 'ol', 'avatar_size' => 38, 'max_depth' => 3)); ?>
                    </ol>

                    <hr class="splitter">
                    <?php endif; ?>

                    <?php comment_form(); ?>

                    <?php else : ?>
                    <p>Comments for this post are closed.</p>
                    <?php endif; ?>

                    <?php
                    paginate_comments_links();
                    ?>
                </div>
            </section>
            <!-- /comments -->

            <?php if(is_singular()) wp_enqueue_script('comment-reply'); ?>