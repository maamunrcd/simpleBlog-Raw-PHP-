<?php

class Database {

    private $conn;

    public function __construct($host, $user, $pass, $dbname) {
        $this->conn = mysqli_connect($host, $user, $pass, $dbname) or die("Db connection problem" . mysqli_connect_error());
    }

    public function Insert($table, $cols) {
        $sql = "INSERT INTO $table SET $cols";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_affected_rows($this->conn) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function Update($table, $cols, $where) {
        $sql = "UPDATE $table SET $cols WHERE $where";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_affected_rows($this->conn) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllMenu($table, $cols, $where) {
        $sql = "SELECT $cols FROM $table WHERE $where";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public function getAll($table, $cols) {
        $sql = "SELECT $cols FROM $table";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    public function getAllOrder($table,$cols,$where,$order) {
        $sql = "SELECT $cols FROM $table WHERE $where ORDER BY $order";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    public function getById($table, $cols, $where) {
        $sql = "SELECT $cols FROM $table WHERE $where";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return false;
        }
    }

    public function getlimit($table, $cols, $where, $start, $perpage) {
        $sql = "SELECT $cols FROM $table WHERE $where Limit $start,$perpage";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public function Delete($table, $where) {
        $sql = "DELETE FROM $table WHERE $where";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_affected_rows($this->conn) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function jonTable() {
        $sql = "SELECT * FROM article_album LEFT JOIN categorys ON article_album.cat_id=categorys.cat_id";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return "Wrong";
        }
    }
    public function getByLimit($table,$cols,$start,$limit){
        $sql="SELECT $cols FROM $table LIMIT $start,$limit";
        $result=  mysqli_query($this->conn,$sql);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }else{
            return FALSE;
        }
    }

}

$obj = new Database("localhost", "root", "1234", "zboom_db");