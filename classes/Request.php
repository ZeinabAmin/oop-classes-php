<?php
class Request
{
    // public function get(string $key)
    // {
    //    return $_GET[$key];
    // }
    public function get(string $key = null)
    {
        //argument optional default null //default value

        // if ($key=null) {
        //     return $_GET;
        // }else {
        //     return $_GET[$key];
        // }
        // 
        // return ($key=null)?$_GET:$_GET[$key]; // ternary operator
        return ($key = null) ? $_GET : ((isset($_GET[$key])) ? $_GET[$key] : null); //nested ternary operator
    }
    public function post(string $key)
    {
        return $_POST[$key];
    }
    public function postClean($key)
    {
        return trim(htmlspecialchars($_POST[$key]));
    }
    public function getHas($key)
    {
        // if (isset($_GET[$key])){
        //     return true;
        // }else{
        //     return false;
        // }

        return (isset($_GET[$key]));  //isset return true or false
    }
    public function postHas($key)
    {
        return (isset($_POST[$key]));  //isset return true or false
    }
    // public function method()
    // {
    //    return $SERVER[request_method];
    // }
}
