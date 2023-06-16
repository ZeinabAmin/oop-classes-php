<?php
class Validator
{
    private $errors = [];
    // public function validate($name, $value, $rules) //name of input //array rules check
    // {
    //     foreach ($rules as $rule) {
    //         if ($rule == "numeric") {
    //             $obj = new Numeric;
    //         } elseif ($rule == "required") {
    //             $obj = new Required;
    //         } elseif ($rule == "string") {
    //             $obj = new Str;
    //         }
    // $err=$obj->check($name,$value);
    // if ($err!=false) {
    //    $this->errors[]=$err;
    // }
    //     }
    // }
    public function validate($name, $value, $rules) //name of input //array rules check
    {
        foreach ($rules as $rule) {
            $obj = new $rule;
            $err = $obj->check($name, $value);
            if ($err != false) {
                $this->errors[] = $err;
            }
        }
    }
    public function getErrors()
    {
        return $this->errors;
    }
    public function checkError()
    {
        return empty($this->errors); //true //false
    }
}
