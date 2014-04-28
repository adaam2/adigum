<?php
    get_header();
    
    if(ot_get_option('site_coverphoto')) {
        $cover = ot_get_option('site_coverphoto');
    }
    else {
        $cover = get_stylesheet_directory_uri() . '/assets/img/santiagum-cover.jpg';
    }
    
    if(ot_get_option('site_logo')) {
        $logo = ot_get_option('site_logo');
    }
    else {
        $logo = get_stylesheet_directory_uri() . '/assets/img/santiagum-logo.png';
    }
?>
        
        <!-- teaser image -->
        <div class="teaserimage">
            <div class="teaserimage-image" style="background-image: url(<?php echo $cover; ?>);"></div>
        </div>
        <!-- /teaser image -->
        
        <!-- header -->
        <header class="blog-header">
            <a class="blog-logo" href="<?php bloginfo('url'); ?>" style="background-image: url(<?php echo $logo; ?>);"><?php bloginfo('name'); ?></a>
            
            <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
            <h2 class="blog-description"><?php bloginfo('description'); ?></h2>
            
            <div class="custom-links">
                <?php if(ot_get_option('site_in_url')) : ?>
                <a href="<?php echo ot_get_option('site_in_url'); ?>" rel="external"><i class="fa fa-linkedin"></i><span class="none">Linkedin</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_fb_url')) : ?>
                <a href="<?php echo ot_get_option('site_fb_url'); ?>" rel="external"><i class="fa fa-facebook"></i><span class="none">Facebook</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_tw_url')) : ?>
                <a href="<?php echo ot_get_option('site_tw_url'); ?>" rel="external"><i class="fa fa-twitter"></i><span class="none">Twitter</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_gg_url')) : ?>
                <a href="<?php echo ot_get_option('site_gg_url'); ?>" rel="external"><i class="fa fa-google-plus"></i><span class="none">Google</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_tb_url')) : ?>
                <a href="<?php echo ot_get_option('site_tb_url'); ?>" rel="external"><i class="fa fa-tumblr"></i><span class="none">Tumblr</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_4s_url')) : ?>
                <a href="<?php echo ot_get_option('site_4s_url'); ?>" rel="external"><i class="fa fa-foursquare"></i><span class="none">Foursquare</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_ig_url')) : ?>
                <a href="<?php echo ot_get_option('site_ig_url'); ?>" rel="external"><i class="fa fa-instagram"></i><span class="none">Instagram</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_fr_url')) : ?>
                <a href="<?php echo ot_get_option('site_fr_url'); ?>" rel="external"><i class="fa fa-flickr"></i><span class="none">Flickr</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_yt_url')) : ?>
                <a href="<?php echo ot_get_option('site_yt_url'); ?>" rel="external"><i class="fa fa-youtube"></i><span class="none">YouTube</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_fm_url')) : ?>
                <a href="<?php echo ot_get_option('site_fm_url'); ?>" rel="external"><i class="fa fa-music"></i><span class="none">last.fm</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_sc_url')) : ?>
                <a href="<?php echo ot_get_option('site_sc_url'); ?>" rel="external"><i class="fa fa-cloud"></i><span class="none">SoundCloud</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_pr_url')) : ?>
                <a href="<?php echo ot_get_option('site_pr_url'); ?>" rel="external"><i class="fa fa-pinterest"></i><span class="none">Pinterest</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <?php if(ot_get_option('site_db_url')) : ?>
                <a href="<?php echo ot_get_option('site_db_url'); ?>" rel="external"><i class="fa fa-dribbble"></i><span class="none">Dribbble</span></a>&nbsp;&nbsp;
                <?php endif; ?>
                
                <!--<a href="/aboutme/">Sobre mi</a>&nbsp;&nbsp;·&nbsp;&nbsp;
                <a href="/veroffentlichungen/">Trabajos</a>&nbsp;&nbsp;·&nbsp;&nbsp;
                <a href="/alles-ausser-sprachkritik/">Contacto</a>-->
            </div>
        </header>
        <!-- /header -->
        
        <!-- content -->
        <main class="content" role="main">
            <?php
                if(have_posts()) :
            ?>
            <h5 class="index-headline normal"><span>Posts under <?php single_cat_title(); ?></span></h5>
            
            <div class="cf frame">
                <?php while(have_posts()) : the_post(); ?>
                <article class="post" role="article">
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
                <?php endwhile; ?>
            </div>
            <?php endif; wp_reset_query(); ?>
            
            <nav class="pagination" role="navigation">
                <?php previous_posts_link('Newer'); ?>
                &nbsp;&nbsp;·&nbsp;&nbsp;
                <span class="page-number"><?php echo 'Page '.$page.' of '.$numpages.''; ?></span>
                &nbsp;&nbsp;·&nbsp;&nbsp;
                <?php next_posts_link('Older'); ?>
            </nav>
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
        
<?php get_footer();?>