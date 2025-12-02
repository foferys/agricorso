<?php get_header(); 

get_header();

$current_language = pll_current_language();

?>


<div class="articoloCover">

    <?php the_post_thumbnail(); ?>
    <h2 class="singlePostTitolo"><?php the_title(); ?></h2>
</div>
<!-- 
<?php
  
    if(has_category('blog')){
        ?>
        <div id="videoTitles">
            <p>Media</p>
            <h2 style="text-transform: uppercase;"><?php the_title(); ?></h2>
        </div>

        <?php
    }else{
        ?>
        <div id="videoTitles">
            <?php
            if($current_language == "it"){
                ?>
                 <p>Lirica</p>
                <h2 style="text-transform: uppercase;"><?php the_title(); ?></h2>
                <?php                
            }
            if($current_language == "en"){
                ?>
                 <p>Lirics</p>
                <h2 style="text-transform: uppercase;"><?php the_title(); ?></h2>
                <?php                
            }
            ?>
        </div>

        <?php
    }
?> -->


<div id="primary" class="content-area aligncenter">
    <main id="main" class="site-main">
        <?php
        // Ottieni l'ID della categoria "Media"
        $media_category_id = get_cat_ID('Media');

        // Ottieni i post della categoria "Media"
        $media_posts = new WP_Query(array(
            'cat' => $media_category_id,
            'posts_per_page' => -1, // Mostra tutti i post della categoria
        ));

        // Array degli ID dei post della categoria "Media"
        $media_post_ids = wp_list_pluck($media_posts->posts, 'ID');

        // Ripristina la query originale
        wp_reset_postdata();



        while (have_posts()) :
            // the_post_thumbnail();
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
            <div class="navigation">
                <?php
                // Ottieni l'ID del post corrente
                $current_post_id = get_the_ID();

                // Verifica se il post precedente è della categoria "Media"
                $previous_post_id = get_previous_post($media_post_ids);
                if ($previous_post_id) :
                ?>
                    <div class="alignleft text-secondary"><?php previous_post_link('&laquo; %link', 'Previous', true, '', 'category'); ?></div>
                <?php endif; ?>

                <?php
                // Verifica se il post successivo è della categoria "Media"
                $next_post_id = get_next_post($media_post_ids);
                if ($next_post_id) :
                ?>
                    <div class="alignright text-secondary"><?php next_post_link('%link &raquo;', 'Next', true, '', 'category'); ?></div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </main><!-- #main -->
</div><!-- #primary -->
<br><br><br>




<?php get_footer(); ?>
