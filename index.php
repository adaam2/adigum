<?php get_header(); ?>
            
            <?php include('teaser.php'); ?>
            
            <!-- content -->
            <main class="content" role="main">
                <?php
                    $sticky = get_option('sticky_posts');
                    rsort($sticky);
                    $sticky = array_slice($sticky, 0, 5);
                    
                    query_posts(array('post__in' => $sticky));
                    
                    if(have_posts()) :
                ?>
                <h5 class="index-headline featured"><span>Featured Posts</span></h5>
                
                <div class="container featured">
                    <?php while(have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?> role="article">
                        <div class="article-item">
                            <header class="post-header">
                                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </header>
                            
                            <section class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </section>
                            
                            <div class="post-meta">
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time> on <?php the_category(', ') ?>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
                <?php endif; ?>
                
                <h5 class="index-headline normal"><span>Latest Posts</span></h5>
                
                <?php include('loop.php'); ?>
            </main>
            <!-- /content -->
            
            <!-- footer -->
            <footer class="site-footer">
                <a class="subscribe icon-feed" href="<?php bloginfo('rss2_url'); ?>"><span class="tooltip"> Subscribe!</span></a><br><br>
                
                <div class="inner">
                    <section class="copyright">All content copyright <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &copy; <?php echo date('Y'); ?> &bull; Some rights reserved.</section>
                    <section class="poweredby">Proudly powered by <a href="http://wordpress.org" rel="external"> WordPress</a> & <a href="http://juanpablob.com/santiagum/" rel="external">Santiagum Theme</a>.</section>
                </div>
            </footer>
            <!-- /footer -->
        </div>
        <!-- /wrapper -->
            
<?php get_footer();?>