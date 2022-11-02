<?php

    require '../includes/config.php';

    unset($_SESSION['id']);
    unset($_SESSION['idTokenString']);

    echo "<script>window.location.href='../admin/login.php?logged_out';</script>";

?>