<?php get_header(); ?>
            
            <?php include('teaser.php'); ?>
            
            <!-- content -->
            <main class="content" role="main">
                <?php if(is_day()) : ?>
                <h5 class="index-headline normal"><span>Daily archive: <?php echo get_the_date(); ?></span></h5>
                <?php elseif(is_month()) : ?>
                <h5 class="index-headline normal"><span>Monthly archive: <?php echo get_the_date(); ?></span></h5>
                <?php elseif(is_year()) : ?>
                <h5 class="index-headline normal"><span>Yearly archive: <?php echo get_the_date(); ?></span></h5>
                <?php elseif(is_category()) : ?>
                <h5 class="index-headline normal"><span>Posts under <?php single_cat_title(); ?></span></h5>
                <?php elseif(is_tag()) : ?>
                <h5 class="index-headline normal"><span>Posts tagged with <?php single_tag_title(); ?></span></h5>
                <?php else : ?>
                <h5 class="index-headline normal"><span>Archive</span></h5>
                <?php endif; ?>
                
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