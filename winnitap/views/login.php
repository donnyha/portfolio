<?php

require __DIR__ . '/includes/header.inc.php';

?><div id="wrapper">
    <h1>login</h1>

    <div class="container">

        <div class="user_info">

            <form action="/?page=process_login" method="post" novalidate autocomplete="off">
                <!-- flash message -->
                <?php require __DIR__ . '/../App/Lib/flash.php'; ?>

                <!-- error messages -->
                <?php require __DIR__ . '/../App/Lib/errors.php' ?>

                <div class="row" id="username">
                    <label for="username">USERNAME</label>
                    <input type="text" name="username" id="username" value="<?=e($posts['username'] ?? '')  ?>">
                </div>

                <div class="row">
                    <label for="password">PASSWORD</label>
                    <input type="password" id="password" name="password">
                </div>

                <div class="row" id="submit">
                    <button type="submit">SIGN IN</button>
                </div>
            </form>

        </div>

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