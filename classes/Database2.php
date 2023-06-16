<?php

namespace Route\Classes;

interface Database
{
    public function select(string $query): array;
    public function insert(string $query): bool;
    public function update(string $query): bool;
    public function delete(string $query): bool;
}
class Mysql implements Database
{
    private $conn;
    public function __construct($servername, $username, $password, $dbname)
    {
        $this->conn = mysqli_connect($servername, $username, $password, $dbname);
    }
    public function select(string $query): array
    {
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    public function insert(string $query): bool
    {
        return mysqli_query($this->conn, $query);
    }
    public function update(string $query): bool
    {
        return mysqli_query($this->conn, $query);
    }
    public function delete(string $query): bool
    {
        return mysqli_query($this->conn, $query);
    }
    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}
