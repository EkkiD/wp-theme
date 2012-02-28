<?php

function welcome_blurb() {
    ?>
    <div id="welcome-blurb">
    </div>
    <?php
}
add_action('thematic_belowheader','welcome_blurb');
?>
