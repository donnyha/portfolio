<?php

require __DIR__ . '/includes/header.inc.php';

?>
<!-- content start -->
<!-- wrapper start-->
<div id="wrapper">
    <h1>Brewaries around you</h1>
    <div id="map"></div>

    <div class="container">
        <div class="row">
            <?php foreach($breweries as $brewery) : ?>
            <div class="item">
                <h2 class="name"><?=e($brewery['name']) ?></h2>
                <p class="address"><?=e($brewery['street']) ?> <?=e($brewery['postal_code']) ?></p>
                <p class="phone">
                    <?php if($brewery['phone_number'] === NULL) : ?>
                    N/A
                    <?php else : ?>
                    tel: <?=e($brewery['phone_number']) ?>
                    <?php endif; ?>
                </p>
                <div class="opening_container">
                    <ul class="opening_time">
                        <li>
                            <strong>Mon</strong>
                            <?php if($brewery['open_time_mon'] === NULL) : ?>
                            closed
                            <?php else : ?>
                            <?=e($brewery['open_time_mon']) ?> -
                            <?php endif; ?>

                            <?php if($brewery['close_time_mon'] === NULL) : ?>
                            <?php else : ?>
                            <?=e($brewery['close_time_mon']) ?>
                            <?php endif; ?>
                        </li>
                        <li>
                            <strong>Tue</strong>
                            <?php if($brewery['open_time_tue'] === NULL) : ?>
                            closed
                            <?php else : ?>
                            <?=e($brewery['open_time_tue']) ?> -
                            <?php endif; ?>

                            <?php if($brewery['close_time_tue'] === NULL) : ?>
                            <?php else : ?>
                            <?=e($brewery['close_time_tue']) ?>
                            <?php endif; ?>
                        </li>
                        <li>
                            <strong>Wed</strong>
                            <?php if($brewery['open_time_wed'] === NULL) : ?>
                            closed
                            <?php else : ?>
                            <?=e($brewery['open_time_wed']) ?> -
                            <?php endif; ?>

                            <?php if($brewery['close_time_wed'] === NULL) : ?>
                            <?php else : ?>
                            <?=e($brewery['close_time_wed']) ?>
                            <?php endif; ?>
                        </li>
                        <li>
                            <strong>Thu</strong>
                            <?php if($brewery['open_time_thu'] === NULL) : ?>
                            closed
                            <?php else : ?>
                            <?=e($brewery['open_time_thu']) ?> -
                            <?php endif; ?>

                            <?php if($brewery['close_time_thu'] === NULL) : ?>
                            <?php else : ?>
                            <?=e($brewery['close_time_thu']) ?>
                            <?php endif; ?>
                        </li>
                        <li>
                            <strong>Fri</strong>
                            <?php if($brewery['open_time_fri'] === NULL) : ?>
                            closed
                            <?php else : ?>
                            <?=e($brewery['open_time_fri']) ?> -
                            <?php endif; ?>

                            <?php if($brewery['close_time_fri'] === NULL) : ?>
                            <?php else : ?>
                            <?=e($brewery['close_time_fri']) ?>
                            <?php endif; ?>
                        </li>
                        <li>
                            <strong>Sat</strong>
                            <?php if($brewery['open_time_sat'] === NULL) : ?>
                            closed
                            <?php else : ?>
                            <?=e($brewery['open_time_sat']) ?> -
                            <?php endif; ?>

                            <?php if($brewery['close_time_sat'] === NULL) : ?>
                            <?php else : ?>
                            <?=e($brewery['close_time_sat']) ?>
                            <?php endif; ?>
                        </li>
                        <li>
                            <strong>Sun</strong>
                            <?php if($brewery['open_time_sun'] === NULL) : ?>
                            closed
                            <?php else : ?>
                            <?=e($brewery['open_time_sun']) ?> -
                            <?php endif; ?>

                            <?php if($brewery['close_time_sun'] === NULL) : ?>
                            <?php else : ?>
                            <?=e($brewery['close_time_sun']) ?>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <?php endforeach ;?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.wrapper -->

</div>
<!-- wrapper end -->

<!-- Google Map -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3NzljToakmjNY0YncJhz0ygwVsgYYNj8&callback=initMap&libraries=&v=weekly"
    async></script>
<!-- content end -->

</body>

</html>