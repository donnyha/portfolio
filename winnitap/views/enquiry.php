<?php

require __DIR__ . '/includes/header.inc.php';

?>
<!-- content start -->
<!-- wrapper start-->
<div id="wrapper">
    <h1>Are you a local brewery?</h1>

    <div id="container">

        <div class="glass">
            <h2>Send us your info!</h2>
            <?php require __DIR__ . '/../App/Lib/flash.php'; ?>

            <!-- Form Start-->
            <form id="contact_form" action="/?page=handle_enquiry" method="post" novalidate>

                <div class="container">

                    <div class="container_left">

                        <!-- First Name -->
                        <p class="item">
                            <label for="first_name">First Name:</label><br />
                            <input type="text" id="first_name" name="first_name"
                                value="<?=e($posts['first_name'] ?? '') ?>">
                            <?=eMessage('first_name', $errors)?>
                        </p>

                        <!-- Last Name -->
                        <p class="item">
                            <label form="last_name">Last Name:</label><br />
                            <input type="text" id="last_name" name="last_name"
                                value="<?=e($posts['last_name'] ?? '') ?>">
                            <?=eMessage('last_name', $errors)?>
                        </p>

                        <!-- Email -->
                        <p class="item">
                            <label form="email">Email:</label><br />
                            <input type="text" id="email" name="email" value="<?=e($posts['email'] ?? '') ?>">
                            <?=eMessage('email', $errors)?>
                        </p>

                    </div>
                    <!-- /.container left -->

                    <div class="container_right">

                        <!-- Brewery Name -->
                        <p class="item">
                            <label for="brewery_name">Brewery Name:</label><br />
                            <input type="text" id="brewery_name" name="brewery_name"
                                value="<?=e($posts['brewery_name'] ?? '') ?>">
                            <?=eMessage('brewery_name', $errors)?>
                        </p>

                        <!-- Brewery URL-->
                        <p class="item">
                            <label for="brewery_url">URL:</label><br />
                            <input type="text" id="brewery_url" name="brewery_url"
                                value="<?=e($posts['brewery_url'] ?? '') ?>">
                            <?=eMessage('brewery_url', $errors)?>
                        </p>

                        <!-- Brewery Description -->
                        <p class="item">
                            <label for="description">Description:</label><br />
                            <textarea name="description" id="description" cols="35" rows="7"
                                placeholder="Please provide a brief description about the brewery">
                                <?=e($posts['description'] ?? '') ?>
                            </textarea>
                            <?=eMessage('description', $errors)?>
                        </p>

                        <p class="item">
                            <button type="submit">Submit</button>
                        </p>

                    </div>
                    <!-- /.container right -->

                </div>
                <!-- /.container -->
        </div>
        <!-- /.glass -->

        </form>
        <!-- Form End-->

    </div>
    <!-- /.container -->

</div>
<!-- wrapper end -->
<!-- content end -->

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