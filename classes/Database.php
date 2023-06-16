<?php
namespace Db;
class Database
{
    public $table;
    public $conn;

    public function connect()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "dbtest");
        if (!$this->conn) {
            die("error in connection");
        }
    }
    // public function selectAll()
    // {
    //   $sql="select * from $this->table";
    //   $result=mysqli_query($this->conn,$sql);
    //   return mysqli_fetch_all($result,MYSQLI_ASSOC);
    // }
    public function selectAll(string $fields = "*"):array
    {
        $sql = "select $fields from $this->table";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    public function selectId($id, string $fields = "*")
    {
        $sql = "select $fields from $this->table where id=$id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }
    public function selectWhere($cond, string $fields = "*"): array
    {
        $sql = "select $fields from $this->table where $cond";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    public function insert($fields, $values):bool
    {
        $sql = "insert into $this->table($fields) values ($values)";
        // return mysqli_query($this->conn, $sql);
        if (mysqli_query($this->conn, $sql)) {
           return true;
        }else{
            return false; 
        }
    }
    public function update($fields, $id):bool
    {
        $sql = "update $this->table set $fields where id=$id";
        return mysqli_query($this->conn, $sql);
    }
    public function delete($id):bool
    {
        $sql = "delete from $this->table where id=$id";
        return mysqli_query($this->conn, $sql);
    }
}
