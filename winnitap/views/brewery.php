
<?php

require __DIR__ . '/includes/header.inc.php';

?><!-- content start -->
    <!-- wrapper start-->
    <div id="wrapper">
        <h1>Brewaries around you</h1>
        <div id="map"></div>

            <!-- Table -->
        <table>
            <!-- Table Header -->
            <tr>
                <th>Name</th>
                <th>Beer</th>
                <th>Location</th>
            </tr>

            <!-- Table Row 1-->
            <tr>
                <td>Trans Canada Brewing Co.</td>
                <td>
                    <ul>
                        <li>Bluebeary Ale</li>
                        <li>Lamp Lighter Amber Ale</li>
                        <li>Portager Bohemian Pilsner</li>
                        <li>Cold Brew Coffee Stout</li>
                    </ul>
                </td>
                <td>1-1290 Kenaston Boulevard, Winnipeg, R3P 0R7</td>
            </tr>

            <!-- Table Row 2-->
            <tr>
                <td>Half Pints Brewing Co.</td>
                <td>
                    <ul>
                        <li>Stir Stick Stout</li>
                        <li>Little Scrapper IPA</li>
                        <li>Bulldog Amber Ale</li>
                        <li>St. James Pale Ale</li>
                    </ul>
                </td>
                <td>550 Roseberry Street, Winnipeg, R3H 0T1</td>
            </tr>

            <!-- Table Row 3-->
            <tr>
                <td>Kilter Brewing Co.</td>
                <td>
                    <ul>
                        <li>Stir Stick Stout</li>
                        <li>Little Scrapper IPA</li>
                        <li>Bulldog Amber Ale</li>
                        <li>St. James Pale Ale</li>
                    </ul>
                </td>
                <td>450 Rue Deschambault, Winnipeg, R2H 0K1</td>
            </tr>

            <!-- Table Row 1-->
            <tr>
                <td>Little Brown Jug Brewing Co.</td>
                <td>
                    <ul>
                        <li>1919 Belgian Pale Ale</li>
                        <li>Golden Ale</li>
                        <li>Summer Lager</li>
                        <li>Belgian IPA</li>
                    </ul>
                </td>
                <td>336 William Avenue, Winnipeg, R3A 0H7</td>
            </tr>

            <!-- Table Row 1-->
            <tr>
                <td>Fort Garry Brewing Co.</td>
                <td>
                    <ul>
                        <li>Lime Seltzer</li>
                        <li>Cranberry Crush Radler</li>
                        <li>Portage and Main IPA</li>
                        <li>Northern Lite</li>
                    </ul>
                </td>
                <td>130 Lowson Crescent, Winnipeg, R3P 2H8</td>
            </tr>
        </table>
    </div>
    <!-- wrapper end -->

    <!-- Google Map -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3NzljToakmjNY0YncJhz0ygwVsgYYNj8&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    <!-- content end -->
    
</body>
</html>