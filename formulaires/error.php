<?php

    if (count($errors) > 0) :
?>
    <div >
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php
    endif;
?>