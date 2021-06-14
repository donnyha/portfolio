<?php require __DIR__ . '/includes/header.inc.php';?>
<!-- content start -->
<!-- wrapper start-->
<div id="wrapper">
    <h1>Made by Manitobans <br /> For Manitobans</h1>

    <div class="top_container">
        <!-- brewery -->
        <div class="category">
            <ul>
                <li><a href="/?page=beer">All</a></li>
                <?php foreach($breweries as $brewery) : ?>
                <li>
                    <a href="/?page=beer&breweries=<?=e($brewery['slug']) ?>">
                        <?=e($brewery['name']) ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- search -->
        <div class="search">
            <form action="/?page=search" method="post">
                <input type="text" name="search" placeholder="search" />
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    <!-- /.top_container -->

    <!-- Beer Container Start -->
    <div id="beer_container">

        <!-- Trans Canada Beer-->
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
        </div>
        <?php endforeach; ?>

    </div>
    <!-- Beer Container End -->

</div>
<!-- wrapper end -->
<!-- content end -->

</body>

</html>