
<div class="row">
    <h2><?php the_title(); ?></h2>
    <?php
        $args = array(
            'post_type' => 'data_models',
            'posts_per_page' => -1
        );
        $loop = new WP_Query( $args );
        $loopItr = 0;


        if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post();
    ?>

            <?php if ($loopItr >= 3): $loopItr = 0; ?>
            </div>
            <div class="row">
            <?php endif; ?>
<!--            --><?php //if ($loopCount >= 2): $loopCount = 0; ?>
<!--                <div class="clearfix visible-sm-block"></div>-->
<!--            --><?php //endif; ?>

            <div class="col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-0">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
    <?php $loopItr++; endwhile; endif; ?>
</div>