<?php

require __DIR__ . '/includes/header.inc.php';

?><div id="wrapper">
    <h1>Profile</h1>

    <div class="container">

        <?php require __DIR__ . '/../App/Lib/flash.php'; ?>

        <h2>Hello, <?=e($_SESSION['user']) ?></h2>

        <div class="profile">

            <div class="container_left">
                <ul>
                    <!-- First Name -->
                    <li><strong>First Name: </strong><?=e($current_user['first_name'])?></li>

                    <!-- Last Name -->
                    <li><strong>Last Name: </strong><?=e($current_user['last_name'])?></li>

                    <!-- Username -->
                    <li><strong>Username: </strong><?=e($current_user['username'])?></li>

                    <!-- Email -->
                    <li><strong>Email: </strong><?=e($current_user['email'])?></li>

                    <!-- Phone Number -->
                    <li><strong>Phone Number: </strong><?=e($current_user['phone'])?></li>
                </ul>
            </div>

            <div class="container_right">
                <ul>
                    <!-- Street Address -->
                    <li><strong>Street Address: </strong><?=e($current_user['street'])?></li>

                    <!-- City -->
                    <li><strong>City: </strong><?=e($current_user['city'])?></li>

                    <!-- Postal Code -->
                    <li><strong>Postal Code: </strong><?=e($current_user['postal_code'])?></li>

                    <!-- Province -->
                    <li><strong>Province: </strong><?=e($current_user['province'])?></li>

                    <!-- Country -->
                    <li><strong>Country: </strong><?=e($current_user['country'])?></li>

                </ul>
            </div>

        </div>
        <!-- /.container -->

        <h2>Your Reviews</h2>

        <?php if(empty($reviews)) : ?>
        <h3>You have no reviews</h3>

        <?php else : ?>

        <?php foreach($reviews as $review) : ?>
        <div class="row">

            <div class="col-left">

                <!-- Beer Image -->
                <div class="beer_img"><img src="/images/<?=e($review['image'])?>" height=auto width="100px" /></div>
            </div>



            <div class="col-right">

                <!-- Beer Description -->
                <div class="beer_info">
                    <div class="info_item"><strong><?=e($review['name'])?></strong></div>
                    <div class="info_item"><?=e($review['title']) ?></div>
                    <div id="review_description" class="info_item"><?=e($review['description']) ?></div>
                </div>
            </div>
            <!-- /.col-right -->

            <div class="star_container">
                <!-- Avg Rating -->
                <div class="rating">
                    <?php if($review['star_num'] === '0') : ?>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>

                    <?php elseif($review['star_num'] === '1') : ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>

                    <?php elseif($review['star_num'] === '2') : ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>

                    <?php elseif($review['star_num'] === '3') : ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>

                    <?php elseif($review['star_num'] === '4') : ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>

                    <?php elseif($review['star_num'] === '5') : ?>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <?php endif; ?>
                </div>
                <!-- /.rating -->

                <div class="action">
                    <p class="button"><a href="/?page=edit_review&id=<?=e($review['id']) ?>">Edit</a></p>
                    <p class="button"><a href="/?page=delete_review&id=<?=e($review['id']) ?>">Delete</a></p>
                </div>
            </div>
            <!-- /.star_container -->
        </div>
        <!-- /.row -->

        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <!-- /.container -->

</div>
<!-- /#wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
    integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
    crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    $('.flash').slideDown('slow');
    setTimeout(function() {
        $('.flash').slideUp('slow');
    }, 2000);
});
</script>
</body>

</html>