<?php

require __DIR__ . '/includes/header.inc.php';

?>
<div class="wrapper">
    <h1>Edit Beer</h1>

    <div class="container">
        <form action="/?page=handle_edit_beer&id=<?=e($beer['id']) ?>" method="post">

            <label>Brewery</label><br />
            <select name="brewery_id">
                <option value="1" <?php if($beer['brewery_id'] === '1') : ?> selected <?php endif; ?>>
                    Trans Canada
                </option>

                <option value="2" <?php if($beer['brewery_id'] === '2') : ?> selected <?php endif; ?>>
                    Half Pints
                </option>

                <option value="3" <?php if($beer['brewery_id'] === '3') : ?> selected <?php endif; ?>>
                    Kilter
                </option>

                <option value="4" <?php if($beer['brewery_id'] === '4') : ?> selected <?php endif; ?>>
                    Little Brown Jug
                </option>

                <option value="5" <?php if($beer['brewery_id'] === '5') : ?> selected <?php endif; ?>>
                    Fort Garry
                </option>
            </select><br />

            <label>Name</label><br />
            <input type="text" name="name" value="<?=e($beer['name'] ?? '') ?>" />
            <?=eMessage('name', $errors)?><br />

            <label>Beer Type</label><br />
            <select name="type">
                <option value="stout" <?php if($beer['type'] === 'stout') : ?> selected <?php endif; ?>>
                    Stout
                </option>

                <option value="IPA" <?php if($beer['type'] === 'IPA') : ?> selected <?php endif; ?>>
                    IPA
                </option>

                <option value="amber ale" <?php if($beer['type'] === 'amber ale') : ?> selected <?php endif; ?>>
                    Amber ale
                </option>

                <option value="pale ale" <?php if($beer['type'] === 'pale ale') : ?> selected <?php endif; ?>>
                    Pale ale
                </option>

                <option value="specialty ale" <?php if($beer['type'] === 'specialty ale') : ?> selected <?php endif; ?>>
                    Specialty ale
                </option>

                <option value="kolsch" <?php if($beer['type'] === 'kolsch') : ?> selected <?php endif; ?>>
                    Kolsch
                </option>

                <option value="lager" <?php if($beer['type'] === 'lager') : ?> selected <?php endif; ?>>
                    Lager
                </option>

                <option value="pilsner" <?php if($beer['type'] === 'pilsner') : ?> selected <?php endif; ?>>
                    Pilsner
                </option>

                <option value="seltzer" <?php if($beer['type'] === 'seltzer') : ?> selected <?php endif; ?>>
                    Seltzer
                </option>

                <option value="radler" <?php if($beer['type'] === 'radler') : ?> selected <?php endif; ?>>
                    Radler
                </option>

                <option value="european" <?php if($beer['type'] === 'european') : ?> selected <?php endif; ?>>
                    European
                </option>

                <option value="other" <?php if($beer['type'] === 'other') : ?> selected <?php endif; ?>>
                    Other
                </option>
            </select><br />


            <label>Alcohol Percentage</label><br />
            <input type="text" name="alcohol_percentage" placeholder="e.g. 2.50%"
                value="<?=e($beer['alcohol_percentage'] ?? '') ?>" />
            <?=eMessage('alcohol_percentage', $errors)?><br />

            <label>Image</label><br />
            <input type="file" name="image" value="<?=e($beer['image'] ?? '') ?>" />
            <?=eMessage('image', $errors)?><br />

            <label>Description</label><br />
            <textarea type="text" name="description" placeholder="Description goes here">
                <?=e($beer['description'] ?? '') ?>
            </textarea>
            <?=eMessage('description', $errors)?><br />

            <label>Gluten Free?</label><br />
            <select name="gluten_free">
                <option value="1" <?php if($beer['gluten_free'] === '1') : ?> selected <?php endif; ?>>Yes</option>
                <option value="0" <?php if($beer['gluten_free'] === '0') : ?> selected <?php endif; ?>>No</option>
            </select><br />

            <label>Price</label><br />
            <input type="text" name="price" value="<?=e($beer['price'] ?? '') ?>" />
            <?=eMessage('price', $errors)?><br />

            <label>Amount</label><br />
            <input type="text" name="amount" value="<?=e($beer['amount'] ?? '') ?>" />
            <?=eMessage('amount', $errors)?><br />

            <label>Container Type</label><br />
            <select name="container_type">
                <option value="can" <?php if($beer['container_type'] === 'can') : ?> selected <?php endif; ?>>
                    Can
                </option>

                <option value="bottle" <?php if($beer['container_type'] === 'bottle') : ?> selected <?php endif; ?>>
                    Bottle
                </option>

                <option value="growler" <?php if($beer['container_type'] === 'growler') : ?> selected <?php endif; ?>>
                    Growler
                </option>

                <option value="keg" <?php if($beer['container_type'] === 'keg') : ?> selected <?php endif; ?>>
                    Keg
                </option>
            </select><br />

            <label>Flavour</label><br />
            <input type="text" name="flavour" placeholder="e.g. bold" value="<?=e($beer['flavour'] ?? '') ?>" />
            <?=eMessage('flavour', $errors)?><br />

            <label>Grain</label><br />
            <input type="text" name="grain" placeholder="e.g. barley" value="<?=e($beer['grain'] ?? '') ?>" />
            <?=eMessage('grain', $errors)?><br />

            <button type="submit">Submit</button>
        </form>
    </div>
    <!-- /.container -->

</div>

</body>

</html>