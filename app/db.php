<?php

    define('host', 'localhost');
    define('user', 'root');
    define('pass', '');
    define('db', 'docs_github');

    class Database {
        public function __construct()
        {
            $conn = new mysqli(host, user, pass, db);
            $this->conn = $conn;
            return $this->conn;
        }
    }

?>