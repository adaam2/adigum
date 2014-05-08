<?php get_header(); ?>
            
            <?php include('teaser.php'); ?>
            
            <!-- content -->
            <main class="content" role="main">
                <h5 class="index-headline normal"><span>Search results for "<?php echo get_search_query(); ?>"</span></h5>
                
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