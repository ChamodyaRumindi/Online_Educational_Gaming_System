<?php
    if ($_SESSION["role"] !== 'Admin') {
        header("location: ./index.php");
        exit();
    }
?>