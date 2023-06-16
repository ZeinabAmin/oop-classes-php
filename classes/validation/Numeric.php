<?php
class Numeric implements validationrule
{
  public function check($name, $value)
  {
    if (!is_numeric($value)) {
      return "$name must be Numeric";
    }
    return false;
  }
}
