<?php

require __DIR__ . '/includes/header.inc.php';

?><div id="wrapper">
    <h1>Admin</h1>

    <div class="glass">

        <?php require __DIR__ . '/../App/Lib/flash.php'; ?>

        <div class="aggregate">
            <div class="aggregate_data">
                <div><strong>Total Reviews</strong></div>
                <div><?=e($reviewCount) ?></div>
            </div>

            <div class="aggregate_data">
                <div><strong>Min Beer Price</strong></div>
                <div><?=e($price['min']) ?></div>
            </div>

            <div class="aggregate_data">
                <div><strong>Max Beer Price</strong></div>
                <div><?=e($price['max']) ?></div>
            </div>

            <div class="aggregate_data">
                <div><strong>Avg Beer Price</strong></div>
                <div><?=e($price['avg']) ?></div>
            </div>
        </div>

        <div id="container">



            <div class="tab_buttons">
                <button class="tab" onclick="changeTab('beer_list', this)" id="defaultOpen">
                    Beer
                </button>

                <button class="tab" onclick="changeTab('reviews', this)">
                    Reviews
                </button>

                <button class="tab" onclick="changeTab('users', this)">
                    Users
                </button>

                <button class="tab" onclick="changeTab('log', this)" id="defaultOpen">
                    Log
                </button>
            </div>

            <!-- beer -->
            <div id="beer_list" class="tab_content">

                <!-- inserting new beer -->
                <button type="button" class="collapsible" <?php if($_SESSION['is_redirect']) : ?> id="defaultClick"
                    <?php endif; ?>>Insert New Beer</button>

                <div id="new_beer" class="content">
                    <form action="/?page=create_beer" method="post">

                        <label>Brewery</label><br />
                        <select name="brewery_id">
                            <option value="1">Trans Canada</option>
                            <option value="2">Half Pints</option>
                            <option value="3">Kilter</option>
                            <option value="4">Little Brown Jug</option>
                            <option value="5">Fort Garry</option>
                        </select><br />

                        <label>Name</label><br />
                        <input type="text" name="name" value="<?=e($posts['name'] ?? '') ?>" />
                        <?=eMessage('name', $errors)?><br />

                        <label>Beer Type</label><br />
                        <select name="type">
                            <option value="stout">Stout</option>
                            <option value="IPA">IPA</option>
                            <option value="amber ale">Amber ale</option>
                            <option value="pale ale">Pale ale</option>
                            <option value="specialty ale">Specialty ale</option>
                            <option value="kolsch">Kolsch</option>
                            <option value="lager">Lager</option>
                            <option value="pilsner">Pilsner</option>
                            <option value="seltzer">Seltzer</option>
                            <option value="radler">Radler</option>
                            <option value="european">European</option>
                            <option value="other">Other</option>
                        </select><br />

                        <label>Flavour</label><br />
                        <input type="text" name="flavour" placeholder="e.g. bold"
                            value="<?=e($posts['flavour'] ?? '') ?>" />
                        <?=eMessage('flavour', $errors)?><br />

                        <label>Grain</label><br />
                        <input type="text" name="grain" placeholder="e.g. barley"
                            value="<?=e($posts['grain'] ?? '') ?>" />
                        <?=eMessage('grain', $errors)?><br />

                        <label>Alcohol Percentage</label><br />
                        <input type="text" name="alcohol_percentage" placeholder="e.g. 2.50%"
                            value="<?=e($posts['alcohol_percentage'] ?? '') ?>" />
                        <?=eMessage('alcohol_percentage', $errors)?><br />

                        <label>Image</label><br />
                        <input type="file" name="image" placeholder="file name"
                            value="<?=e($posts['image'] ?? '') ?>" />
                        <?=eMessage('image', $errors)?><br />

                        <label>Description</label><br />
                        <textarea type="text" name="description" placeholder="Description goes here">
                        <?=e($posts['description'] ?? '') ?>
                    </textarea>
                        <?=eMessage('description', $errors)?><br />

                        <label>Gluten Free?</label><br />
                        <select name="gluten_free">
                            <option value="1">Yes</option>
                            <option value="0" selected>No</option>
                        </select><br />

                        <label>Price</label><br />
                        <input type="text" name="price" value="<?=e($posts['price'] ?? '') ?>" />
                        <?=eMessage('price', $errors)?><br />

                        <label>Amount</label><br />
                        <input type="text" name="amount" value="<?=e($posts['amount'] ?? '') ?>" />
                        <?=eMessage('amount', $errors)?><br />

                        <label>Container Type</label><br />
                        <select name="container_type">
                            <option value="can">Can</option>
                            <option value="bottle">Bottle</option>
                            <option value="growler">Growler</option>
                            <option value="keg">Keg</option>
                        </select><br />

                        <button id="submit" type="submit">Submit</button>
                    </form>
                </div>
                <!-- /.content -->

                <!-- beer list view -->
                <button type="button" class="collapsible" <?php if(!$_SESSION['is_redirect']) : ?> id="defaultClick"
                    <?php endif; ?>>Beer
                    List</button>

                <div class="content">

                    <!-- search -->
                    <div class="search">
                        <form action="/?page=search_admin" method="post">
                            <input type="text" name="search" placeholder="search" />
                            <button id="search" type="submit">Search</button>
                        </form>
                    </div>

                    <?php foreach($beers as $beer) : ?>
                    <div class="row">

                        <!-- Beer Image -->
                        <div><img src="/images/<?=e($beer['image'])?>" /></div>

                        <!-- Beer Description -->
                        <div class="beer_info">
                            <div class="beer_name">
                                <a href="/?page=show&id=<?=e($beer['id'])?>">
                                    <strong><?=e($beer['name'])?></strong>
                                </a>
                            </div>

                            <div class="brewery_name"><?=e($beer['brewery']) ?></div>

                            <!-- Alcohol % -->
                            <div class="alcohol"><?=e($beer['alcohol_percentage']) ?>% alc.</div>

                            <!-- tags -->
                            <div class="tags">
                                <span class="tag_item">#<?=e($beer['type']) ?></span>
                                <span class="tag_item">#<?=e($beer['flavour']) ?></span>
                                <span class="tag_item">#<?=e($beer['grain']) ?></span>
                            </div>
                        </div>

                        <?php if($beer['avg_rating']) : ?>
                        <div class="col-far-right">
                            <!-- Avg Rating -->
                            <div class="rating">
                                <?php if($beer['avg_rating'] === 0) : ?>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>

                                <?php elseif($beer['avg_rating'] === 1) : ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>

                                <?php elseif($beer['avg_rating'] === 2) : ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>

                                <?php elseif($beer['avg_rating'] === 3) : ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>

                                <?php elseif($beer['avg_rating'] === 4) : ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>

                                <?php elseif($beer['avg_rating'] === 5) : ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <?php endif; ?>
                            </div>

                            <div class="change">
                                <p class="change-btn"><a href="/?page=edit_beer&id=<?=e($beer['id']) ?>">Edit</a></p>
                                <p class="change-btn"><a href="/?page=delete_beer&id=<?=e($beer['id']) ?>">Delete</a>
                                </p>
                            </div>

                            <?php elseif(!$beer['avg_rating']) : ?>
                            <p>No Reviews yet</p>
                            <div class="change">
                                <p class="change-btn"><a href="/?page=edit_beer&id=<?=e($beer['id']) ?>">Edit</a></p>
                                <p class="change-btn"><a href="/?page=delete_beer&id=<?=e($beer['id']) ?>">Delete</a>
                                </p>
                            </div>

                            <?php endif; ?>

                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <!-- /.content -->

            </div>
            <!-- /.beer_list -->

            <!-- reviews -->
            <div id="reviews" class="tab_content">
                <h2>Reviews</h2>

                <?php foreach($reviews as $review) : ?>
                <div class="row">

                    <div class="col-left">

                        <!-- Beer Image -->
                        <div class="beer_img"><img src="/images/<?=e($review['image'])?>" height=auto width="100px" />
                        </div>
                    </div>
                    <!-- /.col-left -->

                    <div class="col-right">

                        <!-- Beer Description -->
                        <div class="beer_info">
                            <div class="beer_name"><strong><?=e($review['beer_name'])?></strong></div>
                            <div class="review_title"><?=e($review['title']) ?></div>
                            <div class="review_description"><?=e($review['description']) ?></div>
                            <div class="review_username"><?=e($review['username']) ?></div>
                        </div>
                    </div>
                    <!-- /.col-right -->

                    <div class="col-far-right">
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
                        <div class="change">
                            <p class="change-btn">
                                <a href="/?page=edit_review&id=<?=e($review['id']) ?>">Edit</a>
                            </p>
                            <p class="change-btn">
                                <a href="/?page=delete_review&id=<?=e($review['id']) ?>">Delete</a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
                <?php endforeach; ?>
            </div>
            <!-- /.tab_content -->

            <!-- users -->
            <div id="users" class="tab_content">
                <h2>Users</h2>

                <?php foreach($users as $user) : ?>
                <div id="user" class="row">
                    <div class="col-left">
                        <div class="username"><strong>Username: </strong><?=e($user['username']) ?></div>
                        <div class="username"><strong>Email: </strong><?=e($user['email']) ?></div>
                    </div>
                    <div class="col-right">
                        <div class="username"><strong>First Name: </strong><?=e($user['first_name']) ?></div>
                        <div class="username"><strong>Last Name: </strong><?=e($user['last_name']) ?></div>

                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- dashboard -->
            <div id="log" class="tab_content">
                <h2>Log</h2>

                <ul>
                    <li><strong>Date | Request Method | Request Uri | Status | Browser</strong></li>
                    <?php foreach($logs as $log) : ?>
                    <li><?=e($log['event']) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
        <!-- /#container -->

    </div>
    <!-- /.glass -->

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