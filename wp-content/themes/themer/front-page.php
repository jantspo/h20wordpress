<?php
    get_header();
?>
    <main role="main">
        <!-- section -->
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <section id="<?php echo $post->post_name; ?>">
                <?php $post->post_name; ?>
                <?php get_template_part($post->post_name); ?>



            </section>
        <?php endwhile; endif; ?>
        <!-- /section -->
    </main>

<?php get_footer(); ?>