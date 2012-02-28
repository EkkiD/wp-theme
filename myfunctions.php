<?php

function welcome_blurb() {
    ?>
    <div id="welcome-blurb">
    <p> Welcome to <?php bloginfo('name'); ?>.</p>
    </div>
    <?php
}
add_action('thematic_belowheader','welcome_blurb');
?>
