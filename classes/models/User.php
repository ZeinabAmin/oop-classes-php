<?php

use Db\Database;

class User extends Database
{
    public function __construct()
    {
        $this->table = "users";
        $this->connect();
    }
}
