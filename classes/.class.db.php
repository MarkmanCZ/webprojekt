<?php

class Database {

    private $host = "server";
    private $user = "user";
    private $pwd = "password";
    private $dbName = "database";
    protected $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pwd, $this->dbName);

        if(!$this->conn) {
            die("Error" . mysqli_connect_error());
        }
    }

}