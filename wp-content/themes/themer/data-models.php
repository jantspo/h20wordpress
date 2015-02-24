<!-- DATA MODELS SECTION-->
<div class="container">
    <div class="row">
        <h2><?php the_title(); ?></h2>

        <?php
        //  loop through data model posts and pull information
            $args = array(
                'post_type' => 'data_models',
                'posts_per_page' => -1
            );
            $loop = new WP_Query( $args );
            $loopItr = 0;


            if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post();
        ?>
    <!--If more than 3 posts create new row and reset counter-->
                <?php if ($loopItr >= 3): $loopItr = 0; ?>
                </div>
                <div class="row">
                <?php endif; ?>

                <div class="col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-0 dataItems">
                    <h3><?php the_title(); ?></h3>
                    <div class="content">
                    <?php the_content(); ?>
                    </div>
                </div>
        <?php $loopItr++; endwhile; endif; ?>
    </div>
</div>