        <!-- scripts -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.fitvids.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/readingTime.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/highlight.pack.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/santiagum.js"></script>
        <script>
            $(document).ready(function() {
                santiagum.init();
            });
            
            <?php if(ot_get_option('site_google_analytics')) : ?>
            /* Analytics */
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', '<?php echo ot_get_option('site_google_analytics'); ?>', '<?php echo $_SERVER['SERVER_NAME']; ?>');
            ga('send', 'pageview');
            <?php endif; ?>
        </script>
        <!-- /scripts -->
        
        <!-- wp footer -->
        <?php wp_footer(); ?>
        <!-- /wp footer -->
    </body>
</html>