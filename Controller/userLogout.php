<?php

    require '../includes/config.php';

    unset($_SESSION['id']);
    unset($_SESSION['idTokenString']);

    echo "<script>window.location.href='../index.php?logged_out';</script>";

?>