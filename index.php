<?php

// index is just redirecting so that when first in, you go to starterpage

if (empty($_POST['page'])) {
    $display_modal_window = 'none';
    include ('starterpage.php');
    exit;
}

?>