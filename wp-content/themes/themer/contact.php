<h2><?php the_title(); ?></h2>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <?php the_content(); ?>
    </div>
</div>
<br class="clear">

<div class="row">
    <div class="col-md-11 col-md-offset-1">
        <form class="form-inline">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
        <!--                <label for="InputName1">First Name</label>-->
                        <input type="text" class="form-control" id="inputName1" placeholder="First Name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
        <!--                <label for="InputName2">Last Name</label>-->
                        <input type="email" class="form-control" id="inputName2" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
        <!--                <label for="exampleInputEmail2">Email</label>-->
                        <input type="email" class="form-control" id="inputEmail" placeholder="email@email.com">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2 ">
        <textarea class="form-control" type="text" id="message" rows="5" placeholder="Enter message here..."></textarea>
    </div>
</div>

