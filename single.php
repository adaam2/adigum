<?php
    get_header();

    if(have_posts()) : while(have_posts()) : the_post();

    if(has_post_thumbnail()) {
        $featured_image = w_get_thumbnail_url('large');
    }
    else {
        $featured_image = false;
    }

    if(ot_get_option('site_coverphoto')) {
        $cover = ot_get_option('site_coverphoto');
    }
    else {
        $cover = get_stylesheet_directory_uri() . '/assets/img/santiagum-cover.jpg';
    }
?>
            <?php include('teaser.php'); ?>
            <!-- content -->
            <main class="content" role="main">
                <article class="post<?php if($featured_image) : ?> tag-articleimage<?php endif; ?>">
                    <?php if($featured_image) : ?>
                    <!-- article image -->
                    <div class="article-image">
                        <div class="post-image-image" style="background-image: url(<?php echo $featured_image; ?>);"></div>

                        <div class="post-meta">
                            <h1 class="post-title"><?php the_title(); ?></h1>

                            <div class="cf post-meta-text">
                                <div class="author-image" style="background-image: url(<?php echo w_get_avatar_url(get_the_author_meta('ID'), 30); ?>);"></div>
                                <h4 class="author-name"><?php the_author(); ?></h4> on
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time> on <?php the_category(', ') ?>
                            </div>

                            <center><a href="#topofpage" class="topofpage doscroll"><i class="fa fa-angle-down"></i></a></center>
                        </div>
                    </div>
                    <!-- /article image -->
                    <?php else : ?>
                    <div class="noarticleimage">
                        <div class="post-meta">
                            <h1 class="post-title"><?php the_title(); ?></h1>

                            <div class="cf post-meta-text">
                                <div class="author-image" style="background-image: url(<?php echo w_get_avatar_url(get_the_author_meta('ID'), 30); ?>);"></div>
                                <h4 class="author-name"><?php the_author(); ?></h4> on
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time> on <?php the_category(', ') ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <?php endif; ?>

                    <!-- post content -->
                    <section class="post-content">
                        <div class="post-reading">
                            <span class="post-reading-time"></span> read
                        </div>

                        <div id="topofpage"></div>

                        <?php the_content(); ?>
                    </section>
                    <!-- /post content -->

                    <!-- post footer -->
                    <footer class="post-footer cf">
                        <section class="tags">
                            Tags: <?php the_tags('', ', '); ?>
                        </section>

                        <section class="share">
                            Share this post on
                            <?php
                                if(ot_get_option('site_tw_url')) {
                                    $twitter_username = parse_url(ot_get_option('site_tw_url'));
                                    $twitter_username = $twitter_username['path'];
                                }
                                else {
                                    $twitter_username = false;
                                }

                                if($twitter_username) :
                            ?>
                            <a href="http://twitter.com/intent/tweet?url=<?php echo urldecode(get_permalink($post->ID)); ?>&text=<?php echo urldecode(get_the_title($post->ID)); ?>&hashtags=&via=<?php echo $twitter_username; ?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=290'); return false;"><i class="fa fa-twitter"></i><span class="hidden">Twitter</span></a>
                            <?php else : ?>
                            <a href="http://twitter.com/intent/tweet?url=<?php echo urldecode(get_permalink($post->ID)); ?>&text=<?php echo urldecode(get_the_title($post->ID)); ?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=290'); return false;"><i class="fa fa-twitter"></i><span class="hidden">Twitter</span></a>
                            <?php endif; ?>

                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php get_permalink($post->ID); ?>" onclick="window.open(this.href, 'facebook-share','width=550,height=290'); return false;"><i class="fa fa-facebook"></i><span class="hidden">Facebook</span></a>
                        </section>
                    </footer>
                    <!-- /post footer -->

                    <!-- bottom teaser -->
                    <div class="bottom-teaser cf">
                        <div class="isLeft">
                            <h5 class="index-headline featured"><span>Written by</span></h5>

                            <section class="author">
                                <div class="author-image" style="background-image: url(<?php echo w_get_avatar_url(get_the_author_meta('ID'), 80); ?>);"></div>
                                <h4><?php the_author(); ?></h4>
                                <p class="bio"><?php the_author_meta('description'); ?></p>
                                <hr>
                                <p class="published">Published on <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time></p>
                            </section>
                        </div>

                        <div class="isRight">
                            <h5 class="index-headline featured"><span>Supported by</span></h5>

                            <footer class="site-footer">
                                <section class="poweredby">Proudly powered by <a href="http://wordpress.org/" rel="external"> WordPress</a> & <a href="http://juanpablob.com/santiagum/" rel="external">Santiagum Theme</a></section>

                                <a class="subscribe" href="<?php bloginfo('rss2_url'); ?>"><span class="tooltip">Subscribe to my RSS feed.</span></a>

                                <div class="inner">
                                    <section class="copyright">All content copyright <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &copy; <?php echo date('Y'); ?><br>Some rights reserved.</section>
                                </div>
                            </footer>
                        </div>
                    </div>
                    <!-- /bottom teaser -->
                </article>

                <?php comments_template(); ?>
            </main>
            <!-- /content -->
            <?php endwhile; endif; ?>

            <!-- bottom closer -->
            <div class="bottom-closer">
                <div class="background-closer-image" style="background-image: url(<?php echo $cover; ?>);"></div>

                <div class="inner">
                    <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
                    <h2 class="blog-description"><?php bloginfo('description'); ?></h2>

                    <a href="<?php bloginfo('url'); ?>" class="btn">Back to Home</a>
                </div>
            </div>
            <!-- /bottom closer -->
        </div>
        <!-- /wrapper -->

<?php get_footer();?>