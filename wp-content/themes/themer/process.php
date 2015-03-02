
<!-- PROCESS SECTION -->
<div class="container">
    <div class="row">
        <h2><?php the_title(); ?></h2>
    <!--    CUSTOM POST LOOP-->
    <!--    pulls process custom post types     -->
        <?php
            //get the event custom post types
            $type = 'processes';
            $args = array(
                'post_type'        => $type,
                'post_status'      => 'publish',
                'order'            => 'ASC',
                'orderby'          => 'title',
                'posts_per_page'   => -1
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            $loopCount = 0;
            if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
            ?>
    <!--      CLEARFIX LOOP FOR BOOTSTRAP COLUMNS
              applies clearfix after every 2 posts for fixing  mobile positioning
    -->
            <?php if ($loopCount >= 2): $loopCount =0; ?>
                <div class="clearfix visible-sm-block"></div>
            <?php endif; ?>
            <section id="<?php echo $post -> post_name; ?>">
            <div class="col-sm-6 col-md-3 dataItems">
                <?php the_post_thumbnail('small', array('style' => 'float: left; margin-right: 20px;')); ?>
                <h3><?php echo $post -> post_name; ?></h3>
                <div class="content">
                    <?php the_content(); ?>
                </div>
                    <?php echo types_render_field('desc2', array('output' => 'raw')); ?>
            </div>
            </section>
        <?php $loopCount++; endwhile; endif; wp_reset_postdata(); ?>

    </div>
    <div class="row">
        <div class="col-sm-2 col-md-2 col-sm-offset-4 col-md-offset-9">
            <a href="#contact" class="contact-btn">Contact Us</a>
        </div>
    </div>
</div>
