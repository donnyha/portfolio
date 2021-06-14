<?php

require __DIR__ . '/includes/header.inc.php';

?>
<div class="wrapper">
    <h1>Review Edit</h1>

    <div class="container">
        <form action="/?page=handle_edit_review&id=<?=e($review['id']) ?>" method="post">

            <label>Title</label><br />
            <input type="text" name="title" value="<?=e($review['title']) ?>" />
            <br />

            <label>Review</label><br />
            <textarea type="text" name="review" cols="70" rows="10"><?=e($review['description']) ?></textarea>
            <br />

            <label>Review</label><br />
            <select name="rating">
                <?php if($review['star_num'] === '0') : ?>
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

                <?php elseif($review['star_num'] === '1') : ?>
                <option value="0">0</option>
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

                <?php elseif($review['star_num'] === '2') : ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2" selected>2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

                <?php elseif($review['star_num'] === '3') : ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3" selected>3</option>
                <option value="4">4</option>
                <option value="5">5</option>

                <?php elseif($review['star_num'] === '4') : ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4" selected>4</option>
                <option value="5">5</option>

                <?php elseif($review['star_num'] === '5') : ?>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5" selected>5</option>
                <?php endif; ?>
            </select>
            <br />

            <button type="submit">Submit</button>

        </form>

    </div>

</div>

</body>

</html>