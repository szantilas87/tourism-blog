<?php get_header(); ?>
<section class="page-title">
    <div class="container">
        <h1><?php the_archive_title(); ?></h1>
        <h2><?php 
            if(is_year()){
                ?>You're viewing a year archive.<?php
            }else if(is_month()){
                ?>You're viewing a month archive.<?php
            } else if(is_day()){
                ?>You're viewing a day archive.<?php
            }
        ?></h2>
    </div>
</section>
<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col-md-9 posts-container">
                <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        get_template_part('partials/post/content-excerpt');
                    }
                }
                ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <div class="row">
            <?php 
                next_posts_link('&larr; Older');
                previous_posts_link('Newer &rarr;');
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
