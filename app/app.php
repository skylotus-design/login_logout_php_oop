<?php
    session_start();

    define('url_saya', '/docs_github/login_logout_php_oop/');

    function fungsi_redirek($laman)
    {
        $pergi_ke = url_saya . $laman;
        header("Location:$pergi_ke");
        exit(0);
    }
?>