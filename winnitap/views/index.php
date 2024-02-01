<?php 

require __DIR__ . '/includes/header.inc.php'; 

?>
<!-- Parralax 1 -->
<div class="para_img" id="img1">
    <div class="para_text">
        <span class="para_border">
            <h1><?=$title ?></h1>
        </span>
    </div>
</div>

<!-- Parralax 2 -->
<section id="page2" class="para_content">
    <h2>Winnipeg's<br /> best kept secret</h2>

    <div id="container">
        <div>
            <img id="img_left" class="manitoba_img" src="/images/beer5.jpg" width="530" height="600" />
            <p>Made in Manitoba</p>
        </div>

        <div>
            <img id="img_centre" class="manitoba_img" src="/images/beer6.jpg" width="530" height="600" />
            <p>Run by Manitobans</p>
        </div>

        <div>
            <img id="img_right" class="manitoba_img" src="/images/beer7.jpg" width="530" height="600" />
            <p>For Manitobans</p>
        </div>
    </div>

</section>

<!-- Parralax 3 -->
<section id="page3" class="para_content">
    <p>Support<br /> your<br /> local<br /> brewary</p>
    <span id="explore" class="call_to_action"><a href="\?page=brewery">Explore Winnipeg</a></span>
</section>

<!--footer start-->
<footer></footer>
<!--footer end-->
</body>

</html>