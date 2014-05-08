                <?php
                    if(is_home()) {
                        query_posts(array('post__not_in' => get_option('sticky_posts'), 'paged' => $paged));
                    }
                ?>
                <?php if(have_posts()) : ?>
                <div class="cf frame">
                    <?php while(have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" class="post" role="article">
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
                
                <nav class="pagination" role="navigation">
                    <?php
                        global $wp_query;
                        
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $total_pages = $wp_query->max_num_pages;
                    ?>
                    <?php previous_posts_link('Newer'); ?>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    <span class="page-number"><?php echo 'Page '.$paged.' of '.$total_pages.''; ?></span>
                    &nbsp;&nbsp;·&nbsp;&nbsp;
                    <?php next_posts_link('Older'); ?>
                    <!--<?php wp_link_pages(); ?>-->
                </nav>
                <?php else : ?>
                <p>There's no posts here yet.</p>
                <?php endif; ?>