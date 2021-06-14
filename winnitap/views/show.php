<?php require __DIR__ . '/includes/header.inc.php'; ?>
<!-- content start -->
<!-- wrapper start-->
<div id="wrapper">
    <h1><?=e($title) ?></h1>

    <!-- Beer Container Start -->
    <div id="beer_container">

        <div class="row">

            <div class="col-left">
                <img class="beer_img" src="/images/<?=e($beer['image'])?>" height="400px" />
            </div>

            <div class="col-right">
                <div class="item"><strong>Brewery</strong><br /><?=e($beer['brewery']) ?></div>
                <div class="item"><strong>Description</strong><br /><?=e($beer['description']) ?></div>
                <div class="item"><strong>Type</strong><br /><?=e($beer['type']) ?></div>
                <div class="item"><strong>Alcohol Percentage</strong><br /><?=e($beer['alcohol_percentage']) ?>% alc.
                </div>
                <div class="item">
                    <?php if($beer['gluten_free'] === '0') : ?>
                    <strong>Gluten Free</strong><br />No
                    <?php else : ?>
                    <strong>Gluten Free</strong><br />Yes
                    <?php endif; ?>
                </div>
                <div class="item"><strong>Price</strong><br />$<?=e($beer['price']) ?></div>
                <div class="item"><strong>Amount</strong><br /><?=e($beer['amount']) ?>ml</div>
                <div class="item"><strong>Container Type</strong><br /><?=e($beer['container_type']) ?></div>
            </div>

        </div>
        <!-- /.row -->

        <?php if($_SESSION['logged_in']) : ?>
        <div class="review">

            <div class="col-top">
                <h2 class="sm-heading">Leave a Review!</h2>
                <form action="/?page=handle_review&brewery_id=<?=e($brewery_id) ?>" method="post">

                    <label>Title</label><br />
                    <input type="text" name="title" placeholder="Title goes here"
                        value="<?=e($posts['title'] ?? '') ?>" />
                    <?=eMessage('title', $errors)?><br />

                    <label>Review</label><br />
                    <textarea type="text" name="review" placeholder="Review goes here" cols="70" rows="10">
                        <?=e($posts['review'] ?? '') ?>
                    </textarea>
                    <?=eMessage('review', $errors)?><br />

                    <label>Review</label><br />
                    <select name="rating">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <br />

                    <button type="submit">Submit</button>

                </form>
            </div>
            <?php else : ?>
            <p class="login"><a href="/?page=login">Log in to leave a review!</a></p>

            <?php endif; ?>
            <!-- /.col-top -->

            <div class="col-bottom">

                <h2 class="sm-heading">Other Reviews</h2>

                <div class="review_content">
                    <?php foreach($reviews as $review) : ?>

                    <div class="review_title">
                        <strong><?=e($review['title']) ?></strong>
                    </div>

                    <div class="description"><?=e($review['description']) ?></div>

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
                    </div><br />

                    <?php endforeach; ?>
                </div>

            </div>
            <!-- /.col-bottom -->
        </div>
        <!-- /.row -->
    </div>
    <!-- Beer Container End -->

</div>
<!-- wrapper end -->
<!-- content end -->

</body>

</html>