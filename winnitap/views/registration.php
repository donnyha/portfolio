<?php

require __DIR__ . '/includes/header.inc.php';


?><h1 id="title"><?=$title?><h1>

        <div id="form">

            <form action="/?page=handle_registration" method="post" novalidate autocomplete="off">

                <div class="container">

                    <div class="container_left">

                        <!-- First Name -->
                        <p>
                            <label for="first_name">First Name</label><br />
                            <input id="first_name" name="first_name" type="text"
                                value="<?=e($posts['first_name'] ?? '') ?>" />
                            <?=eMessage('first_name', $errors)?>
                        </p>

                        <!-- Last Name -->
                        <p>
                            <label for="last_name">Last Name</label><br />
                            <input id="last_name" name="last_name" type="text"
                                value="<?=e($posts['last_name'] ?? '') ?>" />
                            <?=eMessage('last_name', $errors)?>
                        </p>

                        <!-- Username -->
                        <p>
                            <label for="username">Username</label><br />
                            <input id="username" name="username" type="text"
                                value="<?=e($posts['username'] ?? '') ?>" />
                            <?=eMessage('username', $errors)?>
                        </p>

                        <!-- Email -->
                        <p>
                            <label for="email">Email</label><br />
                            <input id="email" name="email" type="text" value="<?=e($posts['email'] ?? '') ?>" />
                            <?=eMessage('email', $errors)?>
                        </p>

                        <!-- Phone Number -->
                        <p>
                            <label for="phone">Phone Number</label><br />
                            <input id="phone" name="phone" type="text" value="<?=e($posts['phone'] ?? '') ?>" />
                            <?=eMessage('phone', $errors)?>
                        </p>

                    </div>
                    <!-- /.container_left -->

                    <div class="container_right">

                        <!-- Street -->
                        <p>
                            <label for="street">Street Address</label><br />
                            <input id="street" name="street" type="text" value="<?=e($posts['street'] ?? '') ?>" />
                            <?=eMessage('street', $errors)?>
                        </p>

                        <!-- City -->
                        <p>
                            <label for="city">City</label><br />
                            <input id="city" name="city" type="text" value="<?=e($posts['city'] ?? '') ?>" />
                            <?=eMessage('city', $errors)?>
                        </p>

                        <!-- Postal Code -->
                        <p>
                            <label for="postal_code">Postal Code</label><br />
                            <input id="postal_code" name="postal_code" type="text"
                                value="<?=e($posts['postal_code'] ?? '') ?>" />
                            <?=eMessage('postal_code', $errors)?>
                        </p>

                        <!-- Province -->
                        <p>
                            <label for="province">Province</label><br />
                            <input id="province" name="province" type="text"
                                value="<?=e($posts['province'] ?? '') ?>" />
                            <?=eMessage('province', $errors)?>
                        </p>

                        <!-- Country -->
                        <p>
                            <label for="country">Country</label><br />
                            <input id="country" name="country" type="text" value="<?=e($posts['country'] ?? '') ?>" />
                            <?=eMessage('country', $errors)?>
                        </p>

                        <!-- Password -->
                        <p>
                            <label for="password">Password</label><br />
                            <input id="password" name="password" type="password" value="" />
                            <?=eMessage('password', $errors)?>
                        </p>

                        <!-- Password Confirmation -->
                        <p>
                            <label for="password_confirm">Password Confirmation</label><br />
                            <input id="password_confirm" name="password_confirm" type="password" value="" />
                        </p>

                        <p><button type="submit">Submit</button></p>

                    </div>
                    <!-- /.container_left -->

                </div>
                <!-- /.container -->

            </form>
            <!-- End Form -->

        </div>
        <!-- /.form -->
        </body>

        </html>