<?php


class DbController
{
    protected $servername;
    protected $username;
    protected $password;
    protected $dbname;

    public $conn = null;


    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "grocery";

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            echo "fail" . $this->conn->connect_error;
        }
    }

}