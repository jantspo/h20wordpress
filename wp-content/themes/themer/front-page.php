<?php
    get_header();
?>
    <main role="main">
        <!-- section -->
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <section id="<?php echo $post->post_name; ?>">
                <?php $post->post_name; ?>
                <?php get_template_part($post->post_name); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-sm-offset-4 col-md-offset-10">
                            <button type="button" class="btn btn-default btn-lg"><a href="#contact">Contact Us</a></button>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; endif; ?>
        <!-- /section -->
    </main>

<?php get_footer(); ?>