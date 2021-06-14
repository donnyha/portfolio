<?php

require __DIR__ . '/includes/header.inc.php';

?><!-- content start -->
    <!-- wrapper start-->
    <div id="wrapper">
        <h1>Are you a local brewery?</h1>
        <h2>Send us your info if you want to be featured on our site!</h2>

        <!-- Form Start-->
        <form
            id="contact_form"
            action="http://www.scott-media.com/test/form_display.php"
            method="post"
            autocomplete="on">

            <!-- First Name -->
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required><br />

            <!-- Last Name -->
            <label form="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br />

            <!-- Email -->
            <label form="email">Email:</label>
            <input type="text" id="email" name="email" required><br />

            <!-- Brewery Name -->
            <label for="brewery_name">Brewery Name:</label>
            <input type="text" id="brewery_name" name="brewery_name" required><br />

            <!-- Brewery URL-->
            <label for="brewery_url">URL:</label>
            <input type="text" id="brewery_url" name="brewery_url" required><br />

            <!-- Brewery Description -->
            <label for="description">Description</label><br />
            <textarea name="name_quantity"
                id="name_quantity"
                cols="50"
                rows="7"
                required
                placeholder="Please provide a brief description about the brewery">
            </textarea>

            <p>
                <input class="button" type="submit" value="Send" /> &nbsp; 
                <input class="button" type="reset" value="Clear" /> &nbsp;
            </p>

        </form>
        <!-- Form End-->

    </div>
    <!-- wrapper end -->
    <!-- content end -->
    
</body>
</html>