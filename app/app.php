<?php
    session_start();

    define('url_saya', '/docs_github/php_oop_login_logout/');

    function fungsi_redirek($laman)
    {
        $pergi_ke = url_saya . $laman;
        header("Location:$pergi_ke");
        exit(0);
    }
?>