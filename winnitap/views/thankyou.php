<?php

require __DIR__ . '/includes/header.inc.php';

?><div id="wrapper">
    <h1><?=$title ?></h1>

    <div class="user_information">

        <h2>Here is your information</h2>

        <div class="container">

            <div class="container_left">
                <ul>
                    <!-- First Name -->
                    <li><strong>First Name: </strong><?=e($new_user['first_name'])?></li>

                    <!-- Last Name -->
                    <li><strong>Last Name: </strong><?=e($new_user['last_name'])?></li>

                    <!-- Username -->
                    <li><strong>Username: </strong><?=e($new_user['username'])?></li>

                    <!-- Email -->
                    <li><strong>Email: </strong><?=e($new_user['email'])?></li>

                    <!-- Phone Number -->
                    <li><strong>Phone Number: </strong><?=e($new_user['phone'])?></li>
                </ul>
            </div>

            <div class="container_right">
                <ul>
                    <!-- Street Address -->
                    <li><strong>Street Address: </strong><?=e($new_user['street'])?></li>

                    <!-- City -->
                    <li><strong>City: </strong><?=e($new_user['city'])?></li>

                    <!-- Postal Code -->
                    <li><strong>Postal Code: </strong><?=e($new_user['postal_code'])?></li>

                    <!-- Province -->
                    <li><strong>Province: </strong><?=e($new_user['province'])?></li>

                    <!-- Country -->
                    <li><strong>Country: </strong><?=e($new_user['country'])?></li>

                </ul>
            </div>

        </div>

    </div>
    <!-- /.user_information -->

</div>
<!-- /wrapper -->
</body>

</html>