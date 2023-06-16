<?php
class Str implements validationrule
{
  public function check($name, $value)
  {
    if (is_numeric($value) || !is_string($value)) {
      return "$name must be String";
    }
    return false;
  }
}
