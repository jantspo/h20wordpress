<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<br class="clear">

    <div class="row">
        <form class="form-inline">
            <div class="form-group">
                <label for="exampleInputName2">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Jane Doe">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="jane.doe@example.com">
            </div>
            <button type="submit" class="btn btn-default">Send invitation</button>
        </form>
    </div>
    <textarea class="form-control" type="text" id="message" rows="3"></textarea>

